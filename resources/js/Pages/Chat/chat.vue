<template>
    <ChatLayout>
        <Head title="Chat" />
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
        </div> -->
    </ChatLayout>
</template>

<script>
    
    import moment from 'moment';
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
            console.log(tempMessage);
            this.body = null;
        }
    }
}
</script>

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
</style>