function surligne(champ, erreur)// fonction qui colore les textbox
{
    if (erreur)
        champ.style.backgroundColor = "#fba";// color en rouge si incorrect 
    else
        champ.style.backgroundColor = "#3D7";// color en vert si correct
}

function verifPswdInsc(champ)// fonction qui verifie le mot de passe lors de l'inscription
{
    if (champ.value.length < 8)// si le mot de passe est inferieur a 8 caractere, 
    {
        surligne(champ, true);// on passe la variable erreur de la fonction surligne a vrai, ce qui va colorer la textbox en rouge
        alert("Votre mot de passe doit contenir au minimum 8 caractères");// on avertit l'utilisateur de son erreur
        return false;
    }
    else// si le mot de passe est egal ou superieur a 8 caractere
    {
        surligne(champ, false);//  sinon on passe la variable erreur de la fonction surligne a faux, se qui va colorer la textbox en vert
        return true;
    }
}

function verifMailInsc(champ)//fonction qui verifie l'email lors de l'inscription
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;//caractère autorisé dans le mail
    if (!regex.test(champ.value))// si l'email entré ne respecte pas la norme ci-dessus
    {
        surligne(champ, true);//on passe la variable erreur de la fonction surligne a faux, se qui va colorer la textbox en rouge
        alert("Votre adresse e-mail est incorrecte");//avertit l'utilisateur de son erreur
        return false;
    }
    else
    {
        surligne(champ, false);// sinon on passe la variable erreur de la fonction surligne a faux, se qui va colorer la textbox en vert
        return true;
    }
}

function verifNomInsc(champ)//fonction qui verifie le nom lors de l'inscription
{
    if (!champ.value)//si la textbox est vide
    {
        surligne(champ, true);//on passe la variable erreur de la fonction surligne a faux, se qui va colorer la textbox en rouge
        alert("Ne peux être vide");// on avertit l'utilisateur 
        return false;
    }
    else
    {
        surligne(champ, false);//on passe la variable erreur de la fonction surligne a faux, se qui va colorer la textbox en vert
        return true;
    }
}

function verifPrenomInsc(champ)//fonction qui verifie le prenom lors de l'inscription
{
    if (!champ.value)//si la textbox est vide
    {
        surligne(champ, true);//on passe la variable erreur de la fonction surligne a faux, se qui va colorer la textbox en rouge
        alert("Ne peux être vide");// on avertit l'utilisateur 
        return false;
    }
    else
    {
        surligne(champ, false);//on passe la variable erreur de la fonction surligne a faux, se qui va colorer la textbox en vert
        return true;
    }
}