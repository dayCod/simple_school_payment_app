var nisn = new Vue({
    el: '#nisn',
    data: {
        messageErr: 'Harus memiliki 10 karakter',
        message: 'valid',
        nisn: ''
    },
    computed: {
        numNisn: function () {
            return Number(this.nisn)
        }
    },
    methods: {
        nisn: function () {
            if(this.numNisn = 10){
                return this.message
            }else{
                return this.messageErr
            }
            
        }
    }
});

Vue.config.devtools = true;