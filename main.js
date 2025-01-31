const loading = document.getElementById('start-up');
let duration = 0;
//function works when the windows load
window.onload = function (){
  //Function to format the time
  function formatTime(seconds){
    const minutes = Math.floor(seconds / 10);
    const remainingSeconds = seconds % 10;
    return `${minutes}${remainingSeconds < 10 ? '' : ''}${remainingSeconds}`;
  }

  //display the initial time
  const countdownElemet = document.getElementById('countdown');
  //countdownElemet.textContent = formatTime(duration);

  // count down logic
  const interval = setInterval(() => {
    duration++;

    //update the html with the remaining time
    countdownElemet.textContent = formatTime(duration);

    // stop the countdown when it reaches 0
    if (duration >= 101){
      loading.classList.add('hide');
      clearInterval(interval);
    }
  }, 30)
}
//Get module offered
function checkModuleValue(){
  let c = document.getElementById('page-open');
  let moduleOffered = parseFloat(document.getElementById('module-offered').value);
  let module6 = document.getElementById('module6');
  let module7 = document.getElementById('module7');
  let module8 = document.getElementById('module8');
  let module9 = document.getElementById('module9');
  let module10 = document.getElementById('module10');
  let module11 = document.getElementById('module11');
  let module12 = document.getElementById('module12');
  let module13 = document.getElementById('module13');
  let module14 = document.getElementById('module14');
  let module15 = document.getElementById('module15');
  let module16 = document.getElementById('module16');
  let module17 = document.getElementById('module17');
  let module18 = document.getElementById('module18');
  let module19 = document.getElementById('module19');
  let module20 = document.getElementById('module20');
  if(moduleOffered === 6){
    module6.classList.remove('hide');
    c.classList.add('hidden');
  } else if(moduleOffered === 7){
    module7.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 8){
    module8.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 9){
    module9.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 10){
    module10.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 11){
    module11.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 12){
    module12.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 13){
    module13.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 14){
    module14.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 15){
    module15.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 16){
    module16.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 17){
    module17.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 18){
    module18.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 19){
    module19.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 20){
    module20.classList.remove('hide');
    c.classList.add('hidden');
  }  else if(moduleOffered === 7){
    module7.classList.remove('hide');
    c.classList.add('hidden');
  }
   else {
    alert('Please select Modules offered to continue');
  }
}
//Return to select module
function ReturnPage(){
  let c = document.getElementById('page-open');
  let module6 = document.getElementById('module6');
  let module7 = document.getElementById('module7');
  let module8 = document.getElementById('module8');
  let module9 = document.getElementById('module9');
  let module10 = document.getElementById('module10');
  let module11 = document.getElementById('module11');
  let module12 = document.getElementById('module12');
  let module13 = document.getElementById('module13');
  let module14 = document.getElementById('module14');
  let module15 = document.getElementById('module15');
  let module16 = document.getElementById('module16');
  let module17 = document.getElementById('module17');
  let module18 = document.getElementById('module18');
  let module19 = document.getElementById('module19');
  let module20 = document.getElementById('module20');
  //remove the hidden list
  c.classList.remove('hidden');
  //add the hide classList
  module6.classList.add('hide');
  module7.classList.add('hide');
  module8.classList.add('hide');
  module9.classList.add('hide');
  module10.classList.add('hide');
  module11.classList.add('hide');
  module12.classList.add('hide');
  module13.classList.add('hide');
  module14.classList.add('hide');
  module15.classList.add('hide');
  module16.classList.add('hide');
  module17.classList.add('hide');
  module18.classList.add('hide');
  module19.classList.add('hide');
  module20.classList.add('hide');
}
function addNumbers6(){
  //Get msg box
  let msgBox = document.getElementById('msg');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num1').value);
  let sum2 = parseFloat(document.getElementById('num2').value);
  let sum3 = parseFloat(document.getElementById('num3').value);
  let sum4 = parseFloat(document.getElementById('num4').value);
  let sum5 = parseFloat(document.getElementById('num5').value);
  let sum6 = parseFloat(document.getElementById('num6').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs1').value);
  let hour2 = parseFloat(document.getElementById('hrs2').value);
  let hour3 = parseFloat(document.getElementById('hrs3').value);
  let hour4 = parseFloat(document.getElementById('hrs4').value);
  let hour5 = parseFloat(document.getElementById('hrs5').value);
  let hour6 = parseFloat(document.getElementById('hrs6').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
}
//Function for 7 module offered
function addNumbers7(event){
  //Get msg box
  let msgBox = document.getElementById('msg7');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num7_1').value);
  let sum2 = parseFloat(document.getElementById('num7_2').value);
  let sum3 = parseFloat(document.getElementById('num7_3').value);
  let sum4 = parseFloat(document.getElementById('num7_4').value);
  let sum5 = parseFloat(document.getElementById('num7_5').value);
  let sum6 = parseFloat(document.getElementById('num7_6').value);
  let sum7 = parseFloat(document.getElementById('num7_7').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs7_1').value);
  let hour2 = parseFloat(document.getElementById('hrs7_2').value);
  let hour3 = parseFloat(document.getElementById('hrs7_3').value);
  let hour4 = parseFloat(document.getElementById('hrs7_4').value);
  let hour5 = parseFloat(document.getElementById('hrs7_5').value);
  let hour6 = parseFloat(document.getElementById('hrs7_6').value);
  let hour7 = parseFloat(document.getElementById('hrs7_7').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
}
//Function for 8 module offered
function addNumbers8(){
  //Get msg box
  let msgBox = document.getElementById('msg8');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num8_1').value);
  let sum2 = parseFloat(document.getElementById('num8_2').value);
  let sum3 = parseFloat(document.getElementById('num8_3').value);
  let sum4 = parseFloat(document.getElementById('num8_4').value);
  let sum5 = parseFloat(document.getElementById('num8_5').value);
  let sum6 = parseFloat(document.getElementById('num8_6').value);
  let sum7 = parseFloat(document.getElementById('num8_7').value);
  let sum8 = parseFloat(document.getElementById('num8_8').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs8_1').value);
  let hour2 = parseFloat(document.getElementById('hrs8_2').value);
  let hour3 = parseFloat(document.getElementById('hrs8_3').value);
  let hour4 = parseFloat(document.getElementById('hrs8_4').value);
  let hour5 = parseFloat(document.getElementById('hrs8_5').value);
  let hour6 = parseFloat(document.getElementById('hrs8_6').value);
  let hour7 = parseFloat(document.getElementById('hrs8_7').value);
  let hour8 = parseFloat(document.getElementById('hrs8_8').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 9 module offered
function addNumbers9(){
  //Get msg box
  let msgBox = document.getElementById('msg9');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num9_1').value);
  let sum2 = parseFloat(document.getElementById('num9_2').value);
  let sum3 = parseFloat(document.getElementById('num9_3').value);
  let sum4 = parseFloat(document.getElementById('num9_4').value);
  let sum5 = parseFloat(document.getElementById('num9_5').value);
  let sum6 = parseFloat(document.getElementById('num9_6').value);
  let sum7 = parseFloat(document.getElementById('num9_7').value);
  let sum8 = parseFloat(document.getElementById('num9_8').value);
  let sum9 = parseFloat(document.getElementById('num9_9').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs9_1').value);
  let hour2 = parseFloat(document.getElementById('hrs9_2').value);
  let hour3 = parseFloat(document.getElementById('hrs9_3').value);
  let hour4 = parseFloat(document.getElementById('hrs9_4').value);
  let hour5 = parseFloat(document.getElementById('hrs9_5').value);
  let hour6 = parseFloat(document.getElementById('hrs9_6').value);
  let hour7 = parseFloat(document.getElementById('hrs9_7').value);
  let hour8 = parseFloat(document.getElementById('hrs9_8').value);
  let hour9 = parseFloat(document.getElementById('hrs9_9').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 10 module
function addNumbers10(){
  //Get msg box
  let msgBox = document.getElementById('msg10');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num10_1').value);
  let sum2 = parseFloat(document.getElementById('num10_2').value);
  let sum3 = parseFloat(document.getElementById('num10_3').value);
  let sum4 = parseFloat(document.getElementById('num10_4').value);
  let sum5 = parseFloat(document.getElementById('num10_5').value);
  let sum6 = parseFloat(document.getElementById('num10_6').value);
  let sum7 = parseFloat(document.getElementById('num10_7').value);
  let sum8 = parseFloat(document.getElementById('num10_8').value);
  let sum9 = parseFloat(document.getElementById('num10_9').value);
  let sum10 = parseFloat(document.getElementById('num10_10').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs10_1').value);
  let hour2 = parseFloat(document.getElementById('hrs10_2').value);
  let hour3 = parseFloat(document.getElementById('hrs10_3').value);
  let hour4 = parseFloat(document.getElementById('hrs10_4').value);
  let hour5 = parseFloat(document.getElementById('hrs10_5').value);
  let hour6 = parseFloat(document.getElementById('hrs10_6').value);
  let hour7 = parseFloat(document.getElementById('hrs10_7').value);
  let hour8 = parseFloat(document.getElementById('hrs10_8').value);
  let hour9 = parseFloat(document.getElementById('hrs10_9').value);
  let hour10 = parseFloat(document.getElementById('hrs10_10').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Funcion for 11 module
function addNumbers11(){
  //Get msg box
  let msgBox = document.getElementById('msg11');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num11_1').value);
  let sum2 = parseFloat(document.getElementById('num11_2').value);
  let sum3 = parseFloat(document.getElementById('num11_3').value);
  let sum4 = parseFloat(document.getElementById('num11_4').value);
  let sum5 = parseFloat(document.getElementById('num11_5').value);
  let sum6 = parseFloat(document.getElementById('num11_6').value);
  let sum7 = parseFloat(document.getElementById('num11_7').value);
  let sum8 = parseFloat(document.getElementById('num11_8').value);
  let sum9 = parseFloat(document.getElementById('num11_9').value);
  let sum10 = parseFloat(document.getElementById('num11_10').value);
  let sum11 = parseFloat(document.getElementById('num11_11').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs11_1').value);
  let hour2 = parseFloat(document.getElementById('hrs11_2').value);
  let hour3 = parseFloat(document.getElementById('hrs11_3').value);
  let hour4 = parseFloat(document.getElementById('hrs11_4').value);
  let hour5 = parseFloat(document.getElementById('hrs11_5').value);
  let hour6 = parseFloat(document.getElementById('hrs11_6').value);
  let hour7 = parseFloat(document.getElementById('hrs11_7').value);
  let hour8 = parseFloat(document.getElementById('hrs11_8').value);
  let hour9 = parseFloat(document.getElementById('hrs11_9').value);
  let hour10 = parseFloat(document.getElementById('hrs11_10').value);
  let hour11 = parseFloat(document.getElementById('hrs11_11').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 12 module
function addNumbers12(){
  //Get msg box
  let msgBox = document.getElementById('msg12');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num12_1').value);
  let sum2 = parseFloat(document.getElementById('num12_2').value);
  let sum3 = parseFloat(document.getElementById('num12_3').value);
  let sum4 = parseFloat(document.getElementById('num12_4').value);
  let sum5 = parseFloat(document.getElementById('num12_5').value);
  let sum6 = parseFloat(document.getElementById('num12_6').value);
  let sum7 = parseFloat(document.getElementById('num12_7').value);
  let sum8 = parseFloat(document.getElementById('num12_8').value);
  let sum9 = parseFloat(document.getElementById('num12_9').value);
  let sum10 = parseFloat(document.getElementById('num12_10').value);
  let sum11 = parseFloat(document.getElementById('num12_11').value);
  let sum12 = parseFloat(document.getElementById('num12_12').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs12_1').value);
  let hour2 = parseFloat(document.getElementById('hrs12_2').value);
  let hour3 = parseFloat(document.getElementById('hrs12_3').value);
  let hour4 = parseFloat(document.getElementById('hrs12_4').value);
  let hour5 = parseFloat(document.getElementById('hrs12_5').value);
  let hour6 = parseFloat(document.getElementById('hrs12_6').value);
  let hour7 = parseFloat(document.getElementById('hrs12_7').value);
  let hour8 = parseFloat(document.getElementById('hrs12_8').value);
  let hour9 = parseFloat(document.getElementById('hrs12_9').value);
  let hour10 = parseFloat(document.getElementById('hrs12_10').value);
  let hour11 = parseFloat(document.getElementById('hrs12_11').value);
  let hour12 = parseFloat(document.getElementById('hrs12_12').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 13 module
function addNumbers13(){
  //Get msg box
  let msgBox = document.getElementById('msg13');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num13_1').value);
  let sum2 = parseFloat(document.getElementById('num13_2').value);
  let sum3 = parseFloat(document.getElementById('num13_3').value);
  let sum4 = parseFloat(document.getElementById('num13_4').value);
  let sum5 = parseFloat(document.getElementById('num13_5').value);
  let sum6 = parseFloat(document.getElementById('num13_6').value);
  let sum7 = parseFloat(document.getElementById('num13_7').value);
  let sum8 = parseFloat(document.getElementById('num13_8').value);
  let sum9 = parseFloat(document.getElementById('num13_9').value);
  let sum10 = parseFloat(document.getElementById('num13_10').value);
  let sum11 = parseFloat(document.getElementById('num13_11').value);
  let sum12 = parseFloat(document.getElementById('num13_12').value);
  let sum13 = parseFloat(document.getElementById('num13_13').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs13_1').value);
  let hour2 = parseFloat(document.getElementById('hrs13_2').value);
  let hour3 = parseFloat(document.getElementById('hrs13_3').value);
  let hour4 = parseFloat(document.getElementById('hrs13_4').value);
  let hour5 = parseFloat(document.getElementById('hrs13_5').value);
  let hour6 = parseFloat(document.getElementById('hrs13_6').value);
  let hour7 = parseFloat(document.getElementById('hrs13_7').value);
  let hour8 = parseFloat(document.getElementById('hrs13_8').value);
  let hour9 = parseFloat(document.getElementById('hrs13_9').value);
  let hour10 = parseFloat(document.getElementById('hrs13_10').value);
  let hour11 = parseFloat(document.getElementById('hrs13_11').value);
  let hour12 = parseFloat(document.getElementById('hrs13_12').value);
  let hour13 = parseFloat(document.getElementById('hrs13_13').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 14 module
function addNumbers14(){
  //Get msg box
  let msgBox = document.getElementById('msg14');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num14_1').value);
  let sum2 = parseFloat(document.getElementById('num14_2').value);
  let sum3 = parseFloat(document.getElementById('num14_3').value);
  let sum4 = parseFloat(document.getElementById('num14_4').value);
  let sum5 = parseFloat(document.getElementById('num14_5').value);
  let sum6 = parseFloat(document.getElementById('num14_6').value);
  let sum7 = parseFloat(document.getElementById('num14_7').value);
  let sum8 = parseFloat(document.getElementById('num14_8').value);
  let sum9 = parseFloat(document.getElementById('num14_9').value);
  let sum10 = parseFloat(document.getElementById('num14_10').value);
  let sum11 = parseFloat(document.getElementById('num14_11').value);
  let sum12 = parseFloat(document.getElementById('num14_12').value);
  let sum13 = parseFloat(document.getElementById('num14_13').value);
  let sum14 = parseFloat(document.getElementById('num14_14').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs14_1').value);
  let hour2 = parseFloat(document.getElementById('hrs14_2').value);
  let hour3 = parseFloat(document.getElementById('hrs14_3').value);
  let hour4 = parseFloat(document.getElementById('hrs14_4').value);
  let hour5 = parseFloat(document.getElementById('hrs14_5').value);
  let hour6 = parseFloat(document.getElementById('hrs14_6').value);
  let hour7 = parseFloat(document.getElementById('hrs14_7').value);
  let hour8 = parseFloat(document.getElementById('hrs14_8').value);
  let hour9 = parseFloat(document.getElementById('hrs14_9').value);
  let hour10 = parseFloat(document.getElementById('hrs14_10').value);
  let hour11 = parseFloat(document.getElementById('hrs14_11').value);
  let hour12 = parseFloat(document.getElementById('hrs14_12').value);
  let hour13 = parseFloat(document.getElementById('hrs14_13').value);
  let hour14 = parseFloat(document.getElementById('hrs14_14').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  grade14 = sum14 * hour14;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13 + grade14;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13 + hour14;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 15 module
function addNumbers15(){
  //Get msg box
  let msgBox = document.getElementById('msg15');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num15_1').value);
  let sum2 = parseFloat(document.getElementById('num15_2').value);
  let sum3 = parseFloat(document.getElementById('num15_3').value);
  let sum4 = parseFloat(document.getElementById('num15_4').value);
  let sum5 = parseFloat(document.getElementById('num15_5').value);
  let sum6 = parseFloat(document.getElementById('num15_6').value);
  let sum7 = parseFloat(document.getElementById('num15_7').value);
  let sum8 = parseFloat(document.getElementById('num15_8').value);
  let sum9 = parseFloat(document.getElementById('num15_9').value);
  let sum10 = parseFloat(document.getElementById('num15_10').value);
  let sum11 = parseFloat(document.getElementById('num15_11').value);
  let sum12 = parseFloat(document.getElementById('num15_12').value);
  let sum13 = parseFloat(document.getElementById('num15_13').value);
  let sum14 = parseFloat(document.getElementById('num15_14').value);
  let sum15 = parseFloat(document.getElementById('num15_15').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs15_1').value);
  let hour2 = parseFloat(document.getElementById('hrs15_2').value);
  let hour3 = parseFloat(document.getElementById('hrs15_3').value);
  let hour4 = parseFloat(document.getElementById('hrs15_4').value);
  let hour5 = parseFloat(document.getElementById('hrs15_5').value);
  let hour6 = parseFloat(document.getElementById('hrs15_6').value);
  let hour7 = parseFloat(document.getElementById('hrs15_7').value);
  let hour8 = parseFloat(document.getElementById('hrs15_8').value);
  let hour9 = parseFloat(document.getElementById('hrs15_9').value);
  let hour10 = parseFloat(document.getElementById('hrs15_10').value);
  let hour11 = parseFloat(document.getElementById('hrs15_11').value);
  let hour12 = parseFloat(document.getElementById('hrs15_12').value);
  let hour13 = parseFloat(document.getElementById('hrs15_13').value);
  let hour14 = parseFloat(document.getElementById('hrs15_14').value);
  let hour15 = parseFloat(document.getElementById('hrs15_15').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  grade14 = sum14 * hour14;
  grade15 = sum15 * hour15;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13 + grade14 + grade15;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13 + hour14 + hour15;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 16 module
function addNumbers16(){
  //Get msg box
  let msgBox = document.getElementById('msg16');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num16_1').value);
  let sum2 = parseFloat(document.getElementById('num16_2').value);
  let sum3 = parseFloat(document.getElementById('num16_3').value);
  let sum4 = parseFloat(document.getElementById('num16_4').value);
  let sum5 = parseFloat(document.getElementById('num16_5').value);
  let sum6 = parseFloat(document.getElementById('num16_6').value);
  let sum7 = parseFloat(document.getElementById('num16_7').value);
  let sum8 = parseFloat(document.getElementById('num16_8').value);
  let sum9 = parseFloat(document.getElementById('num16_9').value);
  let sum10 = parseFloat(document.getElementById('num16_10').value);
  let sum11 = parseFloat(document.getElementById('num16_11').value);
  let sum12 = parseFloat(document.getElementById('num16_12').value);
  let sum13 = parseFloat(document.getElementById('num16_13').value);
  let sum14 = parseFloat(document.getElementById('num16_14').value);
  let sum15 = parseFloat(document.getElementById('num16_15').value);
  let sum16 = parseFloat(document.getElementById('num16_16').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs16_1').value);
  let hour2 = parseFloat(document.getElementById('hrs16_2').value);
  let hour3 = parseFloat(document.getElementById('hrs16_3').value);
  let hour4 = parseFloat(document.getElementById('hrs16_4').value);
  let hour5 = parseFloat(document.getElementById('hrs16_5').value);
  let hour6 = parseFloat(document.getElementById('hrs16_6').value);
  let hour7 = parseFloat(document.getElementById('hrs16_7').value);
  let hour8 = parseFloat(document.getElementById('hrs16_8').value);
  let hour9 = parseFloat(document.getElementById('hrs16_9').value);
  let hour10 = parseFloat(document.getElementById('hrs16_10').value);
  let hour11 = parseFloat(document.getElementById('hrs16_11').value);
  let hour12 = parseFloat(document.getElementById('hrs16_12').value);
  let hour13 = parseFloat(document.getElementById('hrs16_13').value);
  let hour14 = parseFloat(document.getElementById('hrs16_14').value);
  let hour15 = parseFloat(document.getElementById('hrs16_15').value);
  let hour16 = parseFloat(document.getElementById('hrs16_16').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  grade14 = sum14 * hour14;
  grade15 = sum15 * hour15;
  grade16 = sum16 * hour16;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13 + grade14 + grade15 + grade16;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13 + hour14 + hour15 + hour16;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 17 module
function addNumbers17(){
  //Get msg box
  let msgBox = document.getElementById('msg17');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num17_1').value);
  let sum2 = parseFloat(document.getElementById('num17_2').value);
  let sum3 = parseFloat(document.getElementById('num17_3').value);
  let sum4 = parseFloat(document.getElementById('num17_4').value);
  let sum5 = parseFloat(document.getElementById('num17_5').value);
  let sum6 = parseFloat(document.getElementById('num17_6').value);
  let sum7 = parseFloat(document.getElementById('num17_7').value);
  let sum8 = parseFloat(document.getElementById('num17_8').value);
  let sum9 = parseFloat(document.getElementById('num17_9').value);
  let sum10 = parseFloat(document.getElementById('num17_10').value);
  let sum11 = parseFloat(document.getElementById('num17_11').value);
  let sum12 = parseFloat(document.getElementById('num17_12').value);
  let sum13 = parseFloat(document.getElementById('num17_13').value);
  let sum14 = parseFloat(document.getElementById('num17_14').value);
  let sum15 = parseFloat(document.getElementById('num17_15').value);
  let sum16 = parseFloat(document.getElementById('num17_16').value);
  let sum17 = parseFloat(document.getElementById('num17_17').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs17_1').value);
  let hour2 = parseFloat(document.getElementById('hrs17_2').value);
  let hour3 = parseFloat(document.getElementById('hrs17_3').value);
  let hour4 = parseFloat(document.getElementById('hrs17_4').value);
  let hour5 = parseFloat(document.getElementById('hrs17_5').value);
  let hour6 = parseFloat(document.getElementById('hrs17_6').value);
  let hour7 = parseFloat(document.getElementById('hrs17_7').value);
  let hour8 = parseFloat(document.getElementById('hrs17_8').value);
  let hour9 = parseFloat(document.getElementById('hrs17_9').value);
  let hour10 = parseFloat(document.getElementById('hrs17_10').value);
  let hour11 = parseFloat(document.getElementById('hrs17_11').value);
  let hour12 = parseFloat(document.getElementById('hrs17_12').value);
  let hour13 = parseFloat(document.getElementById('hrs17_13').value);
  let hour14 = parseFloat(document.getElementById('hrs17_14').value);
  let hour15 = parseFloat(document.getElementById('hrs17_15').value);
  let hour16 = parseFloat(document.getElementById('hrs17_16').value);
  let hour17 = parseFloat(document.getElementById('hrs17_17').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  grade14 = sum14 * hour14;
  grade15 = sum15 * hour15;
  grade16 = sum16 * hour16;
  grade17 = sum17 * hour17;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13 + grade14 + grade15 + grade16 + grade17;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13 + hour14 + hour15 + hour16 + hour17;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//function for 18 module
function addNumbers18(){
  //Get msg box
  let msgBox = document.getElementById('msg18');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num18_1').value);
  let sum2 = parseFloat(document.getElementById('num18_2').value);
  let sum3 = parseFloat(document.getElementById('num18_3').value);
  let sum4 = parseFloat(document.getElementById('num18_4').value);
  let sum5 = parseFloat(document.getElementById('num18_5').value);
  let sum6 = parseFloat(document.getElementById('num18_6').value);
  let sum7 = parseFloat(document.getElementById('num18_7').value);
  let sum8 = parseFloat(document.getElementById('num18_8').value);
  let sum9 = parseFloat(document.getElementById('num18_9').value);
  let sum10 = parseFloat(document.getElementById('num18_10').value);
  let sum11 = parseFloat(document.getElementById('num18_11').value);
  let sum12 = parseFloat(document.getElementById('num18_12').value);
  let sum13 = parseFloat(document.getElementById('num18_13').value);
  let sum14 = parseFloat(document.getElementById('num18_14').value);
  let sum15 = parseFloat(document.getElementById('num18_15').value);
  let sum16 = parseFloat(document.getElementById('num18_16').value);
  let sum17 = parseFloat(document.getElementById('num18_17').value);
  let sum18 = parseFloat(document.getElementById('num18_18').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs18_1').value);
  let hour2 = parseFloat(document.getElementById('hrs18_2').value);
  let hour3 = parseFloat(document.getElementById('hrs18_3').value);
  let hour4 = parseFloat(document.getElementById('hrs18_4').value);
  let hour5 = parseFloat(document.getElementById('hrs18_5').value);
  let hour6 = parseFloat(document.getElementById('hrs18_6').value);
  let hour7 = parseFloat(document.getElementById('hrs18_7').value);
  let hour8 = parseFloat(document.getElementById('hrs18_8').value);
  let hour9 = parseFloat(document.getElementById('hrs18_9').value);
  let hour10 = parseFloat(document.getElementById('hrs18_10').value);
  let hour11 = parseFloat(document.getElementById('hrs18_11').value);
  let hour12 = parseFloat(document.getElementById('hrs18_12').value);
  let hour13 = parseFloat(document.getElementById('hrs18_13').value);
  let hour14 = parseFloat(document.getElementById('hrs18_14').value);
  let hour15 = parseFloat(document.getElementById('hrs18_15').value);
  let hour16 = parseFloat(document.getElementById('hrs18_16').value);
  let hour17 = parseFloat(document.getElementById('hrs18_17').value);
  let hour18 = parseFloat(document.getElementById('hrs18_18').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  grade14 = sum14 * hour14;
  grade15 = sum15 * hour15;
  grade16 = sum16 * hour16;
  grade17 = sum17 * hour17;
  grade18 = sum18 * hour18;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13 + grade14 + grade15 + grade16 + grade17 + grade18;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13 + hour14 + hour15 + hour16 + hour17 +  hour18;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 19 module
function addNumbers19(){
  //Get msg box
  let msgBox = document.getElementById('msg19');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num19_1').value);
  let sum2 = parseFloat(document.getElementById('num19_2').value);
  let sum3 = parseFloat(document.getElementById('num19_3').value);
  let sum4 = parseFloat(document.getElementById('num19_4').value);
  let sum5 = parseFloat(document.getElementById('num19_5').value);
  let sum6 = parseFloat(document.getElementById('num19_6').value);
  let sum7 = parseFloat(document.getElementById('num19_7').value);
  let sum8 = parseFloat(document.getElementById('num19_8').value);
  let sum9 = parseFloat(document.getElementById('num19_9').value);
  let sum10 = parseFloat(document.getElementById('num19_10').value);
  let sum11 = parseFloat(document.getElementById('num19_11').value);
  let sum12 = parseFloat(document.getElementById('num19_12').value);
  let sum13 = parseFloat(document.getElementById('num19_13').value);
  let sum14 = parseFloat(document.getElementById('num19_14').value);
  let sum15 = parseFloat(document.getElementById('num19_15').value);
  let sum16 = parseFloat(document.getElementById('num19_16').value);
  let sum17 = parseFloat(document.getElementById('num19_17').value);
  let sum18 = parseFloat(document.getElementById('num19_18').value);
  let sum19 = parseFloat(document.getElementById('num19_19').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs19_1').value);
  let hour2 = parseFloat(document.getElementById('hrs19_2').value);
  let hour3 = parseFloat(document.getElementById('hrs19_3').value);
  let hour4 = parseFloat(document.getElementById('hrs19_4').value);
  let hour5 = parseFloat(document.getElementById('hrs19_5').value);
  let hour6 = parseFloat(document.getElementById('hrs19_6').value);
  let hour7 = parseFloat(document.getElementById('hrs19_7').value);
  let hour8 = parseFloat(document.getElementById('hrs19_8').value);
  let hour9 = parseFloat(document.getElementById('hrs19_9').value);
  let hour10 = parseFloat(document.getElementById('hrs19_10').value);
  let hour11 = parseFloat(document.getElementById('hrs19_11').value);
  let hour12 = parseFloat(document.getElementById('hrs19_12').value);
  let hour13 = parseFloat(document.getElementById('hrs19_13').value);
  let hour14 = parseFloat(document.getElementById('hrs19_14').value);
  let hour15 = parseFloat(document.getElementById('hrs19_15').value);
  let hour16 = parseFloat(document.getElementById('hrs19_16').value);
  let hour17 = parseFloat(document.getElementById('hrs19_17').value);
  let hour18 = parseFloat(document.getElementById('hrs19_18').value);
  let hour19 = parseFloat(document.getElementById('hrs19_19').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  grade14 = sum14 * hour14;
  grade15 = sum15 * hour15;
  grade16 = sum16 * hour16;
  grade17 = sum17 * hour17;
  grade18 = sum18 * hour18;
  grade19 = sum19 * hour19;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13 + grade14 + grade15 + grade16 + grade17 + grade18 + grade19;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13 + hour14 + hour15 + hour16 + hour17 +  hour18 + hour19;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Function for 20 module
function addNumbers20(){
  //Get msg box
  let msgBox = document.getElementById('msg20');

  //Get grade points
  let sum1 = parseFloat(document.getElementById('num20_1').value);
  let sum2 = parseFloat(document.getElementById('num20_2').value);
  let sum3 = parseFloat(document.getElementById('num20_3').value);
  let sum4 = parseFloat(document.getElementById('num20_4').value);
  let sum5 = parseFloat(document.getElementById('num20_5').value);
  let sum6 = parseFloat(document.getElementById('num20_6').value);
  let sum7 = parseFloat(document.getElementById('num20_7').value);
  let sum8 = parseFloat(document.getElementById('num20_8').value);
  let sum9 = parseFloat(document.getElementById('num20_9').value);
  let sum10 = parseFloat(document.getElementById('num20_10').value);
  let sum11 = parseFloat(document.getElementById('num20_11').value);
  let sum12 = parseFloat(document.getElementById('num20_12').value);
  let sum13 = parseFloat(document.getElementById('num20_13').value);
  let sum14 = parseFloat(document.getElementById('num20_14').value);
  let sum15 = parseFloat(document.getElementById('num20_15').value);
  let sum16 = parseFloat(document.getElementById('num20_16').value);
  let sum17 = parseFloat(document.getElementById('num20_17').value);
  let sum18 = parseFloat(document.getElementById('num20_18').value);
  let sum19 = parseFloat(document.getElementById('num20_19').value);
  let sum20 = parseFloat(document.getElementById('num20_20').value);
  
  //Get credit point
  let hour1 = parseFloat(document.getElementById('hrs20_1').value);
  let hour2 = parseFloat(document.getElementById('hrs20_2').value);
  let hour3 = parseFloat(document.getElementById('hrs20_3').value);
  let hour4 = parseFloat(document.getElementById('hrs20_4').value);
  let hour5 = parseFloat(document.getElementById('hrs20_5').value);
  let hour6 = parseFloat(document.getElementById('hrs20_6').value);
  let hour7 = parseFloat(document.getElementById('hrs20_7').value);
  let hour8 = parseFloat(document.getElementById('hrs20_8').value);
  let hour9 = parseFloat(document.getElementById('hrs20_9').value);
  let hour10 = parseFloat(document.getElementById('hrs20_10').value);
  let hour11 = parseFloat(document.getElementById('hrs20_11').value);
  let hour12 = parseFloat(document.getElementById('hrs20_12').value);
  let hour13 = parseFloat(document.getElementById('hrs20_13').value);
  let hour14 = parseFloat(document.getElementById('hrs20_14').value);
  let hour15 = parseFloat(document.getElementById('hrs20_15').value);
  let hour16 = parseFloat(document.getElementById('hrs20_16').value);
  let hour17 = parseFloat(document.getElementById('hrs20_17').value);
  let hour18 = parseFloat(document.getElementById('hrs20_18').value);
  let hour19 = parseFloat(document.getElementById('hrs20_19').value);
  let hour20 = parseFloat(document.getElementById('hrs20_20').value);

  // mutiply grade by the hrs
  grade1 = sum1 * hour1;
  grade2 = sum2 * hour2;
  grade3 = sum3 * hour3;
  grade4 = sum4 * hour4;
  grade5 = sum5 * hour5;
  grade6 = sum6 * hour6;
  grade7 = sum7 * hour7;
  grade8 = sum8 * hour8;
  grade9 = sum9 * hour9;
  grade10 = sum10 * hour10;
  grade11 = sum11 * hour11;
  grade12 = sum12 * hour12;
  grade13 = sum13 * hour13;
  grade14 = sum14 * hour14;
  grade15 = sum15 * hour15;
  grade16 = sum16 * hour16;
  grade17 = sum17 * hour17;
  grade18 = sum18 * hour18;
  grade19 = sum19 * hour19;
  grade20 = sum20 * hour20;
  
  //add the grades
  totalGrade = grade1 + grade2 + grade3 + grade4 + grade5 + grade6 + grade7 + grade8 + grade9 + grade10 + grade11 + grade12 + grade13 + grade14 + grade15 + grade16 + grade17 + grade18 + grade19 + grade20;

  //add the credit hours
  totalHrs = hour1 + hour2 + hour3 + hour4 + hour5 + hour6 + hour7 + hour8 + hour9 + hour10 + hour11 + hour12 + hour13 + hour14 + hour15 + hour16 + hour17 +  hour18 + hour19 + hour20;
  

  //divide grade total by hrs total
  result = totalGrade / totalHrs;
  newResult = Math.round(result);
  
  //if newResult to give comment
  if (newResult < 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point is too low`);
  } else if (newResult === 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n You need to try harder Grade point on average`);
  } else if (newResult > 3){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n keep it up Grade point is excellent`);
  } else if (newResult > 4){
    msgBox.innerHTML = (`your grade point is ${newResult}. \n outstanding performance`);
  }
  
}
//Age calculator
function addAge(){
  let resultMsg = document.getElementById('age-msg');
  let ageDob = parseFloat(document.getElementById('dob').value);
  let currYear = parseFloat(document.getElementById('curry').value);
  result = currYear - ageDob;
  if (result < 1){
    alert(`Can't calculate an unborn person's age`);
  } else {
    resultMsg.innerHTML = (`your current age is ${result} ` + ` years old`);
  }
}