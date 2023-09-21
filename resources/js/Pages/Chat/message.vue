<template lang="">
    <div class="chat__message chat__message--own">
        <strong class="chat__message-user">Peter</strong>
        <span class="chat__message-timestamp">123131</span>
        <p class="chat__message-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Incidunt distinctio illum exercitationem nihil voluptas laboriosam hic, ut, delectus, 
            perspiciatis quod quam eligendi corrupti doloremque officia explicabo enim ea? Aliquid, 
            odio.</p>
    </div>
</template>
<script>
export default {
    
}
</script>

<style lang="css">
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
