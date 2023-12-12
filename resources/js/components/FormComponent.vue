<template>
<div class="w-50" style="margin-left: auto; margin-right: auto;">
    <div>
        <div class="input-group mb-3">
<!--            <span class="input-group-text" id="basic-addon1">@</span>-->
            <input type="text" v-model="username" class="form-control username" required placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="email" v-model="email" class="form-control email" required placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
<!--            <span class="input-group-text" id="basic-addon2">@example.com</span>-->
        </div>

        <label for="basic-url" class="form-label">Home Page</label>
        <div class="input-group mb-3">
<!--            <span class="input-group-text" id="basic-addon3">https://example.com</span>-->
            <input type="text" v-model="home_page"  class="form-control home_page" placeholder="https://example.com" id="basic-url" aria-describedby="basic-addon3">
        </div>

        <label for="basic-url" class="form-label">CAPTCHA</label>
        <div class="input-group mb-3">
<!--            <span class="input-group-text" id="basic-addon3">https://example.com</span>-->
            <input type="text" v-model="capcha" class="form-control capcha" required placeholder="capcha" id="capcha" aria-describedby="basic-addon3">
        </div>


        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-outline-secondary">[i]</button>
                <button type="button" class="btn btn-outline-secondary">[strong]</button>
                <button type="button" class="btn btn-outline-secondary">[code]</button>
                <button type="button" class="btn btn-outline-secondary">[a]</button>
            </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Comment</span>
            <textarea class="form-control text"  v-model="text" required aria-label="With textarea"></textarea>
        </div>

        <div class="input-group mb-3">
            <input type="file" class="form-control" id="image">
            <label class="input-group-text" for="image">Image</label>
        </div>


        <div class="input-group mb-3">
            <input type="file" class="form-control" id="text-file">
            <label class="input-group-text" for="text-file">Text File</label>
        </div>

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" @click.prevent="sendComment" class="btn btn-primary send">Send</button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "FormComponent",

    data(){

        return{
            username: null,
            email: null,
            home_page: null,
            capcha: null,
            text: null,
        }
    },

    methods:
        {
            sendComment(){
                axios.post('api/add_comment', {
                    username: this.username,
                    email: this.email,
                    home_page: this.home_page,
                    capcha: this.capcha,
                    text: this.text,
                })
                .then( res => {
                    console.log(res);
                })
            }
        },
}
</script>

<style scoped>

</style>
