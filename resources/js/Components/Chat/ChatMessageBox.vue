<template>
    <div class="chat__messages" ref="messages">
        <ChatMessage />
    </div>
</template>

<script>
    export default {
        data () {

        },
        // mount () {
        //     // axios.get('/Chat/ChatMessageBox').then((response) => {
                
        //     //     this.messages = response.data;
        //     // });

        //     // emitter.on('message.added', (data) => {
        //     //     this.messages.unshift(this.message);
        //     //     if(message.selfOwned) {
        //     //         this.$refs.messages.scrollTop = 0;
        //     //     }
        //     // })
        //     // .on('messages.removed', (message) => {
        //     //     this.removeMessage(message.id);
        //     // });
        // }
    }
</script>