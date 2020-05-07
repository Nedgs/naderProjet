$(document).ready(function(){
    var resultat =true;
   

    $('#form').submit(function(){
        resultat = true;

        if($('#titre').val() ==""){
            $('#titre').attr('placeholder',':(').parent().addClass('has-error');
            $('#titre').css({ // on rend le champ rouge
                borderColor : 'red',
	           
            });
            
            resultat = false;
        }
        else{
            $('#titre').css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            
        });
        }

        if($('#contenu').val() ==""){
            $('#contenu').attr('placeholder',':(').parent().addClass('has-error');
            $('#contenu').css({ // on rend le champ rouge
                borderColor : 'red',
	           
            });
            
            resultat = false;
        }
        else{
            $('#contenu').css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            
        });
        }
        

        return resultat;
    });


    $('#titre').keyup(function(){

        if($('#titre').val() == ""){
            $('#titre').attr('placeholder',':(').parent().addClass('has-error');

        }
        else{
            $('#titre').parent().removeClass('has-error');
        }
    })
    $('#contenu').keyup(function(){

        if($('#contenu').val() == ""){
            $('#contenu').attr('placeholder',':(').parent().addClass('has-error');

        }
        else{
            $('#contenu').parent().removeClass('has-error');
        }
    })
});