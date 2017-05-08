
// control de saisi de formulaire

function verif_formulaire()
{
if(document.formulaire.user_name.value =="") {
   alert("Veuillez entrer votre UserName");
   document.formulaire.user_name.focus();
   document.formulaire.user_name.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.user_name.style.borderColor = "#d9d9d9";
  
  if(document.formulaire.user_name.value.length<5) {
   alert("La taille de user name doit etre >=6");
   document.formulaire.user_name.focus();
   document.formulaire.user_name.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.user_name.style.borderColor = "#d9d9d9";
  
  var a = 1;
 for(i=0;i<document.formulaire.user_name.value.length;++i)
   if(document.formulaire.user_name.value.charAt(i)==" ")
     	 a = -1;
 if(a == -1) {
   alert("User name ne contient pas des espaces");
       document.formulaire.user_name.focus();
   document.formulaire.user_name.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.user_name.style.borderColor = "#d9d9d9";
  
  
 if(document.formulaire.name.value == "")  {
   alert("Veuillez entrer votre nom!");
   document.formulaire.name.focus();
   document.formulaire.name.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.name.style.borderColor = "#d9d9d9";
	
 if(document.formulaire.f_name.value == "")  {
   alert("Veuillez entrer votre Prenon!");
   document.formulaire.f_name.focus();
   document.formulaire.f_name.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.f_name.style.borderColor = "#d9d9d9";
  
 if(document.formulaire.mot_de_passe.value == "") {
   alert("Veuillez entrer votre mot de passe!");
   document.formulaire.mot_de_passe.focus();
   document.formulaire.mot_de_passe.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.mot_de_passe.style.borderColor = "#d9d9d9";
  
 if(document.formulaire.courriel.value == "") {
   alert("Veuillez Donner votre mail");
   document.formulaire.courriel.focus();
   document.formulaire.courriel.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.courriel.style.borderColor = "#d9d9d9";
  
 if(document.formulaire.courriel.value.indexOf('@') == -1) {
   alert("Veuillez mettre l'@!");
   document.formulaire.courriel.focus();
   document.formulaire.courriel.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.courriel.style.borderColor = "#d9d9d9";
  
 if(document.formulaire.age.value == "") {
   alert("L'age doit être un nombre!");
   document.formulaire.age.focus();
   document.formulaire.age.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.age.style.borderColor = "#d9d9d9";
  
  
 var a = 1;
 for(i=0;i<document.formulaire.age.value.length;++i)
   if(document.formulaire.age.value.charAt(i) < "1"
   || document.formulaire.age.value.charAt(i) > "99")
     	 a = -1;
 if(a == -1) {
   alert("votre age n'est pas correcte veuillez mettre un nombre !!!");
       document.formulaire.age.focus();
   document.formulaire.age.style.borderColor = "#FF0000";
   return false;
  }else document.formulaire.age.style.borderColor = "#d9d9d9";
  
}