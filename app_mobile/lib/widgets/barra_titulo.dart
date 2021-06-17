import 'package:app_mobile/funcoes.dart';
import 'package:app_mobile/widgets/botao.dart';
import 'package:flutter/material.dart';

class BarraTitulo {

  static Widget criar(String titulo, {IconData icone, IconData iconeAcao, Function eventoAcao, bool tituloCentralizado = true}) {
    return AppBar(
      title: Row(
        children: [
          Funcoes.criarIcone(icone),
          Text(titulo),
        ],
      ),
      centerTitle: tituloCentralizado,
      actions: [ _criarBotaoAcao(iconeAcao, eventoAcao), ],
    );
  }

  static Widget _criarBotaoAcao(IconData iconeAcao, Function eventoAcao) {
    return iconeAcao != null ? Botao.criarBotaoBarra(iconeAcao, eventoAcao) : Container();
  }

}