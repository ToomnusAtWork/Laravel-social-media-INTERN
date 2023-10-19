<template>
    <div class="users">
        <div class="users__header">{{ message }} {{ pluralize('user', message.length) }} online</div>
        <div class="users__user" v-for="user in users">
        <a href="#">{{ user.name }}</a>
        </div>
    </div>
</template>


<script setup>
    import pluralize from 'pluralize';
    defineProps ({
        message: Object
})
// export default {
        
//         data () {
//             return {
//                 users: []
//             }
//         },
//         methods: {
//             pluralize: pluralize
//         },
//     }
</script>

<style lang="scss">
    .users {
        background-color: #fff;
        border-radius: 3px;

        &__header {
            padding: 15px;
            font-weight: 800;
            margin: 0;
        }

        &__user {
            padding: 0 15px;

            &:last-child {
                padding-bottom: 15px;
            }
        }
    }
</style>