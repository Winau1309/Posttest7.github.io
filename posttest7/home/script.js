const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');
const dark1 = document.querySelector('.container');
const dark2 = document.querySelector('.most');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'white';
        body.style.transition = '2s';

        dark1.style.background = '#C6DCE4';
        dark1.style.transition = '2s';  
        
        dark2.style.background = '#FFE6E6';
        dark2.style.transition = '2s';
    }else{
        body.style.background = '#2B2B2B';
        body.style.transition = '2s';

        dark1.style.background = '#4D4C7D';
        dark1.style.transition = '2s';
        
        dark2.style.background = '#495C83';
        dark2.style.transition = '2s';
    }
});

function DOM(){
    document.getElementById('coba').style.background = '#D3CEDF';
    document.getElementById('coba1').style.background = '#D3CEDF';
    document.getElementById('coba2').style.background = '#D3CEDF';
    document.getElementById('coba3').style.background = '#D3CEDF';
    document.getElementById('coba4').style.background = '#D3CEDF';
    document.getElementById('coba5').style.background = '#D3CEDF';
}