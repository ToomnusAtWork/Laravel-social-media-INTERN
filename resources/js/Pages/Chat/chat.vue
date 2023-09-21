<template>
    <div class="chat">
        <chat-message></chat-message>
        <form action="#" class="chat__form">
            <textarea 
                id="body" 
                cols="30" 
                rows="40"
                class="chat__form-input">
            </textarea>
            <span class="chat__form-helptext">
                Hit to send
            </span>
        </form>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="css">
    .chat {
        background-color: #fff;
        border: 1px solid #d3e0e9;
        border-radius: 3px;

        &__form{
            border-top: 1px solid #d3e0e9;
            padding: 10px;

            &-input{
                width: 100%;
                border-top: 1px solid #d3e0e9;
                padding: 5px 10px;
                outline: none;
            }

            &-helptext{
                color: #aaa;
            }
        }
    }
</style>