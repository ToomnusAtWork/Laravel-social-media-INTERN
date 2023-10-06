<template>
    <div class="chat__message" > 
        <strong class="chat__message-user">{{ message.user_id.username }}</strong>
        <span class="chat__message-timestamp">{{ message.created_at.datetime }}</span>
        <p class="chat__message-body">{{ message.body }}</p>
    </div>
</template>

<script setup>
    defineProps ({
        message: Object
})
</script>


<style lang="scss">
    .chat {
        &__message {
            padding: 15px;
            border-bottom: 1px solid #edeaea;

            &--own {
                background-color: #f0f0f0;
            }

            &-user {
                font-weight: 800;
            }

            &-timestamp {
                color: #aaa;
                margin: 10px;
            }

            &-body {
                margin-bottom: 0;
                white-space: pre-wrap;
            }
        }

    }
</style>
