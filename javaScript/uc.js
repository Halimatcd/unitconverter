//FOR THE LEFT BOX
const menu = document.querySelector('.Wrapper--menu');
const icon = document.querySelector('.fa-angle-right');

function toggleMenuDisplay(e){
    const dropdown = e.currentTarget.parentNode;

    menu.classList.toggle('Wrapper--hide');
    icon.classList.toggle('Wrapper--rotate-90')
}

function handleOptionSelected(e){
    menu.classList.toggle('Wrapper--hide');			

    const id = e.target.id;
    const newValue = e.target.textContent + ' ';
    const titleElem = document.querySelector('.Wrapper--dropdown .Wrapper--title');
    const icon = document.querySelector('.Wrapper--dropdown .Wrapper--title .fa');


  titleElem.textContent = newValue;
  titleElem.appendChild(icon);

  //trigger custom event
  document.querySelector('.Wrapper--dropdown,.Wrapper--title').dispatchEvent(new Event('change'));
    //setTimeout is used so transition is properly shown
  setTimeout(() => icon.classList.toggle('Wrapper--rotate-90',0));
}


//get elements
const dropdownTitle = document.querySelector('.Wrapper--dropdown .Wrapper--title');
const dropdownOptions = document.querySelectorAll('.Wrapper--dropdown .Wrapper--option');

//bind listeners to these elements
dropdownTitle.addEventListener('click', toggleMenuDisplay);

dropdownOptions.forEach(option => option.addEventListener('click',handleOptionSelected));



//FOR THE RIGHT BOX
const menuOpt = document.querySelector('.Wrapper--menu-01');
const iconOpt = document.querySelector('.fa-angle-right');

function toggleMenuDisplayOpt(f){
    const dropdown = f.currentTarget.parentNode;

    menuOpt.classList.toggle('Wrapper--hide-01');
    iconOpt.classList.toggle('Wrapper--rotate-90')
}

function handleOptionSelectedOpt(f){
    menuOpt.classList.toggle('Wrapper--hide-01');			

    const idOpt = f.target.id;
    const newValueOpt = f.target.textContent + ' ';
    const titleElemOpt = document.querySelector('.Wrapper--dropdown-01 .Wrapper--title-01');
    const iconOpt = document.querySelector('.Wrapper--dropdown-01 .Wrapper--title-01 .fa');


  titleElemOpt.textContent = newValueOpt;
  titleElemOpt.appendChild(iconOpt);

  //trigger custom event
  document.querySelector('.Wrapper--dropdown-01,.Wrapper--title-01').dispatchEvent(new Event('change'));
    //setTimeout is used so transition is properly shown
  setTimeout(() => iconOpt.classList.toggle('Wrapper--rotate-90',0));
}


//get elements
const dropdownTitleOpt = document.querySelector('.Wrapper--dropdown-01 .Wrapper--title-01');
const dropdownOptionsOpt = document.querySelectorAll('.Wrapper--dropdown-01 .Wrapper--option-01');

//bind listeners to these elements
dropdownTitleOpt.addEventListener('click', toggleMenuDisplayOpt);

dropdownOptionsOpt.forEach(option => option.addEventListener('click',handleOptionSelectedOpt));
