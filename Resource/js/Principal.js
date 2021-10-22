class Principal {
    linkPrincipal(link) {
        let url = "";
        let cadena = link.split("/");
        for (let i = 0; i < cadena.length; i++) {
            if (i >= 3) {
                url += cadena[i];
            }
        }
        switch (url) {
            case "UserRegister":
                document.getElementById('files').addEventListener('change', imageUser, false);
                break;
            case "ClientRegister":
                document.getElementById('files').addEventListener('change', imageClient, false);
                break;
            case "ProviderRegister":
                document.getElementById('files').addEventListener('change', imageProvider, false);
                break;
        }
    }
}