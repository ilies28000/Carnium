let reponse = document.querySelectorAll('li')
for(let i = 0; i<reponse.length;i++) {
    reponse[i].addEventListener(
        'click',
        function () {
          if(reponse[i].classList.contains('click'))
          {
            reponse[i].classList.remove('click')
          }
          else{
          if (document.querySelectorAll('.click').length > 0)
          {
            console.log('hieennnnn')
              document.querySelector('.click').classList.remove('click')
          }
          reponse[i].classList.add('click')
          }
        }
    )
}
