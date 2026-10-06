"""Lokaler Start ohne zusätzliche Pakete. Nur an 127.0.0.1 gebunden."""
from __future__ import annotations

import argparse
import functools
from http.server import SimpleHTTPRequestHandler, ThreadingHTTPServer
from pathlib import Path
import threading
import webbrowser


class ToolHandler(SimpleHTTPRequestHandler):
    def end_headers(self) -> None:
        self.send_header("Cache-Control", "no-store")
        self.send_header("X-Content-Type-Options", "nosniff")
        super().end_headers()

    def log_message(self, fmt: str, *args: object) -> None:
        # Keine fortlaufenden Abrufmeldungen; das Startfenster bleibt lesbar.
        pass


def main() -> None:
    parser = argparse.ArgumentParser(description="HTML-Tag-Tool lokal starten")
    parser.add_argument("--port", type=int, default=8765)
    parser.add_argument("--no-browser", action="store_true")
    args = parser.parse_args()
    if not 0 <= args.port <= 65535:
        parser.error("Der Port muss zwischen 0 und 65535 liegen.")
    root = Path(__file__).resolve().parent
    if not (root / "index.html").is_file():
        parser.error("index.html fehlt. Bitte den vollständigen ZIP-Ordner entpacken.")
    handler = functools.partial(ToolHandler, directory=str(root))
    try:
        server = ThreadingHTTPServer(("127.0.0.1", args.port), handler)
    except OSError:
        if args.port == 0:
            raise
        server = ThreadingHTTPServer(("127.0.0.1", 0), handler)
    url = f"http://127.0.0.1:{server.server_port}/index.html"
    print("\nHTML-Tag-Tool gestartet", flush=True)
    print(f"Adresse: {url}", flush=True)
    print("Dieses Fenster offen lassen. Beenden mit Strg+C.\n", flush=True)
    if not args.no_browser:
        def open_browser() -> None:
            try:
                if not webbrowser.open(url):
                    print("Bitte die Adresse oben im Browser öffnen.", flush=True)
            except webbrowser.Error:
                print("Bitte die Adresse oben im Browser öffnen.", flush=True)
        timer = threading.Timer(0.4, open_browser)
        timer.daemon = True
        timer.start()
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        print("\nTool-Server beendet.", flush=True)
    finally:
        server.server_close()


if __name__ == "__main__":
    main()
