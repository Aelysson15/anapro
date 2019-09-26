function abrirWhats(){

   $('#blogCarousel').carousel({
      interval: 5000
   });
   // chamar whats
   // window.open('https://api.whatsapp.com/send?phone=55839SEUNUMERO&text=Olá,%20quero%20saber%20mais%20sobre%20o%20Centro%20Jurídico', '_blank');
   // console.log($("#nome").val());
   // console.log($("#email").val());
   // console.log($("#telefone").val());

   let ddd = $("#telefone").val().substring(0, 2);
   let num = $("#telefone").val().substring(2, 12);

   // integrarção
   let dados = {
      Key:"JHvk9aRX9Us1",
      CampanhaKey:"LEdUNxDX1VA1",
      ProdutoKey:"phLkjNI3qGI1",
      CanalKey:"awwsg7iJxzU1",
      Midia:"LP CJ",
      Peca: "Formulario",
      
      PessoaNome:$("#nome").val(),
      PessoaEmail:$("#email").val(),
      PessoaTelefones: [ 
        { 
          Tipo:'OUTR',
          DDD: ddd,
          Numero: num,
          Ramal:null
        }
      ],
      // PessoaTelefones:$("#telefone").val(),

      KeyIntegradora:"D5C6B2DB-C008-4316-970F-9F5232F2EC0A",
      // "PessoaTelefones[0].DDD":$("#ddd").val(),
      // "PessoaTelefones[0].Numero":$("#numero").val(),
   }

   $.ajax({
     type: "POST",
     url: 'http://crm.anapro.com.br/webcrm/webapi/integracao/v2/CadastrarProspect',
     dataType: 'json',
     // contentType: 'application/json',
     headers: {
        'Content-Type':'application/json'
     },
     data: JSON.stringify(dados),
     success: function (data, textStatus, jQxhr) {
         console.log(data);
         console.log(textStatus);
         console.log(jQxhr);
     }
   });
}