// // Vector cu obiecte de tip Persoana
// var listaAngajati = [
//     { Nume: "Angajat1", DataNastere: "1990-01-01", Sex: "M", SalariuBrut: 6000, Impozit: 0, SalariuNet: 0, Functia: "Programator" },
//     {Nume: "Angajat3", DataNastere: "1995-01-01", Sex: "M", SalariuBrut: 7000, Impozit: 0, SalariuNet: 0, Functia: "Programator" },
//     {Nume: "Angajat4", DataNastere: "1990-01-01", Sex: "F", SalariuBrut: 4500, Impozit: 0, SalariuNet: 0, Functia: "Programator" },
//     {Nume: "Angajat5", DataNastere: "1989-01-01", Sex: "M", SalariuBrut: 5000, Impozit: 0, SalariuNet: 0, Functia: "Programator" },
//     {Nume: "Angajat6", DataNastere: "1990-01-01", Sex: "F", SalariuBrut: 5600, Impozit: 0, SalariuNet: 0, Functia: "Programator" },
//     {Nume: "Angajat7", DataNastere: "1990-01-01", Sex: "M", SalariuBrut: 3400, Impozit: 0, SalariuNet: 0, Functia: "Programator" },
//     { Nume: "Angajat2", DataNastere: "1985-02-15", Sex: "F", SalariuBrut: 4800, Impozit: 0, SalariuNet: 0, Functia: "Manager" },
//     // Adăugați mai multe obiecte pentru a completa lista
//   ];


//   // Funcție pentru calcularea mediei salariului net pe fiecare sex
// function mediaSalariuNetPeSex(listaAngajati) {
//   // Obiecte pentru a stoca suma salariilor nete și numărul de angajați pentru fiecare sex
//   var sumaSalariiNeteM = 0;
//   var numarAngajatiM = 0;
//   var sumaSalariiNeteF = 0;
//   var numarAngajatiF = 0;

//   // Parcurgerea listei și calculul sumelor salariilor nete pentru fiecare sex
//   for (var i = 0; i < listaAngajati.length; i++) {
//     // Pasul 1: Obținerea unui singur obiect de tip Persoana din listaAngajati
//     var angajat = listaAngajati[i];

//     // Pasul 2: Extrage informațiile relevante despre angajat (nume, sex, salariu brut etc.)
//     var salariuBrut = angajat.SalariuBrut;
//     var impozit = angajat.SalariuBrut > 5000 ? 0.16 * salariuBrut : 0;
//     var salariuNet = salariuBrut - impozit;

//     // Pasul 3: Actualizează sumele și numărul de angajați în funcție de sex
//     if (angajat.Sex === "M") {
//       sumaSalariiNeteM += salariuNet;
//       numarAngajatiM++;
//     } else if (angajat.Sex === "F") {
//       sumaSalariiNeteF += salariuNet;
//       numarAngajatiF++;
//     }
//   }

//   // Pasul 4: Calculul mediei pentru fiecare sex
//   var mediaSalariuNetM = numarAngajatiM > 0 ? sumaSalariiNeteM / numarAngajatiM : 0;
//   var mediaSalariuNetF = numarAngajatiF > 0 ? sumaSalariiNeteF / numarAngajatiF : 0;

//   // Pasul 5: Returnează rezultatele sub formă de obiect
//   return { MediaSalariuNetM: mediaSalariuNetM, MediaSalariuNetF: mediaSalariuNetF };
// }

// // Pasul 6: Apelarea funcției și obținerea rezultatelor
// var rezultat = mediaSalariuNetPeSex(listaAngajati);

// // Pasul 7: Afișarea rezultatelor în consolă
// console.log("Media salariului net pentru sexul M:", rezultat.MediaSalariuNetM);
// console.log("Media salariului net pentru sexul F:", rezultat.MediaSalariuNetF);


















// // Vector cu obiecte pentru angajați
// var listaAngajati = [
//     { Nume: "Angajat1", Gen: "M", Departament: "IT", Post: "Programator", SalariuBrut: 3000, Specializare: "Informatica economica" },
//     { Nume: "Angajat2", Gen: "F", Departament: "Financiar", Post: "Contabil", SalariuBrut: 4500, Specializare: "Contabilitate" },
//     // Adăugați mai mulți angajați pentru a completa lista
//   ];
  
//   // Funcție pentru calcularea numărului de angajați care nu plătesc impozit
//   function numarAngajatiFaraImpozit(listaAngajati) {
//     var numarFaraImpozit = 0;
  
//     // Parcurgeți lista de angajați și verificați condițiile pentru impozit
//     for (var i = 0; i < listaAngajati.length; i++) {
//       var angajat = listaAngajati[i];
  
//       // Verificați dacă angajatul are specializare care nu plătește impozit
//       if (
//         angajat.Specializare === "Informatica economica" ||
//         angajat.Specializare === "Informatica" ||
//         angajat.Specializare === "Tehnologia informatiei"
//       ) {
//         // Incrementați numărul de angajați care nu plătesc impozit
//         numarFaraImpozit++;
//       } else {
//         // Verificați impozitul pentru celelalte specializări și ajustați numărul în funcție de condiții
//         var salariuBrut = angajat.SalariuBrut;
//         var impozitPentruSalMinim = 0;
  
//         if (salariuBrut > 0 && salariuBrut <= 2500) {
//           impozitPentruSalMinim = 0;
//         } else if (salariuBrut <= 4000) {
//           impozitPentruSalMinim = 250;
//         } else if (salariuBrut <= 7000) {
//           impozitPentruSalMinim = 600;
//         } else if (salariuBrut <= 15000) {
//           impozitPentruSalMinim = 1200;
//         } else {
//           impozitPentruSalMinim = 2500;
//         }
  
//         var intervalSalMinim = [0, 2501, 4001, 7001, 15001];
//         var procentDepasire = [12, 16, 20, 22, 25];
  
//         for (var j = 1; j < intervalSalMinim.length; j++) {
//           if (salariuBrut > intervalSalMinim[j - 1] && salariuBrut <= intervalSalMinim[j]) {
//             impozitPentruSalMinim += (salariuBrut - intervalSalMinim[j - 1]) * (procentDepasire[j - 1] / 100);
//             break;
//           }
//         }
  
//         if (impozitPentruSalMinim === 0) {
//           // Incrementați numărul de angajați care nu plătesc impozit
//           numarFaraImpozit++;
//         }
//       }
//     }
  
//     // Returnați numărul de angajați care nu plătesc impozit
//     return numarFaraImpozit;
//   }
  
//   // Apelați funcția și afișați rezultatul
//   var rezultat = numarAngajatiFaraImpozit(listaAngajati);
//   console.log("Numărul de angajați care nu plătesc impozit:", rezultat);
  









var listaAngajati = [
    { Nume: "Angajat1", Gen: "M", Departament: "IT", Post: "Programator", SalariuBrut: 3000, Specializare: "Informatica economica" },
    { Nume: "Angajat2", Gen: "F", Departament: "Financiar", Post: "Contabil", SalariuBrut: 4500, Specializare: "Contabilitate" },
    // Adăugați mai mulți angajați pentru a completa lista
  ];
  

// Funcție pentru identificarea angajaților cu cel mai mare impozit datorat
function angajatiCuCelMaiMareImpozit(listaAngajati) {
    var angajatiMaxImpozit = [];
    var maxImpozit = -1;
  
    // Parcurgeți lista de angajați și identificați cei cu cel mai mare impozit
    for (var i = 0; i < listaAngajati.length; i++) {
      var angajat = listaAngajati[i];
      var salariuBrut = angajat.SalariuBrut;
      var impozit = 0;
  
      // Verificați dacă angajatul are specializare care nu plătește impozit
      if (
        angajat.Specializare === "Informatica economica" ||
        angajat.Specializare === "Informatica" ||
        angajat.Specializare === "Tehnologia informatiei"
      ) {
        // Impozitul este 0 pentru aceste specializări
        impozit = 0;
      } else {
        // Verificați impozitul pentru celelalte specializări și ajustați în funcție de condiții
        var impozitPentruSalMinim = 0;
  
        if (salariuBrut > 0 && salariuBrut <= 2500) {
          impozitPentruSalMinim = 0;
        } else if (salariuBrut <= 4000) {
          impozitPentruSalMinim = 250;
        } else if (salariuBrut <= 7000) {
          impozitPentruSalMinim = 600;
        } else if (salariuBrut <= 15000) {
          impozitPentruSalMinim = 1200;
        } else {
          impozitPentruSalMinim = 2500;
        }
  
        var intervalSalMinim = [0, 2501, 4001, 7001, 15001];
        var procentDepasire = [12, 16, 20, 22, 25];
  
        for (var j = 1; j < intervalSalMinim.length; j++) {
          if (salariuBrut > intervalSalMinim[j - 1] && salariuBrut <= intervalSalMinim[j]) {
            impozitPentruSalMinim += (salariuBrut - intervalSalMinim[j - 1]) * (procentDepasire[j - 1] / 100);
            break;
          }
        }
  
        impozit = impozitPentruSalMinim;
      }
  
      // Verificați dacă impozitul este cel mai mare până acum
      if (impozit > maxImpozit) {
        maxImpozit = impozit;
        angajatiMaxImpozit = [angajat]; // Resetați lista cu angajați cu cel mai mare impozit
      } else if (impozit === maxImpozit) {
        // Dacă impozitul este egal cu cel mai mare, adăugați angajatul la array fără a folosi push
        angajatiMaxImpozit[angajatiMaxImpozit.length] = angajat;
      }
    }
  
    // Returnați lista cu angajații cu cel mai mare impozit
    return angajatiMaxImpozit;
  }
  
  // Apelați funcția și afișați rezultatele
  var angajatiMaxImpozit = angajatiCuCelMaiMareImpozit(listaAngajati);
  
  if (angajatiMaxImpozit.length > 0) {
    console.log("Angajații cu cel mai mare impozit datorat:");
    angajatiMaxImpozit.forEach(function (angajat) {
      console.log(`${angajat.Nume}: Impozit = ${maxImpozit.toFixed(2)}`);
    });
  } else {
    console.log("Nu există angajați cu impozit datorat.");
  }
  