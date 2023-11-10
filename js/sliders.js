if(document.querySelector('#logos1')){
    new Splide( '#logos1', {
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: '1.1rem',
        direction: 'ltr',
        arrows: false,
        pagination: false,
        breakpoints: {
            1150: {
                perPage: 4
            },
        }
    }).mount(window.splide.Extensions);

    new Splide( '#logos2', {
        type: 'loop',
        perPage: 5,
        perMove: 1,
        direction: 'rtl',
        gap: '1.1rem',
        arrows: false,
        pagination: false,
        breakpoints: {
            1150: {
                perPage: 4
            },
        }
    }).mount(window.splide.Extensions);
}

if(document.querySelector('#matchs')){
    new Splide( '#matchs', {
        type: 'slider',
        perPage: 3,
        perMove: 1,
        gap: '.9rem',
        rewind: false,
        autoplay: false,
        arrows: false,
        pagination: false,
        padding: {
            right: '20%'
        },
        breakpoints: {
            1150: {
                perPage: 2,
            }
        }
    }).mount();
}

if(document.querySelector('#publicidad')){
    new Splide( '#publicidad', {
        type: 'loop',
        perPage: 1,
        perMove: 1,
        autoplay: true,
        interval: 5000,
        arrows: false,
        pagination: false,
        pauseOnHover: false,
        pauseOnFocus: false
    }).mount();
}

if(document.querySelector('.card')){

    let photos = new Splide( '#photos', {
        type: 'slider',
        perPage: 1,
        perMove: 1,
        rewind: false,
        autoplay: false,
        arrows: true,
        pagination: true
    }).mount();

    let toInfoView = document.querySelector('.to_first_view'),
        toDescriptionView = document.querySelector('.to_second_view'),
        extend = document.querySelector('#extend'),
        card = document.querySelector('.card');

    photos.on('move', function(e){
        if(e == 0){
            if(!toInfoView.classList.contains('active')){
                toInfoView.classList.add('active')
            }
        }else{
            if(toInfoView.classList.contains('active')){
                toInfoView.classList.remove('active')
            }
        }
    })

    photos.on('active', function(e){
        if(card.classList.contains('informed')){
            card.classList.remove('informed')
        }
        if(card.classList.contains('extended')){
            card.classList.remove('extended')
        }
    })

    toInfoView.addEventListener('click', (e)=>{
        if(!card.classList.contains('informed')){
            card.classList.add('informed')
        }
        if(card.classList.contains('extended')){
            card.classList.remove('extended')
        }
    })

    toDescriptionView.addEventListener('click', (e)=>{
        card.classList.toggle('more')
    })

    extend.addEventListener('click', (e)=>{
        if(card.classList.contains('informed')){
            card.classList.remove('informed')
        }
        if(!card.classList.contains('extended')){
            card.classList.add('extended')
        }
    })
}

if(document.querySelector('form.cf')){
    Array.from(document.querySelectorAll('input')).forEach(input=>{
        input.addEventListener('input', write)
        input.addEventListener('focus', focus)
        input.addEventListener('blur', blur)
    })
    Array.from(document.querySelectorAll('textarea')).forEach(textarea=>{
        textarea.addEventListener('input', write)
        textarea.addEventListener('focus', focus)
        textarea.addEventListener('blur', blur)
    })

    function write(e){
        let input = e.currentTarget;
        if(input.value != ''){
            input.parentElement.classList.add('writed')
        }else{
            input.parentElement.classList.remove('writed')
        }
    }

    function focus(e){
        let input = e.currentTarget;
        input.parentElement.classList.add('active')
    }
    
    function blur(e){
        let input = e.currentTarget;
        if(input.value==''){
            input.placeholder = ''
            input.parentElement.classList.remove('active')
            return;
        }
    }
}

if(document.querySelector('.like')){
    let likeButtons = Array.from(document.querySelectorAll('.like'))
    likeButtons.forEach(button=>{
        button.addEventListener('click', (e)=>{
            e.preventDefault();
            document.querySelector('.card').classList.add('liked')

            setTimeout(() => {
                window.location.href = 'contactanos.php';
            }, 4000);

        })
    })
}

if(document.querySelector('.big_like')){
    
    let likeButton = document.querySelector('.big_like')
    
    likeButton.addEventListener('click', (e)=>{
        e.preventDefault();
        let div = document.querySelector('.profile_box')
        div.scrollTop = 0;
        div.classList.add('liked');
        
        setTimeout(() => {
            window.location.href = 'contactanos.php';
        }, 4000);
        
    })
}

if(document.querySelector('.nav_mobile')){
    document.querySelector('.nav_mobile_opener').addEventListener('click', (e)=>{
        e.preventDefault();
        document.querySelector('.nav_mobile').classList.toggle('active')
    })
}