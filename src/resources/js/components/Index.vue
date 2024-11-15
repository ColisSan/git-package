<template>
    <div>
        <button @click="speak('KILL ME PLEASE')">KLIKNI ME</button>
        <h1>Zdravo svijete</h1>
    </div>

</template>

<script>
    export default {
        data: () => ({
            firstMove: false            
        }),
        mounted: function() {
            this.firstSpeak('Welcome to ZharTar');    
        },
        methods: {
            speak: function(text) {
                let speechUtterance = new window.SpeechSynthesisUtterance();
                speechUtterance.text = text;
                window.speechSynthesis.speak(speechUtterance)
            },
            firstSpeak: function(){
                if(this.firstMove){
                    return;
                }
                this.firstMove = true;
                this.speak('Welcome to git package');
            }
        }
    }
</script>
