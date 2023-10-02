
<script setup>
    import ChatLayout from '@/Layouts/ChatLayout.vue';
    import ChatMessageBox from '@/Components/Chat/ChatMessagebox.vue';
    import UserBox from '@/Components/Chat/Userbox.vue';
    import moment from 'moment';
    import { Head } from '@inertiajs/vue3';
</script>


<template>
    <Head title="Chat" />
    <ChatLayout>
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <UserBox />
            </div>
        </div>
        <template #Message>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">Chatbox</div>
                <div class="chatbox">
                    <ChatMessageBox />
                    <form action="#" class="chat__form">
                        <!-- v-on:focus="form.clearErrors('body')"
                            v-model="form.body" -->
                        <textarea
                            name="chat" 
                            id="body" 
                            cols="50" 
                            rows="6"
                            class="chat__form-input border-gray-300
                             focus:border-indigo-500
                              focus:ring-indigo-500
                              rounded-md shadow-sm"
                            @keydown="handleMessageInput"
                            v-model="body"
                            >
                        </textarea>
                        <span class="chat__form-helptext">
                            Hit Return to send or Shift + Return for new line
                        </span>
                    </form>
                </div>
            </div>
        </template>
    </ChatLayout>
</template>


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
                    name: this.users
                }
            };
        },
        send() {
            if (!this.body || this.body.trim() === '') {
                return;
            }
            let tempMessage = this.buildTempMessage();

            // axios.post('/chat/messages', {
            //         body: this.body.trim()
            // }).catch(() => {
            //     console.log('failed');
            // })
            // this.body = null;
        }

    }
}

</script>

<style lang="scss">
    .chat {
        background-color: #fff;
        border: 1px solid #d3e0e9;
        border-radius: 3px;
        margin-bottom: 20px;

        &__form {
            border-top: 1px solid #d3e0e9;
            padding: 10px;

            &-input {
                width: 100%;
                border: 1px solid #d3e0e9;
                padding: 5px 10px;
                outline: none;
            }

            &-helptext {
                color: #aaa;
            }
        }
    }
</style>