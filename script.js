//recuperations des elements
const form = document.querySelector("#form");
const nom = document.querySelector("#nom");
const adresse = document.querySelector("#adresse");
const etage = document.querySelector("#etage");
const appart= document.querySelector("#appart");

//evenements
form.addEventListener('click',e=>{
    e.preventDefault();

    form_verify();    
})

//fonctions
 function form_verify(){
    //obtenir toutes les valeurs des inputs
    const nomValue = nom.value.trim();
    const addValue = adresse.value.trim();
    const etaValue = etage.value.trim();
    const appValue = appart.value.trim();

        //verification du nom
         if(nomValue === ""){
            let message = "le nom est vide";
             setError(nom,message);
         }    
}