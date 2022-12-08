function actionCall(){
  alert('Thank you our customers support will contact you soon ');}
  function verif(){
    //verification du champ First Name//
    if(formulaire.fname.value=="")
    {alert("Champ First Name est obligatoire");
  return false ; }
  //verification du champ Last Name//
  if(formulaire.lname.value=="")
  {alert("Champ Last Name est obligatoire");
return false; }
//verification du champ Email//
   if (formulaire.email.value==""){
    alert("L'adresse Email est obligatoire");
    return false ;
  }else if ((formulaire.email.value.indexOf ('@')==-1)||(o.m.value.indexOf ('.')==-1))
  {
  alert("Votre adresse mail est incorrecte");}
  }
  
