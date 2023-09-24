<template>
    <ChatLayout>
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    USER active
                </div>
            </div>
        </div>
        <template #Message>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">Chatbox</div>
                <div class="chatbox">
                    <chat-message></chat-message>
                    <form action="#" class="chat_form">
                        <textarea 
                            id="body" 
                            cols="70" 
                            rows="6"
                            class="chat_input"
                            @keydown="handleMessageInput"
                            v-model="body">
                        </textarea>
                        <span class="chat_form-helptext">
                            Hit to send
                        </span>
                    </form>
                </div>
            </div>
        </template>
        <!-- <div class="chat">
            <chat-message></chat-message>
            <form action="#" class="chat_form">
                <textarea 
                    id="body" 
                    cols="30" 
                    rows="40"
                    class="chat_input"
                    @keydown="handleMessageInput"
                    v-model="body">
                </textarea>
                <span class="chat_form-helptext">
                    Hit to send
                </span>
            </form>
        </div>
        <template #User>
            <div>
                Helloworld
            </div>
        </template> -->
    </ChatLayout>
</template>

<script setup>
    import ChatLayout from '@/Layouts/ChatLayout.vue';
    import moment from 'moment';

</script>

<script>
        export default {
    data() {
        return {
            body: null
        };
    },
    methods: {
        handleMessageInput(e) {
            if (e.keyCode === 13 && !e.shiftKey) {
                e.preventDefault();
                this.send();
            }
        },
        buildTempMessage() {
            let tempId = Date.now();
            return {
                id: tempId,
                body: this.body,
                created_at: moment().utc(0).format('YYYY-MM-DD HH:mm:ss'),
                selfOwned: true,
                user: {
                    name: 'Peanut'
                }
            };
        },
        send() {
            if (!this.body || this.body.trim() === '') {
                return;
            }
            let tempMessage = this.buildTempMessage();
            // send ajax request
             axios.post('/chat/messages', {
                    body: this.body.trim()
                }).catch(() => {
                console.log('failed');
                })
            console.log(tempMessage);
            this.body = null;
        }
    }
}

</script>
<!-- 
<style lang="css">
.chat {
        background-color: #fff;
        border: 1px solid #d3e0e9;
        border-radius: 3px;
}

form .chat_form {
    border-top: 1px solid #d3e0e9;
    padding: 10px;
}

textarea .chat_input {
    width: 100%;
    border-top: 1px solid #d3e0e9;
    padding: 5px 10px;
    outline: none;
}
span .chat_form-helptext {
    color: #aaa;
}
</style> -->