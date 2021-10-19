<template>
    <div>
        <table class="table">
            <thead>
                 <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(book,index) in items" :key="index">
                    <th scope="row">{{book.id}}</th>
                    <td>{{ book.name }}</td>
                    <td>{{ book.category }}</td>
                    <td>{{ book.description }}</td>
                    <td>
                        <button-content  btn-class="btn btn-dark w-100 mb-2" btn-name="Edit" :btn-redirect="`edit/${book.id}`"></button-content>
                        <form-content 
                        :action-form="`{{ route('delete'),${book.id} }}`"
                        >
                        
                        </form-content>
                        <button-content btn-name="Delete" btn-type="submit" btn-class="btn btn-danger w-100"></button-content>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import Button from './Button.vue';
import Form from './Form.vue';
export default {
    props:{
        'items':Array,
    },
    components:{
        'button-content':Button,
        'form-content':Form,
    }
    
}
</script>