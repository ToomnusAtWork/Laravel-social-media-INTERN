<template lang="">
    <div class="users">
        <div class="users__header">1 User online</div>
        <div class="users__user">
            <a href="#">Peter</a>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>

<style lang="css">
    .users {
        background-color: #fff;
        border: 1px solid #d3e0e9;
        border-radius: 3px;
    }

    .header {
        padding: 15px;
        font-weight: 800;
        margin: 0;
    }

    .header {
        padding: 0 15px;

        &:last-child {
            padding-bottom: 15px;
        }
    }    
</style>