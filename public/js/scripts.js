var responses="1";
function scripts () {
    
            //this.type = type;
            this.pathIMGloading = "public/img/loading.gif";
            
            this.str_replace = function(origem,destino,response){
                while(response.indexOf(origem)!=-1){response=response.replace(origem,destino);}
                return response; 
            }
            
            function ajustString(msg){
                msg=String(msg);    
                    while (msg.indexOf("\n")!=-1){msg=msg.replace("\n","");}
                    while (msg.indexOf("  ")!=-1){msg=msg.replace("  ","");}
                    var SCRIPT_REGEX = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi;
                    while (SCRIPT_REGEX.test(msg)) {
                        msg = msg.replace(SCRIPT_REGEX, "");
                    }                    
                    while(msg.indexOf('"')!=-1){msg=msg.replace('"','\'');}                    
                    msg=msg.trim();
                    return msg;
            }
            
            this.ajax = function(url,objectprint,objloadinginfo,action,actioninto) {                
                if(objloadinginfo){
                    var loading_ant = $('#'+objloadinginfo).html();
                    $('#'+objloadinginfo).html('<img src="'+URL+this.pathIMGloading+'">');
                }
                $.post(url, 
                    function(response){                        
                        //alert(typeof actioninto);
                        //converte o action para string e faz um replace do conteudo 
                        if((typeof actioninto) == 'function'){
                            actioninto = String(actioninto).replace('[#data]',ajustString(response));                        
                            var actionintobody = actioninto.substring(actioninto.indexOf("{") + 1, actioninto.lastIndexOf("}"));                                               
                            var actioninto_eval = new Function(actionintobody);
                            actioninto_eval();
                        }
                        
                        action = String(action).replace('[#data]',ajustString(response));                        
                        //test1(response);
                        if(action)
                        eval(action);
                        $("#"+objectprint).html(response);
                        
                        //converte o action para string e faz um replace do conteudo 
                        /*
                        if((typeof action) == 'function'){
                            action = String(action).replace('[#data]',ajustString(response));                        
                            var actionbody = action.substring(action.indexOf("{") + 1, action.lastIndexOf("}"));                                               
                            var action_eval = new Function(actionbody);
                            action_eval();
                        }*/
                        //alert(typeof action);
                        //action = object(action);
                        //
                        
                        
                        
                        
                        //
                         //   var action_eval = new action;
                           // action_eval;
                       // }
                        if(objloadinginfo){
                          $('#'+objloadinginfo).html(loading_ant);
                        }
                    } 
                  );       
            };
                       
}