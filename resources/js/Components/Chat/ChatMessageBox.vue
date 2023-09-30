<template>
    <div class="chat__messages" ref="messages">
        <ChatMessage />
        <!-- <chat-message v-for="message in messages" 
        :key="message.id" 
        :message="message">
        </chat-message> -->
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
        mount () {
            axios.get('message').then((response) => {
                this.messages = response.data;
            });

            Bus.$on('message.added', (data) => {
                this.messages.unshift(this.message);

                if(message.selfOwned) {
                    this.$refs.messages.scrollTop = 0;
                }
            });
        }
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