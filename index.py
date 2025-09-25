import webbrowser

def open_localhost():
    # URL à ouvrir
    url = "http://localhost:8000"
    
    # Ouvrir l'URL dans le navigateur par défaut
    webbrowser.open(url)

# Appel de la fonction
open_localhost()
