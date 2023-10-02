<template>
    <div class="chat__messages" ref="messages">
        <ChatMessage />
    </div>
</template>

<script setup>
    import ChatMessage from '@/Components/Chat/ChatMessage.vue';
</script>

<script>
    export default {
        data () {
            return {
                messages: []
            }
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

<style lang="scss">
    .chat {
        &__messages {
            height: 400px;
            max-height: 400px;
            overflow-y: scroll;
        }
    }
</style>