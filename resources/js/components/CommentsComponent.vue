<template>

    <dv class="w-50" style="margin-left: auto; margin-right: auto;">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">user id</th>
                <th scope="col">text</th>
                <th scope="col">id</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="comment in comments">
                <th scope="row">{{ comment.user_id }}</th>
                <td>{{comment.text}}</td>
                <td>{{comment.id}}</td>
            </tr>
            </tbody>
        </table>
    </dv>
</template>

<script>
export default {
    name: "CommentsComponent",


    data(){
        return {
            comments: null,
        }
    },

    mounted() {
        this.getComments();
    },

    methods:
        {
            getComments(){
                axios.get('api/get_comments')
                .then( res =>{
                    this.comments = res.data;
                    console.log(this.comments );
                })
            }

        },
}
</script>

<style scoped>

</style>
