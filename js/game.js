
function notifica(msg){
    $.notify({
    	title: '',
    	message: msg,
        icon: 'glyphicon glyphicon-ok',
    },{
    	// settings
    	element: 'body',
    	//position: null,
    	type: "success",
    	allow_dismiss: true,
    	newest_on_top: false,
    	showProgressbar: false,
    	placement: {
    		from: "top",
    		align: "right"
    	},
    	offset: {
    	   x: 10,
    	   y: 30
    	},
    	spacing: 10,
    	z_index: 1031,
    	delay: 1000,
    	timer: 800,
    	mouse_over: null,
    	animate: {
    		enter: 'animated bounce',
	        exit: 'animated bounce'
    	},
    	onShow: null,
    	onShown: null,
    	onClose: null,
    	onClosed: null,
    	icon_type: 'class',
    });
}
function alertaPendente(jogo){
    if(jogo == 'roleta'){
        var texto = 'Adquira a VERSÃO PRO e tenha acesso a todos os jogos com maior ASSERTIVIDADE nos seus GANHOS <a href="https://siteseguro.net/PPU38CO0QIS" target="_blank">Clique aqui para adquirir a VERSÃO PRO</a> Aproveite a oferta 70% de desconto!';
    } else if(jogo == 'aviator'){
        var texto = 'Os jogos são liberados após seu primeiro depósito de R$50,00 na <a href="https://go.aff.elisa.bet/r6bgqux3" target="_blank">ElisaBET</a>';
    } else if(jogo == 'slots'){
        var texto = 'Os jogos são liberados após seu primeiro depósito de R$50,00 na <a href="https://go.aff.elisa.bet/r6bgqux3" target="_blank">ElisaBET</a>';
    }
    Swal.fire({ icon: 'error', title: 'Adquira VERSÃO PRO!', html: texto });
}
function alertaPendente2(jogo){
    if(jogo == 'app'){
        var texto = ' Abra o aplicativo no Safari<br>Clique no icone de "compartilhamento" no canto inferior do smartphone <br>Clique em "Adicionar á tela de inicio" ou "Add to Home Screen"<br>Clique em "Adicionar" no canto superior direito<br>PRONTINHO, use e abuse do nosso APP';
    } else if(jogo == 'aviator'){
        var texto = 'Os jogos são liberados após seu primeiro depósito de R$50,00 na <a href="https://go.aff.elisa.bet/r6bgqux3" target="_blank">ElisaBET</a>';
    } else if(jogo == 'roleta'){
        var texto = 'Os jogos são liberados após seu primeiro depósito de R$50,00 na <a href="https://go.aff.elisa.bet/r6bgqux3" target="_blank">ElisaBET</a>';
    }
    Swal.fire({ icon: '' , title: '', html: texto });
}