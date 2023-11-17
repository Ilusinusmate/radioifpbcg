// Consultar documentação da API https://ajuda.rnp.br/eduplay/video-sob-demanda/manual-de-integracoes/api-para-integracao-com-o-eduplay/

const urlEndpoint = "https://eduplay.rnp.br/services/video";

const contentSection = document.querySelector("#content-holder");

async function getPosts(){

    const args = {
        order: 3, // Ordena por postagens mais recentes.
        limit: 15,
        institution: null,
        year: new Date().getFullYear()
      };

    const config = {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json' // Indica que o corpo da solicitação é JSON
            //   !!! ADICIONAR KEY DE AUTENTICAÇÃO
        },
        body: JSON.stringify(args) // Converte os dados do corpo para formato JSON
      };
      
    data = await fetch(urlEndpoint, config).catch(error => console.error("Erro na solicitação:", error));
    data = data.json();

    return data;
}

function renderPosts(data){
    for (post of data){
        const newPost = `
            <section class="content">
                <h3>${post.title}</h3>
                <p>${post.description}</p>
                <img class="thumbnail" src="${post.tumbnail}"/>
                <video width="640" height="360" controls>
                    <source src="${post.videoLink}" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
            </section>
        `;

        contentSection += newPost
    }
}

data = getPosts();
renderPosts(data);