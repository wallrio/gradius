function helps(){
            this.dirhelp = 'app/views/help/';
            
            function translates(){
                //responses = 'var html = "[#data]";';
                //responses = 'html = replaceAll("{about}","Sobre","[#data]");';
                //responses = responses + 'responses += replaceAll("{home}","Inicio",html);';
                //responses = 'responses = html;';
               //return responses;
            }
            
            this.about = function() {
                scripts.ajax(this.dirhelp + 'about.php','resultHelpConteudo','loading');
            }
            
            
            
}