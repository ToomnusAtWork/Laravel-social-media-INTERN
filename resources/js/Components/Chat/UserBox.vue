<template>
    <div class="users">
        <div class="users__header">
            2 User online</div>
        <div class="users__user" >
            <ul>
                <li>
                    <a href="#" class="text-blue-700 ">นายชาไทย หวานปกติ</a>
                </li>
                <li>
                    <a href="#" class="font-extrabold">Aonzaza</a>
                </li>
            </ul>
        </div>
    </div>
</template>


<script>
// import pluralize from 'pluralize';
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