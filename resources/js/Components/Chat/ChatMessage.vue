<template>
    <div class="chat__message chat__message--own"> 
        <strong class="chat__message-user">Peanut</strong>
        <span class="chat__message-timestamp">: 18/09/2023 (10:23)</span>
        <p class="chat__message-body">สวัสดีจ้า</p>
    </div>
</template>

<script>
export default {
    props: ['message']   
}
</script>

<style lang="scss">
    .chat {
        &__message {
            padding: 15px;
            border-bottom: 1px solid #eee;

            &--own {
                background-color: #f0f0f0;
            }

            &-user {
                font-weight: 800;
            }

            &-timestamp {
                color: #aaa;

            }

            &-body {
                margin-bottom: 0;
                white-space: pre-wrap;
            }
        }

    }
</style>
