<template>
    <div class="chat__message">
        message
    </div>
</template>
<script>
    import Bus from '../../bus';

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
            // listen for event
        }
    }
</script>
<style lang="css">
    
</style>