require('./bootstrap');

require('alpinejs');

import Vue from 'vue';

import Input from './components/Input';
import Title from './components/Title';
import Button from './components/Button';
import ListItem from './components/ListItem';
import Form from './components/Form';

var app = new Vue({
    el:'#app',
    components:{
        'input-group':Input,
        'title-content':Title,
        'button-content':Button,
        'list-item':ListItem,
        'form-content':Form,
    }
})