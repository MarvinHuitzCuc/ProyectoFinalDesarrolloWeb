
var user = new User();
var imageUser = (evt)=>{
    user.archivo(evt, "imageUser");
}
var client = new Client();
var imageClient = (evt)=>{
    user.archivo(evt, "imageClient");
}
var provider = new Provider();
var imageProvider = (evt)=>{
    provider.archivo(evt, "imageProvider");
}
var principal = new Principal();
$().ready(()=>{
    let URLactual = window.location.pathname;
    principal.linkPrincipal(URLactual);
});
