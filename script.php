<script>
  document.getElementById('form6').addEventListener('submit', function(event) {
    event.preventDefault();


    const name = document.querySelector('input[name="name"]').value;
    const phone = document.querySelector('input[name="phone"]').value;
    const opyt = document.querySelector('input[name="opyt"]').value;
    const voz = document.querySelector('input[name="voz"]').value;
    const city = document.querySelector('input[name="city"]').value;
    const prof = document.querySelector('input[name="prof"]').value;
    let poz = document.querySelector('input[name="poz"]:checked') ? document.querySelector('input[name="poz"]:checked').value : 'Не выбрано';
	  
	  
    switch (poz) {
      case 'Крановщик':
        poz = 480;
        break;
      case 'Сварщик':
        poz = 481;
        break;
      case 'Стропальщик':
        poz = 482;
        break;
      case 'Копровщик':
        poz = 483;
        break;
      default:
        poz = null;
    }

    const formData = {
      fields: {
		"TITLE": "Вакансия с сайта",  
        "ufCrm23_1729166655449": name,
        "ufCrm23_1729166706454": phone,
        "ufCrm23_1729166744411": opyt,
        "ufCrm23_1729166760479": voz,
        "ufCrm23_1729166776250": city,
        "ufCrm23_1729166792286": prof,
        "ufCrm23_1729167079839": poz
      }
    };

    fetch('https://portal.stroy-potencial.ru/rest/325/ragkmdlxmm9cdiq8/crm.item.add.json?entityTypeId=1032', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(formData)
    });
  });
</script>


UF_CRM_1729158216037