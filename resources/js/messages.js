"use strict";

const { default: axios } = require("axios");

(function(){



    function callback(){
        const formElm = document.getElementById('message-form');
        
        formElm.onsubmit = function(e){
            e.preventDefault()
            const formElm = this;
            axios.post('/api/messages/add', {
                content: formElm.elements.content.value,
            }).then(response => {
                const { data } = response.data
                renderMessage(data.content, data.user.name, data.created_at);
                formElm.reset()
            })
        }
        
    }


      if (
          document.readyState === "complete" ||
          (document.readyState !== "loading" && !document.documentElement.doScroll)
      ) {
        callback();
      } else {
        document.addEventListener("DOMContentLoaded", callback);
      }
       

    
})();