import 'package:flutter/material.dart';

import '../funcoes.dart';

class BarraDrawer {

  static Widget criar(BuildContext context, String titulo, Color corFundo, Color corTexto, List<Map> listaCarros, {IconData iconeTitulo}) {
    return Drawer(
      child: ListView(
        children: [
          _criarTituloBarra(titulo, corFundo, corTexto, iconeTitulo),
          _criarListaCarros(context, listaCarros, corFundo),
        ],
      ),
    );
  }

  static Widget _criarTituloBarra(String titulo, Color corFundo, Color corTexto, IconData iconeTitulo) {
    return DrawerHeader(
      child: Column(
        children: [
          Funcoes.criarIcone(iconeTitulo, cor: Colors.white, tamanho: 62),
          Text(titulo, style: TextStyle(color: corTexto, fontSize: 32),),
        ],
      ),
      decoration: BoxDecoration(color: corFundo),
    );
  }

  static Widget _criarListaCarros(BuildContext context, List<Map> listaCarros, Color corTexto) {
    var lista = List<Widget>();

    for (var item in listaCarros)
      lista.add(_criarCarro(context, item["texto"], item["icone"], corTexto, item["evento"]));

    return Column(children: lista,);
  }

  static Widget _criarCarro(BuildContext context, String texto, IconData icone, Color corTexto, Function evento) {
    return ListTile(
      title: Row(
        children: [
          Funcoes.criarIcone(icone, tamanho: 28, cor: corTexto),
          Text(texto, style: TextStyle(fontSize: 18, color: corTexto),),
        ],
      ),
      onTap: () {
        Navigator.pop(context);
        evento();
      },
    );
  }
}