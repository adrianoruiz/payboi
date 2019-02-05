<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{

    /**INSERIR CIDADE MANUALMENTE
        
INSERT INTO `city` (`id`, `name`, `state`) VALUES
(1, 'Afonso Cláudio', 8),
(2, 'Água Doce do Norte', 8),
(3, 'Águia Branca', 8),
(4, 'Alegre', 8),
(5, 'Alfredo Chaves', 8),
(6, 'Alto Rio Novo', 8),
(7, 'Anchieta', 8),
(8, 'Apiacá', 8),
(9, 'Aracruz', 8),
(10, 'Atilio Vivacqua', 8),
(11, 'Baixo Guandu', 8),
(12, 'Barra de São Francisco', 8),
(13, 'Boa Esperança', 8),
(14, 'Bom Jesus do Norte', 8),
(15, 'Brejetuba', 8),
(16, 'Cachoeiro de Itapemirim', 8),
(17, 'Cariacica', 8),
(18, 'Castelo', 8),
(19, 'Colatina', 8),
(20, 'Conceição da Barra', 8),
(21, 'Conceição do Castelo', 8),
(22, 'Divino de São Lourenço', 8),
(23, 'Domingos Martins', 8),
(24, 'Dores do Rio Preto', 8),
(25, 'Ecoporanga', 8),
(26, 'Fundão', 8),
(27, 'Governador Lindenberg', 8),
(28, 'Guaçuí', 8),
(29, 'Guarapari', 8),
(30, 'Ibatiba', 8),
(31, 'Ibiraçu', 8),
(32, 'Ibitirama', 8),
(33, 'Iconha', 8),
(34, 'Irupi', 8),
(35, 'Itaguaçu', 8),
(36, 'Itapemirim', 8),
(37, 'Itarana', 8),
(38, 'Iúna', 8),
(39, 'Jaguaré', 8),
(40, 'Jerônimo Monteiro', 8),
(41, 'João Neiva', 8),
(42, 'Laranja da Terra', 8),
(43, 'Linhares', 8),
(44, 'Mantenópolis', 8),
(45, 'Marataízes', 8),
(46, 'Marechal Floriano', 8),
(47, 'Marilândia', 8),
(48, 'Mimoso do Sul', 8),
(49, 'Montanha', 8),
(50, 'Mucurici', 8),
(51, 'Muniz Freire', 8),
(52, 'Muqui', 8),
(53, 'Nova Venécia', 8),
(54, 'Pancas', 8),
(55, 'Pedro Canário', 8),
(56, 'Pinheiros', 8),
(57, 'Piúma', 8),
(58, 'Ponto Belo', 8),
(59, 'Presidente Kennedy', 8),
(60, 'Rio Bananal', 8),
(61, 'Rio Novo do Sul', 8),
(62, 'Santa Leopoldina', 8),
(63, 'Santa Maria de Jetibá', 8),
(64, 'Santa Teresa', 8),
(65, 'São Domingos do Norte', 8),
(66, 'São Gabriel da Palha', 8),
(67, 'São José do Calçado', 8),
(68, 'São Mateus', 8),
(69, 'São Roque do Canaã', 8),
(70, 'Serra', 8),
(71, 'Sooretama', 8),
(72, 'Vargem Alta', 8),
(73, 'Venda Nova do Imigrante', 8),
(74, 'Viana', 8),
(75, 'Vila Pavão', 8),
(76, 'Vila Valério', 8),
(77, 'Vila Velha', 8),
(78, 'Vitória', 8),
(79, 'Acrelândia', 1),
(80, 'Assis Brasil', 1),
(81, 'Brasiléia', 1),
(82, 'Bujari', 1),
(83, 'Capixaba', 1),
(84, 'Cruzeiro do Sul', 1),
(85, 'Epitaciolândia', 1),
(86, 'Feijó', 1),
(87, 'Jordão', 1),
(88, 'Mâncio Lima', 1),
(89, 'Manoel Urbano', 1),
(90, 'Marechal Thaumaturgo', 1),
(91, 'Plácido de Castro', 1),
(92, 'Porto Acre', 1),
(93, 'Porto Walter', 1),
(94, 'Rio Branco', 1),
(95, 'Rodrigues Alves', 1),
(96, 'Santa Rosa do Purus', 1),
(97, 'Sena Madureira', 1),
(98, 'Senador Guiomard', 1),
(99, 'Tarauacá', 1),
(100, 'Xapuri', 1),
(101, 'Água Branca', 2),
(102, 'Anadia', 2),
(103, 'Arapiraca', 2),
(104, 'Atalaia', 2),
(105, 'Barra de Santo Antônio', 2),
(106, 'Barra de São Miguel', 2),
(107, 'Batalha', 2),
(108, 'Belém', 2),
(109, 'Belo Monte', 2),
(110, 'Boca da Mata', 2),
(111, 'Branquinha', 2),
(112, 'Cacimbinhas', 2),
(113, 'Cajueiro', 2),
(114, 'Campestre', 2),
(115, 'Campo Alegre', 2),
(116, 'Campo Grande', 2),
(117, 'Canapi', 2),
(118, 'Capela', 2),
(119, 'Carneiros', 2),
(120, 'Chã Preta', 2),
(121, 'Coité do Nóia', 2),
(122, 'Colônia Leopoldina', 2),
(123, 'Coqueiro Seco', 2),
(124, 'Coruripe', 2),
(125, 'Craíbas', 2),
(126, 'Delmiro Gouveia', 2),
(127, 'Dois Riachos', 2),
(128, 'Estrela de Alagoas', 2),
(129, 'Feira Grande', 2),
(130, 'Feliz Deserto', 2),
(131, 'Flexeiras', 2),
(132, 'Girau do Ponciano', 2),
(133, 'Ibateguara', 2),
(134, 'Igaci', 2),
(135, 'Igreja Nova', 2),
(136, 'Inhapi', 2),
(137, 'Jacaré dos Homens', 2),
(138, 'Jacuípe', 2),
(139, 'Japaratinga', 2),
(140, 'Jaramataia', 2),
(141, 'Jequiá da Praia', 2),
(142, 'Joaquim Gomes', 2),
(143, 'Jundiá', 2),
(144, 'Junqueiro', 2),
(145, 'Lagoa da Canoa', 2),
(146, 'Limoeiro de Anadia', 2),
(147, 'Maceió', 2),
(148, 'Major Isidoro', 2),
(149, 'Mar Vermelho', 2),
(150, 'Maragogi', 2),
(151, 'Maravilha', 2),
(152, 'Marechal Deodoro', 2),
(153, 'Maribondo', 2),
(154, 'Mata Grande', 2),
(155, 'Matriz de Camaragibe', 2),
(156, 'Messias', 2),
(157, 'Minador do Negrão', 2),
(158, 'Monteirópolis', 2),
(159, 'Murici', 2),
(160, 'Novo Lino', 2),
(161, 'Olho d`Água das Flores', 2),
(162, 'Olho d`Água do Casado', 2),
(163, 'Olho d`Água Grande', 2),
(164, 'Olivença', 2),
(165, 'Ouro Branco', 2),
(166, 'Palestina', 2),
(167, 'Palmeira dos Índios', 2),
(168, 'Pão de Açúcar', 2),
(169, 'Pariconha', 2),
(170, 'Paripueira', 2),
(171, 'Passo de Camaragibe', 2),
(172, 'Paulo Jacinto', 2),
(173, 'Penedo', 2),
(174, 'Piaçabuçu', 2),
(175, 'Pilar', 2),
(176, 'Pindoba', 2),
(177, 'Piranhas', 2),
(178, 'Poço das Trincheiras', 2),
(179, 'Porto Calvo', 2),
(180, 'Porto de Pedras', 2),
(181, 'Porto Real do Colégio', 2),
(182, 'Quebrangulo', 2),
(183, 'Rio Largo', 2),
(184, 'Roteiro', 2),
(185, 'Santa Luzia do Norte', 2),
(186, 'Santana do Ipanema', 2),
(187, 'Santana do Mundaú', 2),
(188, 'São Brás', 2),
(189, 'São José da Laje', 2),
(190, 'São José da Tapera', 2),
(191, 'São Luís do Quitunde', 2),
(192, 'São Miguel dos Campos', 2),
(193, 'São Miguel dos Milagres', 2),
(194, 'São Sebastião', 2),
(195, 'Satuba', 2),
(196, 'Senador Rui Palmeira', 2),
(197, 'Tanque d`Arca', 2),
(198, 'Taquarana', 2),
(199, 'Teotônio Vilela', 2),
(200, 'Traipu', 2),
(201, 'União dos Palmares', 2),
(202, 'Viçosa', 2),
(203, 'Amapá', 4),
(204, 'Calçoene', 4),
(205, 'Cutias', 4),
(206, 'Ferreira Gomes', 4),
(207, 'Itaubal', 4),
(208, 'Laranjal do Jari', 4),
(209, 'Macapá', 4),
(210, 'Mazagão', 4),
(211, 'Oiapoque', 4),
(212, 'Pedra Branca do Amaparí', 4),
(213, 'Porto Grande', 4),
(214, 'Pracuúba', 4),
(215, 'Santana', 4),
(216, 'Serra do Navio', 4),
(217, 'Tartarugalzinho', 4),
(218, 'Vitória do Jari', 4),
(219, 'Alvarães', 3),
(220, 'Amaturá', 3),
(221, 'Anamã', 3),
(222, 'Anori', 3),
(223, 'Apuí', 3),
(224, 'Atalaia do Norte', 3),
(225, 'Autazes', 3),
(226, 'Barcelos', 3),
(227, 'Barreirinha', 3),
(228, 'Benjamin Constant', 3),
(229, 'Beruri', 3),
(230, 'Boa Vista do Ramos', 3),
(231, 'Boca do Acre', 3),
(232, 'Borba', 3),
(233, 'Caapiranga', 3),
(234, 'Canutama', 3),
(235, 'Carauari', 3),
(236, 'Careiro', 3),
(237, 'Careiro da Várzea', 3),
(238, 'Coari', 3),
(239, 'Codajás', 3),
(240, 'Eirunepé', 3),
(241, 'Envira', 3),
(242, 'Fonte Boa', 3),
(243, 'Guajará', 3),
(244, 'Humaitá', 3),
(245, 'Ipixuna', 3),
(246, 'Iranduba', 3),
(247, 'Itacoatiara', 3),
(248, 'Itamarati', 3),
(249, 'Itapiranga', 3),
(250, 'Japurá', 3),
(251, 'Juruá', 3),
(252, 'Jutaí', 3),
(253, 'Lábrea', 3),
(254, 'Manacapuru', 3),
(255, 'Manaquiri', 3),
(256, 'Manaus', 3),
(257, 'Manicoré', 3),
(258, 'Maraã', 3),
(259, 'Maués', 3),
(260, 'Nhamundá', 3),
(261, 'Nova Olinda do Norte', 3),
(262, 'Novo Airão', 3),
(263, 'Novo Aripuanã', 3),
(264, 'Parintins', 3),
(265, 'Pauini', 3),
(266, 'Presidente Figueiredo', 3),
(267, 'Rio Preto da Eva', 3),
(268, 'Santa Isabel do Rio Negro', 3),
(269, 'Santo Antônio do Içá', 3),
(270, 'São Gabriel da Cachoeira', 3),
(271, 'São Paulo de Olivença', 3),
(272, 'São Sebastião do Uatumã', 3),
(273, 'Silves', 3),
(274, 'Tabatinga', 3),
(275, 'Tapauá', 3),
(276, 'Tefé', 3),
(277, 'Tonantins', 3),
(278, 'Uarini', 3),
(279, 'Urucará', 3),
(280, 'Urucurituba', 3),
(281, 'Abaíra', 5),
(282, 'Abaré', 5),
(283, 'Acajutiba', 5),
(284, 'Adustina', 5),
(285, 'Água Fria', 5),
(286, 'Aiquara', 5),
(287, 'Alagoinhas', 5),
(288, 'Alcobaça', 5),
(289, 'Almadina', 5),
(290, 'Amargosa', 5),
(291, 'Amélia Rodrigues', 5),
(292, 'América Dourada', 5),
(293, 'Anagé', 5),
(294, 'Andaraí', 5),
(295, 'Andorinha', 5),
(296, 'Angical', 5),
(297, 'Anguera', 5),
(298, 'Antas', 5),
(299, 'Antônio Cardoso', 5),
(300, 'Antônio Gonçalves', 5),
(301, 'Aporá', 5),
(302, 'Apuarema', 5),
(303, 'Araças', 5),
(304, 'Aracatu', 5),
(305, 'Araci', 5),
(306, 'Aramari', 5),
(307, 'Arataca', 5),
(308, 'Aratuípe', 5),
(309, 'Aurelino Leal', 5),
(310, 'Baianópolis', 5),
(311, 'Baixa Grande', 5),
(312, 'Banzaê', 5),
(313, 'Barra', 5),
(314, 'Barra da Estiva', 5),
(315, 'Barra do Choça', 5),
(316, 'Barra do Mendes', 5),
(317, 'Barra do Rocha', 5),
(318, 'Barreiras', 5),
(319, 'Barro Alto', 5),
(320, 'Barro Preto (antigo Gov. Lomanto Jr.)', 5),
(321, 'Barrocas', 5),
(322, 'Belmonte', 5),
(323, 'Belo Campo', 5),
(324, 'Biritinga', 5),
(325, 'Boa Nova', 5),
(326, 'Boa Vista do Tupim', 5),
(327, 'Bom Jesus da Lapa', 5),
(328, 'Bom Jesus da Serra', 5),
(329, 'Boninal', 5),
(330, 'Bonito', 5),
(331, 'Boquira', 5),
(332, 'Botuporã', 5),
(333, 'Brejões', 5),
(334, 'Brejolândia', 5),
(335, 'Brotas de Macaúbas', 5),
(336, 'Brumado', 5),
(337, 'Buerarema', 5),
(338, 'Buritirama', 5),
(339, 'Caatiba', 5),
(340, 'Cabaceiras do Paraguaçu', 5),
(341, 'Cachoeira', 5),
(342, 'Caculé', 5),
(343, 'Caém', 5),
(344, 'Caetanos', 5),
(345, 'Caetité', 5),
(346, 'Cafarnaum', 5),
(347, 'Cairu', 5),
(348, 'Caldeirão Grande', 5),
(349, 'Camacan', 5),
(350, 'Camaçari', 5),
(351, 'Camamu', 5),
(352, 'Campo Alegre de Lourdes', 5),
(353, 'Campo Formoso', 5),
(354, 'Canápolis', 5),
(355, 'Canarana', 5),
(356, 'Canavieiras', 5),
(357, 'Candeal', 5),
(358, 'Candeias', 5),
(359, 'Candiba', 5),
(360, 'Cândido Sales', 5),
(361, 'Cansanção', 5),
(362, 'Canudos', 5),
(363, 'Capela do Alto Alegre', 5),
(364, 'Capim Grosso', 5),
(365, 'Caraíbas', 5),
(366, 'Caravelas', 5),
(367, 'Cardeal da Silva', 5),
(368, 'Carinhanha', 5),
(369, 'Casa Nova', 5),
(370, 'Castro Alves', 5),
(371, 'Catolândia', 5),
(372, 'Catu', 5),
(373, 'Caturama', 5),
(374, 'Central', 5),
(375, 'Chorrochó', 5),
(376, 'Cícero Dantas', 5),
(377, 'Cipó', 5),
(378, 'Coaraci', 5),
(379, 'Cocos', 5),
(380, 'Conceição da Feira', 5),
(381, 'Conceição do Almeida', 5),
(382, 'Conceição do Coité', 5),
(383, 'Conceição do Jacuípe', 5),
(384, 'Conde', 5),
(385, 'Condeúba', 5),
(386, 'Contendas do Sincorá', 5),
(387, 'Coração de Maria', 5),
(388, 'Cordeiros', 5),
(389, 'Coribe', 5),
(390, 'Coronel João Sá', 5),
(391, 'Correntina', 5),
(392, 'Cotegipe', 5),
(393, 'Cravolândia', 5),
(394, 'Crisópolis', 5),
(395, 'Cristópolis', 5),
(396, 'Cruz das Almas', 5),
(397, 'Curaçá', 5),
(398, 'Dário Meira', 5),
(399, 'Dias d`Ávila', 5),
(400, 'Dom Basílio', 5),
(401, 'Dom Macedo Costa', 5),
(402, 'Elísio Medrado', 5),
(403, 'Encruzilhada', 5),
(404, 'Entre Rios', 5),
(405, 'Érico Cardoso', 5),
(406, 'Esplanada', 5),
(407, 'Euclides da Cunha', 5),
(408, 'Eunápolis', 5),
(409, 'Fátima', 5),
(410, 'Feira da Mata', 5),
(411, 'Feira de Santana', 5),
(412, 'Filadélfia', 5),
(413, 'Firmino Alves', 5),
(414, 'Floresta Azul', 5),
(415, 'Formosa do Rio Preto', 5),
(416, 'Gandu', 5),
(417, 'Gavião', 5),
(418, 'Gentio do Ouro', 5),
(419, 'Glória', 5),
(420, 'Gongogi', 5),
(421, 'Governador Mangabeira', 5),
(422, 'Guajeru', 5),
(423, 'Guanambi', 5),
(424, 'Guaratinga', 5),
(425, 'Heliópolis', 5),
(426, 'Iaçu', 5),
(427, 'Ibiassucê', 5),
(428, 'Ibicaraí', 5),
(429, 'Ibicoara', 5),
(430, 'Ibicuí', 5),
(431, 'Ibipeba', 5),
(432, 'Ibipitanga', 5),
(433, 'Ibiquera', 5),
(434, 'Ibirapitanga', 5),
(435, 'Ibirapuã', 5),
(436, 'Ibirataia', 5),
(437, 'Ibitiara', 5),
(438, 'Ibititá', 5),
(439, 'Ibotirama', 5),
(440, 'Ichu', 5),
(441, 'Igaporã', 5),
(442, 'Igrapiúna', 5),
(443, 'Iguaí', 5),
(444, 'Ilhéus', 5),
(445, 'Inhambupe', 5),
(446, 'Ipecaetá', 5),
(447, 'Ipiaú', 5),
(448, 'Ipirá', 5),
(449, 'Ipupiara', 5),
(450, 'Irajuba', 5),
(451, 'Iramaia', 5),
(452, 'Iraquara', 5),
(453, 'Irará', 5),
(454, 'Irecê', 5),
(455, 'Itabela', 5),
(456, 'Itaberaba', 5),
(457, 'Itabuna', 5),
(458, 'Itacaré', 5),
(459, 'Itaeté', 5),
(460, 'Itagi', 5),
(461, 'Itagibá', 5),
(462, 'Itagimirim', 5),
(463, 'Itaguaçu da Bahia', 5),
(464, 'Itaju do Colônia', 5),
(465, 'Itajuípe', 5),
(466, 'Itamaraju', 5),
(467, 'Itamari', 5),
(468, 'Itambé', 5),
(469, 'Itanagra', 5),
(470, 'Itanhém', 5),
(471, 'Itaparica', 5),
(472, 'Itapé', 5),
(473, 'Itapebi', 5),
(474, 'Itapetinga', 5),
(475, 'Itapicuru', 5),
(476, 'Itapitanga', 5),
(477, 'Itaquara', 5),
(478, 'Itarantim', 5),
(479, 'Itatim', 5),
(480, 'Itiruçu', 5),
(481, 'Itiúba', 5),
(482, 'Itororó', 5),
(483, 'Ituaçu', 5),
(484, 'Ituberá', 5),
(485, 'Iuiú', 5),
(486, 'Jaborandi', 5),
(487, 'Jacaraci', 5),
(488, 'Jacobina', 5),
(489, 'Jaguaquara', 5),
(490, 'Jaguarari', 5),
(491, 'Jaguaripe', 5),
(492, 'Jandaíra', 5),
(493, 'Jequié', 5),
(494, 'Jeremoabo', 5),
(495, 'Jiquiriçá', 5),
(496, 'Jitaúna', 5),
(497, 'João Dourado', 5),
(498, 'Juazeiro', 5),
(499, 'Jucuruçu', 5),
(500, 'Jussara', 5),
(501, 'Jussari', 5),
(502, 'Jussiape', 5),
(503, 'Lafaiete Coutinho', 5),
(504, 'Lagoa Real', 5),
(505, 'Laje', 5),
(506, 'Lajedão', 5),
(507, 'Lajedinho', 5),
(508, 'Lajedo do Tabocal', 5),
(509, 'Lamarão', 5),
(510, 'Lapão', 5),
(511, 'Lauro de Freitas', 5),
(512, 'Lençóis', 5),
(513, 'Licínio de Almeida', 5),
(514, 'Livramento de Nossa Senhora', 5),
(515, 'Luís Eduardo Magalhães', 5),
(516, 'Macajuba', 5),
(517, 'Macarani', 5),
(518, 'Macaúbas', 5),
(519, 'Macururé', 5),
(520, 'Madre de Deus', 5),
(521, 'Maetinga', 5),
(522, 'Maiquinique', 5),
(523, 'Mairi', 5),
(524, 'Malhada', 5),
(525, 'Malhada de Pedras', 5),
(526, 'Manoel Vitorino', 5),
(527, 'Mansidão', 5),
(528, 'Maracás', 5),
(529, 'Maragogipe', 5),
(530, 'Maraú', 5),
(531, 'Marcionílio Souza', 5),
(532, 'Mascote', 5),
(533, 'Mata de São João', 5),
(534, 'Matina', 5),
(535, 'Medeiros Neto', 5),
(536, 'Miguel Calmon', 5),
(537, 'Milagres', 5),
(538, 'Mirangaba', 5),
(539, 'Mirante', 5),
(540, 'Monte Santo', 5),
(541, 'Morpará', 5),
(542, 'Morro do Chapéu', 5),
(543, 'Mortugaba', 5),
(544, 'Mucugê', 5),
(545, 'Mucuri', 5),
(546, 'Mulungu do Morro', 5),
(547, 'Mundo Novo', 5),
(548, 'Muniz Ferreira', 5),
(549, 'Muquém de São Francisco', 5),
(550, 'Muritiba', 5),
(551, 'Mutuípe', 5),
(552, 'Nazaré', 5),
(553, 'Nilo Peçanha', 5),
(554, 'Nordestina', 5),
(555, 'Nova Canaã', 5),
(556, 'Nova Fátima', 5),
(557, 'Nova Ibiá', 5),
(558, 'Nova Itarana', 5),
(559, 'Nova Redenção', 5),
(560, 'Nova Soure', 5),
(561, 'Nova Viçosa', 5),
(562, 'Novo Horizonte', 5),
(563, 'Novo Triunfo', 5),
(564, 'Olindina', 5),
(565, 'Oliveira dos Brejinhos', 5),
(566, 'Ouriçangas', 5),
(567, 'Ourolândia', 5),
(568, 'Palmas de Monte Alto', 5),
(569, 'Palmeiras', 5),
(570, 'Paramirim', 5),
(571, 'Paratinga', 5),
(572, 'Paripiranga', 5),
(573, 'Pau Brasil', 5),
(574, 'Paulo Afonso', 5),
(575, 'Pé de Serra', 5),
(576, 'Pedrão', 5),
(577, 'Pedro Alexandre', 5),
(578, 'Piatã', 5),
(579, 'Pilão Arcado', 5),
(580, 'Pindaí', 5),
(581, 'Pindobaçu', 5),
(582, 'Pintadas', 5),
(583, 'Piraí do Norte', 5),
(584, 'Piripá', 5),
(585, 'Piritiba', 5),
(586, 'Planaltino', 5),
(587, 'Planalto', 5),
(588, 'Poções', 5),
(589, 'Pojuca', 5),
(590, 'Ponto Novo', 5),
(591, 'Porto Seguro', 5),
(592, 'Potiraguá', 5),
(593, 'Prado', 5),
(594, 'Presidente Dutra', 5),
(595, 'Presidente Jânio Quadros', 5),
(596, 'Presidente Tancredo Neves', 5),
(597, 'Queimadas', 5),
(598, 'Quijingue', 5),
(599, 'Quixabeira', 5),
(600, 'Rafael Jambeiro', 5),
(601, 'Remanso', 5),
(602, 'Retirolândia', 5),
(603, 'Riachão das Neves', 5),
(604, 'Riachão do Jacuípe', 5),
(605, 'Riacho de Santana', 5),
(606, 'Ribeira do Amparo', 5),
(607, 'Ribeira do Pombal', 5),
(608, 'Ribeirão do Largo', 5),
(609, 'Rio de Contas', 5),
(610, 'Rio do Antônio', 5),
(611, 'Rio do Pires', 5),
(612, 'Rio Real', 5),
(613, 'Rodelas', 5),
(614, 'Ruy Barbosa', 5),
(615, 'Salinas da Margarida', 5),
(616, 'Salvador', 5),
(617, 'Santa Bárbara', 5),
(618, 'Santa Brígida', 5),
(619, 'Santa Cruz Cabrália', 5),
(620, 'Santa Cruz da Vitória', 5),
(621, 'Santa Inês', 5),
(622, 'Santa Luzia', 5),
(623, 'Santa Maria da Vitória', 5),
(624, 'Santa Rita de Cássia', 5),
(625, 'Santa Teresinha', 5),
(626, 'Santaluz', 5),
(627, 'Santana', 5),
(628, 'Santanópolis', 5),
(629, 'Santo Amaro', 5),
(630, 'Santo Antônio de Jesus', 5),
(631, 'Santo Estêvão', 5),
(632, 'São Desidério', 5),
(633, 'São Domingos', 5),
(634, 'São Felipe', 5),
(635, 'São Félix', 5),
(636, 'São Félix do Coribe', 5),
(637, 'São Francisco do Conde', 5),
(638, 'São Gabriel', 5),
(639, 'São Gonçalo dos Campos', 5),
(640, 'São José da Vitória', 5),
(641, 'São José do Jacuípe', 5),
(642, 'São Miguel das Matas', 5),
(643, 'São Sebastião do Passé', 5),
(644, 'Sapeaçu', 5),
(645, 'Sátiro Dias', 5),
(646, 'Saubara', 5),
(647, 'Saúde', 5),
(648, 'Seabra', 5),
(649, 'Sebastião Laranjeiras', 5),
(650, 'Senhor do Bonfim', 5),
(651, 'Sento Sé', 5),
(652, 'Serra do Ramalho', 5),
(653, 'Serra Dourada', 5),
(654, 'Serra Preta', 5),
(655, 'Serrinha', 5),
(656, 'Serrolândia', 5),
(657, 'Simões Filho', 5),
(658, 'Sítio do Mato', 5),
(659, 'Sítio do Quinto', 5),
(660, 'Sobradinho', 5),
(661, 'Souto Soares', 5),
(662, 'Tabocas do Brejo Velho', 5),
(663, 'Tanhaçu', 5),
(664, 'Tanque Novo', 5),
(665, 'Tanquinho', 5),
(666, 'Taperoá', 5),
(667, 'Tapiramutá', 5),
(668, 'Teixeira de Freitas', 5),
(669, 'Teodoro Sampaio', 5),
(670, 'Teofilândia', 5),
(671, 'Teolândia', 5),
(672, 'Terra Nova', 5),
(673, 'Tremedal', 5),
(674, 'Tucano', 5),
(675, 'Uauá', 5),
(676, 'Ubaíra', 5),
(677, 'Ubaitaba', 5),
(678, 'Ubatã', 5),
(679, 'Uibaí', 5),
(680, 'Umburanas', 5),
(681, 'Una', 5),
(682, 'Urandi', 5),
(683, 'Uruçuca', 5),
(684, 'Utinga', 5),
(685, 'Valença', 5),
(686, 'Valente', 5),
(687, 'Várzea da Roça', 5),
(688, 'Várzea do Poço', 5),
(689, 'Várzea Nova', 5),
(690, 'Varzedo', 5),
(691, 'Vera Cruz', 5),
(692, 'Vereda', 5),
(693, 'Vitória da Conquista', 5),
(694, 'Wagner', 5),
(695, 'Wanderley', 5),
(696, 'Wenceslau Guimarães', 5),
(697, 'Xique-Xique', 5),
(698, 'Abaiara', 6),
(699, 'Acarape', 6),
(700, 'Acaraú', 6),
(701, 'Acopiara', 6),
(702, 'Aiuaba', 6),
(703, 'Alcântaras', 6),
(704, 'Altaneira', 6),
(705, 'Alto Santo', 6),
(706, 'Amontada', 6),
(707, 'Antonina do Norte', 6),
(708, 'Apuiarés', 6),
(709, 'Aquiraz', 6),
(710, 'Aracati', 6),
(711, 'Aracoiaba', 6),
(712, 'Ararendá', 6),
(713, 'Araripe', 6),
(714, 'Aratuba', 6),
(715, 'Arneiroz', 6),
(716, 'Assaré', 6),
(717, 'Aurora', 6),
(718, 'Baixio', 6),
(719, 'Banabuiú', 6),
(720, 'Barbalha', 6),
(721, 'Barreira', 6),
(722, 'Barro', 6),
(723, 'Barroquinha', 6),
(724, 'Baturité', 6),
(725, 'Beberibe', 6),
(726, 'Bela Cruz', 6),
(727, 'Boa Viagem', 6),
(728, 'Brejo Santo', 6),
(729, 'Camocim', 6),
(730, 'Campos Sales', 6),
(731, 'Canindé', 6),
(732, 'Capistrano', 6),
(733, 'Caridade', 6),
(734, 'Cariré', 6),
(735, 'Caririaçu', 6),
(736, 'Cariús', 6),
(737, 'Carnaubal', 6),
(738, 'Cascavel', 6),
(739, 'Catarina', 6),
(740, 'Catunda', 6),
(741, 'Caucaia', 6),
(742, 'Cedro', 6),
(743, 'Chaval', 6),
(744, 'Choró', 6),
(745, 'Chorozinho', 6),
(746, 'Coreaú', 6),
(747, 'Crateús', 6),
(748, 'Crato', 6),
(749, 'Croatá', 6),
(750, 'Cruz', 6),
(751, 'Deputado Irapuan Pinheiro', 6),
(752, 'Ererê', 6),
(753, 'Eusébio', 6),
(754, 'Farias Brito', 6),
(755, 'Forquilha', 6),
(756, 'Fortaleza', 6),
(757, 'Fortim', 6),
(758, 'Frecheirinha', 6),
(759, 'General Sampaio', 6),
(760, 'Graça', 6),
(761, 'Granja', 6),
(762, 'Granjeiro', 6),
(763, 'Groaíras', 6),
(764, 'Guaiúba', 6),
(765, 'Guaraciaba do Norte', 6),
(766, 'Guaramiranga', 6),
(767, 'Hidrolândia', 6),
(768, 'Horizonte', 6),
(769, 'Ibaretama', 6),
(770, 'Ibiapina', 6),
(771, 'Ibicuitinga', 6),
(772, 'Icapuí', 6),
(773, 'Icó', 6),
(774, 'Iguatu', 6),
(775, 'Independência', 6),
(776, 'Ipaporanga', 6),
(777, 'Ipaumirim', 6),
(778, 'Ipu', 6),
(779, 'Ipueiras', 6),
(780, 'Iracema', 6),
(781, 'Irauçuba', 6),
(782, 'Itaiçaba', 6),
(783, 'Itaitinga', 6),
(784, 'Itapagé', 6),
(785, 'Itapipoca', 6),
(786, 'Itapiúna', 6),
(787, 'Itarema', 6),
(788, 'Itatira', 6),
(789, 'Jaguaretama', 6),
(790, 'Jaguaribara', 6),
(791, 'Jaguaribe', 6),
(792, 'Jaguaruana', 6),
(793, 'Jardim', 6),
(794, 'Jati', 6),
(795, 'Jijoca de Jericoacoara', 6),
(796, 'Juazeiro do Norte', 6),
(797, 'Jucás', 6),
(798, 'Lavras da Mangabeira', 6),
(799, 'Limoeiro do Norte', 6),
(800, 'Madalena', 6),
(801, 'Maracanaú', 6),
(802, 'Maranguape', 6),
(803, 'Marco', 6),
(804, 'Martinópole', 6),
(805, 'Massapê', 6),
(806, 'Mauriti', 6),
(807, 'Meruoca', 6),
(808, 'Milagres', 6),
(809, 'Milhã', 6),
(810, 'Miraíma', 6),
(811, 'Missão Velha', 6),
(812, 'Mombaça', 6),
(813, 'Monsenhor Tabosa', 6),
(814, 'Morada Nova', 6),
(815, 'Moraújo', 6),
(816, 'Morrinhos', 6),
(817, 'Mucambo', 6),
(818, 'Mulungu', 6),
(819, 'Nova Olinda', 6),
(820, 'Nova Russas', 6),
(821, 'Novo Oriente', 6),
(822, 'Ocara', 6),
(823, 'Orós', 6),
(824, 'Pacajus', 6),
(825, 'Pacatuba', 6),
(826, 'Pacoti', 6),
(827, 'Pacujá', 6),
(828, 'Palhano', 6),
(829, 'Palmácia', 6),
(830, 'Paracuru', 6),
(831, 'Paraipaba', 6),
(832, 'Parambu', 6),
(833, 'Paramoti', 6),
(834, 'Pedra Branca', 6),
(835, 'Penaforte', 6),
(836, 'Pentecoste', 6),
(837, 'Pereiro', 6),
(838, 'Pindoretama', 6),
(839, 'Piquet Carneiro', 6),
(840, 'Pires Ferreira', 6),
(841, 'Poranga', 6),
(842, 'Porteiras', 6),
(843, 'Potengi', 6),
(844, 'Potiretama', 6),
(845, 'Quiterianópolis', 6),
(846, 'Quixadá', 6),
(847, 'Quixelô', 6),
(848, 'Quixeramobim', 6),
(849, 'Quixeré', 6),
(850, 'Redenção', 6),
(851, 'Reriutaba', 6),
(852, 'Russas', 6),
(853, 'Saboeiro', 6),
(854, 'Salitre', 6),
(855, 'Santa Quitéria', 6),
(856, 'Santana do Acaraú', 6),
(857, 'Santana do Cariri', 6),
(858, 'São Benedito', 6),
(859, 'São Gonçalo do Amarante', 6),
(860, 'São João do Jaguaribe', 6),
(861, 'São Luís do Curu', 6),
(862, 'Senador Pompeu', 6),
(863, 'Senador Sá', 6),
(864, 'Sobral', 6),
(865, 'Solonópole', 6),
(866, 'Tabuleiro do Norte', 6),
(867, 'Tamboril', 6),
(868, 'Tarrafas', 6),
(869, 'Tauá', 6),
(870, 'Tejuçuoca', 6),
(871, 'Tianguá', 6),
(872, 'Trairi', 6),
(873, 'Tururu', 6),
(874, 'Ubajara', 6),
(875, 'Umari', 6),
(876, 'Umirim', 6),
(877, 'Uruburetama', 6),
(878, 'Uruoca', 6),
(879, 'Varjota', 6),
(880, 'Várzea Alegre', 6),
(881, 'Viçosa do Ceará', 6),
(882, 'Brasília', 7),
(883, 'Abadia de Goiás', 9),
(884, 'Abadiânia', 9),
(885, 'Acreúna', 9),
(886, 'Adelândia', 9),
(887, 'Água Fria de Goiás', 9),
(888, 'Água Limpa', 9),
(889, 'Águas Lindas de Goiás', 9),
(890, 'Alexânia', 9),
(891, 'Aloândia', 9),
(892, 'Alto Horizonte', 9),
(893, 'Alto Paraíso de Goiás', 9),
(894, 'Alvorada do Norte', 9),
(895, 'Amaralina', 9),
(896, 'Americano do Brasil', 9),
(897, 'Amorinópolis', 9),
(898, 'Anápolis', 9),
(899, 'Anhanguera', 9),
(900, 'Anicuns', 9),
(901, 'Aparecida de Goiânia', 9),
(902, 'Aparecida do Rio Doce', 9),
(903, 'Aporé', 9),
(904, 'Araçu', 9),
(905, 'Aragarças', 9),
(906, 'Aragoiânia', 9),
(907, 'Araguapaz', 9),
(908, 'Arenópolis', 9),
(909, 'Aruanã', 9),
(910, 'Aurilândia', 9),
(911, 'Avelinópolis', 9),
(912, 'Baliza', 9),
(913, 'Barro Alto', 9),
(914, 'Bela Vista de Goiás', 9),
(915, 'Bom Jardim de Goiás', 9),
(916, 'Bom Jesus de Goiás', 9),
(917, 'Bonfinópolis', 9),
(918, 'Bonópolis', 9),
(919, 'Brazabrantes', 9),
(920, 'Britânia', 9),
(921, 'Buriti Alegre', 9),
(922, 'Buriti de Goiás', 9),
(923, 'Buritinópolis', 9),
(924, 'Cabeceiras', 9),
(925, 'Cachoeira Alta', 9),
(926, 'Cachoeira de Goiás', 9),
(927, 'Cachoeira Dourada', 9),
(928, 'Caçu', 9),
(929, 'Caiapônia', 9),
(930, 'Caldas Novas', 9),
(931, 'Caldazinha', 9),
(932, 'Campestre de Goiás', 9),
(933, 'Campinaçu', 9),
(934, 'Campinorte', 9),
(935, 'Campo Alegre de Goiás', 9),
(936, 'Campo Limpo de Goiás', 9),
(937, 'Campos Belos', 9),
(938, 'Campos Verdes', 9),
(939, 'Carmo do Rio Verde', 9),
(940, 'Castelândia', 9),
(941, 'Catalão', 9),
(942, 'Caturaí', 9),
(943, 'Cavalcante', 9),
(944, 'Ceres', 9),
(945, 'Cezarina', 9),
(946, 'Chapadão do Céu', 9),
(947, 'Cidade Ocidental', 9),
(948, 'Cocalzinho de Goiás', 9),
(949, 'Colinas do Sul', 9),
(950, 'Córrego do Ouro', 9),
(951, 'Corumbá de Goiás', 9),
(952, 'Corumbaíba', 9),
(953, 'Cristalina', 9),
(954, 'Cristianópolis', 9),
(955, 'Crixás', 9),
(956, 'Cromínia', 9),
(957, 'Cumari', 9),
(958, 'Damianópolis', 9),
(959, 'Damolândia', 9),
(960, 'Davinópolis', 9),
(961, 'Diorama', 9),
(962, 'Divinópolis de Goiás', 9),
(963, 'Doverlândia', 9),
(964, 'Edealina', 9),
(965, 'Edéia', 9),
(966, 'Estrela do Norte', 9),
(967, 'Faina', 9),
(968, 'Fazenda Nova', 9),
(969, 'Firminópolis', 9),
(970, 'Flores de Goiás', 9),
(971, 'Formosa', 9),
(972, 'Formoso', 9),
(973, 'Gameleira de Goiás', 9),
(974, 'Goianápolis', 9),
(975, 'Goiandira', 9),
(976, 'Goianésia', 9),
(977, 'Goiânia', 9),
(978, 'Goianira', 9),
(979, 'Goiás', 9),
(980, 'Goiatuba', 9),
(981, 'Gouvelândia', 9),
(982, 'Guapó', 9),
(983, 'Guaraíta', 9),
(984, 'Guarani de Goiás', 9),
(985, 'Guarinos', 9),
(986, 'Heitoraí', 9),
(987, 'Hidrolândia', 9),
(988, 'Hidrolina', 9),
(989, 'Iaciara', 9),
(990, 'Inaciolândia', 9),
(991, 'Indiara', 9),
(992, 'Inhumas', 9),
(993, 'Ipameri', 9),
(994, 'Ipiranga de Goiás', 9),
(995, 'Iporá', 9),
(996, 'Israelândia', 9),
(997, 'Itaberaí', 9),
(998, 'Itaguari', 9),
(999, 'Itaguaru', 9),
(1000, 'Itajá', 9),
(1001, 'Itapaci', 9),
(1002, 'Itapirapuã', 9),
(1003, 'Itapuranga', 9),
(1004, 'Itarumã', 9),
(1005, 'Itauçu', 9),
(1006, 'Itumbiara', 9),
(1007, 'Ivolândia', 9),
(1008, 'Jandaia', 9),
(1009, 'Jaraguá', 9),
(1010, 'Jataí', 9),
(1011, 'Jaupaci', 9),
(1012, 'Jesúpolis', 9),
(1013, 'Joviânia', 9),
(1014, 'Jussara', 9),
(1015, 'Lagoa Santa', 9),
(1016, 'Leopoldo de Bulhões', 9),
(1017, 'Luziânia', 9),
(1018, 'Mairipotaba', 9),
(1019, 'Mambaí', 9),
(1020, 'Mara Rosa', 9),
(1021, 'Marzagão', 9),
(1022, 'Matrinchã', 9),
(1023, 'Maurilândia', 9),
(1024, 'Mimoso de Goiás', 9),
(1025, 'Minaçu', 9),
(1026, 'Mineiros', 9),
(1027, 'Moiporá', 9),
(1028, 'Monte Alegre de Goiás', 9),
(1029, 'Montes Claros de Goiás', 9),
(1030, 'Montividiu', 9),
(1031, 'Montividiu do Norte', 9),
(1032, 'Morrinhos', 9),
(1033, 'Morro Agudo de Goiás', 9),
(1034, 'Mossâmedes', 9),
(1035, 'Mozarlândia', 9),
(1036, 'Mundo Novo', 9),
(1037, 'Mutunópolis', 9),
(1038, 'Nazário', 9),
(1039, 'Nerópolis', 9),
(1040, 'Niquelândia', 9),
(1041, 'Nova América', 9),
(1042, 'Nova Aurora', 9),
(1043, 'Nova Crixás', 9),
(1044, 'Nova Glória', 9),
(1045, 'Nova Iguaçu de Goiás', 9),
(1046, 'Nova Roma', 9),
(1047, 'Nova Veneza', 9),
(1048, 'Novo Brasil', 9),
(1049, 'Novo Gama', 9),
(1050, 'Novo Planalto', 9),
(1051, 'Orizona', 9),
(1052, 'Ouro Verde de Goiás', 9),
(1053, 'Ouvidor', 9),
(1054, 'Padre Bernardo', 9),
(1055, 'Palestina de Goiás', 9),
(1056, 'Palmeiras de Goiás', 9),
(1057, 'Palmelo', 9),
(1058, 'Palminópolis', 9),
(1059, 'Panamá', 9),
(1060, 'Paranaiguara', 9),
(1061, 'Paraúna', 9),
(1062, 'Perolândia', 9),
(1063, 'Petrolina de Goiás', 9),
(1064, 'Pilar de Goiás', 9),
(1065, 'Piracanjuba', 9),
(1066, 'Piranhas', 9),
(1067, 'Pirenópolis', 9),
(1068, 'Pires do Rio', 9),
(1069, 'Planaltina', 9),
(1070, 'Pontalina', 9),
(1071, 'Porangatu', 9),
(1072, 'Porteirão', 9),
(1073, 'Portelândia', 9),
(1074, 'Posse', 9),
(1075, 'Professor Jamil', 9),
(1076, 'Quirinópolis', 9),
(1077, 'Rialma', 9),
(1078, 'Rianápolis', 9),
(1079, 'Rio Quente', 9),
(1080, 'Rio Verde', 9),
(1081, 'Rubiataba', 9),
(1082, 'Sanclerlândia', 9),
(1083, 'Santa Bárbara de Goiás', 9),
(1084, 'Santa Cruz de Goiás', 9),
(1085, 'Santa Fé de Goiás', 9),
(1086, 'Santa Helena de Goiás', 9),
(1087, 'Santa Isabel', 9),
(1088, 'Santa Rita do Araguaia', 9),
(1089, 'Santa Rita do Novo Destino', 9),
(1090, 'Santa Rosa de Goiás', 9),
(1091, 'Santa Tereza de Goiás', 9),
(1092, 'Santa Terezinha de Goiás', 9),
(1093, 'Santo Antônio da Barra', 9),
(1094, 'Santo Antônio de Goiás', 9),
(1095, 'Santo Antônio do Descoberto', 9),
(1096, 'São Domingos', 9),
(1097, 'São Francisco de Goiás', 9),
(1098, 'São João d`Aliança', 9),
(1099, 'São João da Paraúna', 9),
(1100, 'São Luís de Montes Belos', 9),
(1101, 'São Luíz do Norte', 9),
(1102, 'São Miguel do Araguaia', 9),
(1103, 'São Miguel do Passa Quatro', 9),
(1104, 'São Patrício', 9),
(1105, 'São Simão', 9),
(1106, 'Senador Canedo', 9),
(1107, 'Serranópolis', 9),
(1108, 'Silvânia', 9),
(1109, 'Simolândia', 9),
(1110, 'Sítio d`Abadia', 9),
(1111, 'Taquaral de Goiás', 9),
(1112, 'Teresina de Goiás', 9),
(1113, 'Terezópolis de Goiás', 9),
(1114, 'Três Ranchos', 9),
(1115, 'Trindade', 9),
(1116, 'Trombas', 9),
(1117, 'Turvânia', 9),
(1118, 'Turvelândia', 9),
(1119, 'Uirapuru', 9),
(1120, 'Uruaçu', 9),
(1121, 'Uruana', 9),
(1122, 'Urutaí', 9),
(1123, 'Valparaíso de Goiás', 9),
(1124, 'Varjão', 9),
(1125, 'Vianópolis', 9),
(1126, 'Vicentinópolis', 9),
(1127, 'Vila Boa', 9),
(1128, 'Vila Propício', 9),
(1129, 'Açailândia', 10),
(1130, 'Afonso Cunha', 10),
(1131, 'Água Doce do Maranhão', 10),
(1132, 'Alcântara', 10),
(1133, 'Aldeias Altas', 10),
(1134, 'Altamira do Maranhão', 10),
(1135, 'Alto Alegre do Maranhão', 10),
(1136, 'Alto Alegre do Pindaré', 10),
(1137, 'Alto Parnaíba', 10),
(1138, 'Amapá do Maranhão', 10),
(1139, 'Amarante do Maranhão', 10),
(1140, 'Anajatuba', 10),
(1141, 'Anapurus', 10),
(1142, 'Apicum-Açu', 10),
(1143, 'Araguanã', 10),
(1144, 'Araioses', 10),
(1145, 'Arame', 10),
(1146, 'Arari', 10),
(1147, 'Axixá', 10),
(1148, 'Bacabal', 10),
(1149, 'Bacabeira', 10),
(1150, 'Bacuri', 10),
(1151, 'Bacurituba', 10),
(1152, 'Balsas', 10),
(1153, 'Barão de Grajaú', 10),
(1154, 'Barra do Corda', 10),
(1155, 'Barreirinhas', 10),
(1156, 'Bela Vista do Maranhão', 10),
(1157, 'Belágua', 10),
(1158, 'Benedito Leite', 10),
(1159, 'Bequimão', 10),
(1160, 'Bernardo do Mearim', 10),
(1161, 'Boa Vista do Gurupi', 10),
(1162, 'Bom Jardim', 10),
(1163, 'Bom Jesus das Selvas', 10),
(1164, 'Bom Lugar', 10),
(1165, 'Brejo', 10),
(1166, 'Brejo de Areia', 10),
(1167, 'Buriti', 10),
(1168, 'Buriti Bravo', 10),
(1169, 'Buriticupu', 10),
(1170, 'Buritirana', 10),
(1171, 'Cachoeira Grande', 10),
(1172, 'Cajapió', 10),
(1173, 'Cajari', 10),
(1174, 'Campestre do Maranhão', 10),
(1175, 'Cândido Mendes', 10),
(1176, 'Cantanhede', 10),
(1177, 'Capinzal do Norte', 10),
(1178, 'Carolina', 10),
(1179, 'Carutapera', 10),
(1180, 'Caxias', 10),
(1181, 'Cedral', 10),
(1182, 'Central do Maranhão', 10),
(1183, 'Centro do Guilherme', 10),
(1184, 'Centro Novo do Maranhão', 10),
(1185, 'Chapadinha', 10),
(1186, 'Cidelândia', 10),
(1187, 'Codó', 10),
(1188, 'Coelho Neto', 10),
(1189, 'Colinas', 10),
(1190, 'Conceição do Lago-Açu', 10),
(1191, 'Coroatá', 10),
(1192, 'Cururupu', 10),
(1193, 'Davinópolis', 10),
(1194, 'Dom Pedro', 10),
(1195, 'Duque Bacelar', 10),
(1196, 'Esperantinópolis', 10),
(1197, 'Estreito', 10),
(1198, 'Feira Nova do Maranhão', 10),
(1199, 'Fernando Falcão', 10),
(1200, 'Formosa da Serra Negra', 10),
(1201, 'Fortaleza dos Nogueiras', 10),
(1202, 'Fortuna', 10),
(1203, 'Godofredo Viana', 10),
(1204, 'Gonçalves Dias', 10),
(1205, 'Governador Archer', 10),
(1206, 'Governador Edison Lobão', 10),
(1207, 'Governador Eugênio Barros', 10),
(1208, 'Governador Luiz Rocha', 10),
(1209, 'Governador Newton Bello', 10),
(1210, 'Governador Nunes Freire', 10),
(1211, 'Graça Aranha', 10),
(1212, 'Grajaú', 10),
(1213, 'Guimarães', 10),
(1214, 'Humberto de Campos', 10),
(1215, 'Icatu', 10),
(1216, 'Igarapé do Meio', 10),
(1217, 'Igarapé Grande', 10),
(1218, 'Imperatriz', 10),
(1219, 'Itaipava do Grajaú', 10),
(1220, 'Itapecuru Mirim', 10),
(1221, 'Itinga do Maranhão', 10),
(1222, 'Jatobá', 10),
(1223, 'Jenipapo dos Vieiras', 10),
(1224, 'João Lisboa', 10),
(1225, 'Joselândia', 10),
(1226, 'Junco do Maranhão', 10),
(1227, 'Lago da Pedra', 10),
(1228, 'Lago do Junco', 10),
(1229, 'Lago dos Rodrigues', 10),
(1230, 'Lago Verde', 10),
(1231, 'Lagoa do Mato', 10),
(1232, 'Lagoa Grande do Maranhão', 10),
(1233, 'Lajeado Novo', 10),
(1234, 'Lima Campos', 10),
(1235, 'Loreto', 10),
(1236, 'Luís Domingues', 10),
(1237, 'Magalhães de Almeida', 10),
(1238, 'Maracaçumé', 10),
(1239, 'Marajá do Sena', 10),
(1240, 'Maranhãozinho', 10),
(1241, 'Mata Roma', 10),
(1242, 'Matinha', 10),
(1243, 'Matões', 10),
(1244, 'Matões do Norte', 10),
(1245, 'Milagres do Maranhão', 10),
(1246, 'Mirador', 10),
(1247, 'Miranda do Norte', 10),
(1248, 'Mirinzal', 10),
(1249, 'Monção', 10),
(1250, 'Montes Altos', 10),
(1251, 'Morros', 10),
(1252, 'Nina Rodrigues', 10),
(1253, 'Nova Colinas', 10),
(1254, 'Nova Iorque', 10),
(1255, 'Nova Olinda do Maranhão', 10),
(1256, 'Olho d`Água das Cunhãs', 10),
(1257, 'Olinda Nova do Maranhão', 10),
(1258, 'Paço do Lumiar', 10),
(1259, 'Palmeirândia', 10),
(1260, 'Paraibano', 10),
(1261, 'Parnarama', 10),
(1262, 'Passagem Franca', 10),
(1263, 'Pastos Bons', 10),
(1264, 'Paulino Neves', 10),
(1265, 'Paulo Ramos', 10),
(1266, 'Pedreiras', 10),
(1267, 'Pedro do Rosário', 10),
(1268, 'Penalva', 10),
(1269, 'Peri Mirim', 10),
(1270, 'Peritoró', 10),
(1271, 'Pindaré-Mirim', 10),
(1272, 'Pinheiro', 10),
(1273, 'Pio XII', 10),
(1274, 'Pirapemas', 10),
(1275, 'Poção de Pedras', 10),
(1276, 'Porto Franco', 10),
(1277, 'Porto Rico do Maranhão', 10),
(1278, 'Presidente Dutra', 10),
(1279, 'Presidente Juscelino', 10),
(1280, 'Presidente Médici', 10),
(1281, 'Presidente Sarney', 10),
(1282, 'Presidente Vargas', 10),
(1283, 'Primeira Cruz', 10),
(1284, 'Raposa', 10),
(1285, 'Riachão', 10),
(1286, 'Ribamar Fiquene', 10),
(1287, 'Rosário', 10),
(1288, 'Sambaíba', 10),
(1289, 'Santa Filomena do Maranhão', 10),
(1290, 'Santa Helena', 10),
(1291, 'Santa Inês', 10),
(1292, 'Santa Luzia', 10),
(1293, 'Santa Luzia do Paruá', 10),
(1294, 'Santa Quitéria do Maranhão', 10),
(1295, 'Santa Rita', 10),
(1296, 'Santana do Maranhão', 10),
(1297, 'Santo Amaro do Maranhão', 10),
(1298, 'Santo Antônio dos Lopes', 10),
(1299, 'São Benedito do Rio Preto', 10),
(1300, 'São Bento', 10),
(1301, 'São Bernardo', 10),
(1302, 'São Domingos do Azeitão', 10),
(1303, 'São Domingos do Maranhão', 10),
(1304, 'São Félix de Balsas', 10),
(1305, 'São Francisco do Brejão', 10),
(1306, 'São Francisco do Maranhão', 10),
(1307, 'São João Batista', 10),
(1308, 'São João do Carú', 10),
(1309, 'São João do Paraíso', 10),
(1310, 'São João do Soter', 10),
(1311, 'São João dos Patos', 10),
(1312, 'São José de Ribamar', 10),
(1313, 'São José dos Basílios', 10),
(1314, 'São Luís', 10),
(1315, 'São Luís Gonzaga do Maranhão', 10),
(1316, 'São Mateus do Maranhão', 10),
(1317, 'São Pedro da Água Branca', 10),
(1318, 'São Pedro dos Crentes', 10),
(1319, 'São Raimundo das Mangabeiras', 10),
(1320, 'São Raimundo do Doca Bezerra', 10),
(1321, 'São Roberto', 10),
(1322, 'São Vicente Ferrer', 10),
(1323, 'Satubinha', 10),
(1324, 'Senador Alexandre Costa', 10),
(1325, 'Senador La Rocque', 10),
(1326, 'Serrano do Maranhão', 10),
(1327, 'Sítio Novo', 10),
(1328, 'Sucupira do Norte', 10),
(1329, 'Sucupira do Riachão', 10),
(1330, 'Tasso Fragoso', 10),
(1331, 'Timbiras', 10),
(1332, 'Timon', 10),
(1333, 'Trizidela do Vale', 10),
(1334, 'Tufilândia', 10),
(1335, 'Tuntum', 10),
(1336, 'Turiaçu', 10),
(1337, 'Turilândia', 10),
(1338, 'Tutóia', 10),
(1339, 'Urbano Santos', 10),
(1340, 'Vargem Grande', 10),
(1341, 'Viana', 10),
(1342, 'Vila Nova dos Martírios', 10),
(1343, 'Vitória do Mearim', 10),
(1344, 'Vitorino Freire', 10),
(1345, 'Zé Doca', 10),
(1346, 'Acorizal', 13),
(1347, 'Água Boa', 13),
(1348, 'Alta Floresta', 13),
(1349, 'Alto Araguaia', 13),
(1350, 'Alto Boa Vista', 13),
(1351, 'Alto Garças', 13),
(1352, 'Alto Paraguai', 13),
(1353, 'Alto Taquari', 13),
(1354, 'Apiacás', 13),
(1355, 'Araguaiana', 13),
(1356, 'Araguainha', 13),
(1357, 'Araputanga', 13),
(1358, 'Arenápolis', 13),
(1359, 'Aripuanã', 13),
(1360, 'Barão de Melgaço', 13),
(1361, 'Barra do Bugres', 13),
(1362, 'Barra do Garças', 13),
(1363, 'Bom Jesus do Araguaia', 13),
(1364, 'Brasnorte', 13),
(1365, 'Cáceres', 13),
(1366, 'Campinápolis', 13),
(1367, 'Campo Novo do Parecis', 13),
(1368, 'Campo Verde', 13),
(1369, 'Campos de Júlio', 13),
(1370, 'Canabrava do Norte', 13),
(1371, 'Canarana', 13),
(1372, 'Carlinda', 13),
(1373, 'Castanheira', 13),
(1374, 'Chapada dos Guimarães', 13),
(1375, 'Cláudia', 13),
(1376, 'Cocalinho', 13),
(1377, 'Colíder', 13),
(1378, 'Colniza', 13),
(1379, 'Comodoro', 13),
(1380, 'Confresa', 13),
(1381, 'Conquista d`Oeste', 13),
(1382, 'Cotriguaçu', 13),
(1383, 'Cuiabá', 13),
(1384, 'Curvelândia', 13),
(1385, 'Curvelândia', 13),
(1386, 'Denise', 13),
(1387, 'Diamantino', 13),
(1388, 'Dom Aquino', 13),
(1389, 'Feliz Natal', 13),
(1390, 'Figueirópolis d`Oeste', 13),
(1391, 'Gaúcha do Norte', 13),
(1392, 'General Carneiro', 13),
(1393, 'Glória d`Oeste', 13),
(1394, 'Guarantã do Norte', 13),
(1395, 'Guiratinga', 13),
(1396, 'Indiavaí', 13),
(1397, 'Ipiranga do Norte', 13),
(1398, 'Itanhangá', 13),
(1399, 'Itaúba', 13),
(1400, 'Itiquira', 13),
(1401, 'Jaciara', 13),
(1402, 'Jangada', 13),
(1403, 'Jauru', 13),
(1404, 'Juara', 13),
(1405, 'Juína', 13),
(1406, 'Juruena', 13),
(1407, 'Juscimeira', 13),
(1408, 'Lambari d`Oeste', 13),
(1409, 'Lucas do Rio Verde', 13),
(1410, 'Luciára', 13),
(1411, 'Marcelândia', 13),
(1412, 'Matupá', 13),
(1413, 'Mirassol d`Oeste', 13),
(1414, 'Nobres', 13),
(1415, 'Nortelândia', 13),
(1416, 'Nossa Senhora do Livramento', 13),
(1417, 'Nova Bandeirantes', 13),
(1418, 'Nova Brasilândia', 13),
(1419, 'Nova Canaã do Norte', 13),
(1420, 'Nova Guarita', 13),
(1421, 'Nova Lacerda', 13),
(1422, 'Nova Marilândia', 13),
(1423, 'Nova Maringá', 13),
(1424, 'Nova Monte verde', 13),
(1425, 'Nova Mutum', 13),
(1426, 'Nova Olímpia', 13),
(1427, 'Nova Santa Helena', 13),
(1428, 'Nova Ubiratã', 13),
(1429, 'Nova Xavantina', 13),
(1430, 'Novo Horizonte do Norte', 13),
(1431, 'Novo Mundo', 13),
(1432, 'Novo Santo Antônio', 13),
(1433, 'Novo São Joaquim', 13),
(1434, 'Paranaíta', 13),
(1435, 'Paranatinga', 13),
(1436, 'Pedra Preta', 13),
(1437, 'Peixoto de Azevedo', 13),
(1438, 'Planalto da Serra', 13),
(1439, 'Poconé', 13),
(1440, 'Pontal do Araguaia', 13),
(1441, 'Ponte Branca', 13),
(1442, 'Pontes e Lacerda', 13),
(1443, 'Porto Alegre do Norte', 13),
(1444, 'Porto dos Gaúchos', 13),
(1445, 'Porto Esperidião', 13),
(1446, 'Porto Estrela', 13),
(1447, 'Poxoréo', 13),
(1448, 'Primavera do Leste', 13),
(1449, 'Querência', 13),
(1450, 'Reserva do Cabaçal', 13),
(1451, 'Ribeirão Cascalheira', 13),
(1452, 'Ribeirãozinho', 13),
(1453, 'Rio Branco', 13),
(1454, 'Rondolândia', 13),
(1455, 'Rondonópolis', 13),
(1456, 'Rosário Oeste', 13),
(1457, 'Salto do Céu', 13),
(1458, 'Santa Carmem', 13),
(1459, 'Santa Cruz do Xingu', 13),
(1460, 'Santa Rita do Trivelato', 13),
(1461, 'Santa Terezinha', 13),
(1462, 'Santo Afonso', 13),
(1463, 'Santo Antônio do Leste', 13),
(1464, 'Santo Antônio do Leverger', 13),
(1465, 'São Félix do Araguaia', 13),
(1466, 'São José do Povo', 13),
(1467, 'São José do Rio Claro', 13),
(1468, 'São José do Xingu', 13),
(1469, 'São José dos Quatro Marcos', 13),
(1470, 'São Pedro da Cipa', 13),
(1471, 'Sapezal', 13),
(1472, 'Serra Nova Dourada', 13),
(1473, 'Sinop', 13),
(1474, 'Sorriso', 13),
(1475, 'Tabaporã', 13),
(1476, 'Tangará da Serra', 13),
(1477, 'Tapurah', 13),
(1478, 'Terra Nova do Norte', 13),
(1479, 'Tesouro', 13),
(1480, 'Torixoréu', 13),
(1481, 'União do Sul', 13),
(1482, 'Vale de São Domingos', 13),
(1483, 'Várzea Grande', 13),
(1484, 'Vera', 13),
(1485, 'Vila Bela da Santíssima Trindade', 13),
(1486, 'Vila Rica', 13),
(1487, 'Água Clara', 12),
(1488, 'Alcinópolis', 12),
(1489, 'Amambaí', 12),
(1490, 'Anastácio', 12),
(1491, 'Anaurilândia', 12),
(1492, 'Angélica', 12),
(1493, 'Antônio João', 12),
(1494, 'Aparecida do Taboado', 12),
(1495, 'Aquidauana', 12),
(1496, 'Aral Moreira', 12),
(1497, 'Bandeirantes', 12),
(1498, 'Bataguassu', 12),
(1499, 'Bataiporã', 12),
(1500, 'Bela Vista', 12),
(1501, 'Bodoquena', 12),
(1502, 'Bonito', 12),
(1503, 'Brasilândia', 12),
(1504, 'Caarapó', 12),
(1505, 'Camapuã', 12),
(1506, 'Campo Grande', 12),
(1507, 'Caracol', 12),
(1508, 'Cassilândia', 12),
(1509, 'Chapadão do Sul', 12),
(1510, 'Corguinho', 12),
(1511, 'Coronel Sapucaia', 12),
(1512, 'Corumbá', 12),
(1513, 'Costa Rica', 12),
(1514, 'Coxim', 12),
(1515, 'Deodápolis', 12),
(1516, 'Dois Irmãos do Buriti', 12),
(1517, 'Douradina', 12),
(1518, 'Dourados', 12),
(1519, 'Eldorado', 12),
(1520, 'Fátima do Sul', 12),
(1521, 'Figueirão', 12),
(1522, 'Glória de Dourados', 12),
(1523, 'Guia Lopes da Laguna', 12),
(1524, 'Iguatemi', 12),
(1525, 'Inocência', 12),
(1526, 'Itaporã', 12),
(1527, 'Itaquiraí', 12),
(1528, 'Ivinhema', 12),
(1529, 'Japorã', 12),
(1530, 'Jaraguari', 12),
(1531, 'Jardim', 12),
(1532, 'Jateí', 12),
(1533, 'Juti', 12),
(1534, 'Ladário', 12),
(1535, 'Laguna Carapã', 12),
(1536, 'Maracaju', 12),
(1537, 'Miranda', 12),
(1538, 'Mundo Novo', 12),
(1539, 'Naviraí', 12),
(1540, 'Nioaque', 12),
(1541, 'Nova Alvorada do Sul', 12),
(1542, 'Nova Andradina', 12),
(1543, 'Novo Horizonte do Sul', 12),
(1544, 'Paranaíba', 12),
(1545, 'Paranhos', 12),
(1546, 'Pedro Gomes', 12),
(1547, 'Ponta Porã', 12),
(1548, 'Porto Murtinho', 12),
(1549, 'Ribas do Rio Pardo', 12),
(1550, 'Rio Brilhante', 12),
(1551, 'Rio Negro', 12),
(1552, 'Rio Verde de Mato Grosso', 12),
(1553, 'Rochedo', 12),
(1554, 'Santa Rita do Pardo', 12),
(1555, 'São Gabriel do Oeste', 12),
(1556, 'Selvíria', 12),
(1557, 'Sete Quedas', 12),
(1558, 'Sidrolândia', 12),
(1559, 'Sonora', 12),
(1560, 'Tacuru', 12),
(1561, 'Taquarussu', 12),
(1562, 'Terenos', 12),
(1563, 'Três Lagoas', 12),
(1564, 'Vicentina', 12),
(1565, 'Abadia dos Dourados', 11),
(1566, 'Abaeté', 11),
(1567, 'Abre Campo', 11),
(1568, 'Acaiaca', 11),
(1569, 'Açucena', 11),
(1570, 'Água Boa', 11),
(1571, 'Água Comprida', 11),
(1572, 'Aguanil', 11),
(1573, 'Águas Formosas', 11),
(1574, 'Águas Vermelhas', 11),
(1575, 'Aimorés', 11),
(1576, 'Aiuruoca', 11),
(1577, 'Alagoa', 11),
(1578, 'Albertina', 11),
(1579, 'Além Paraíba', 11),
(1580, 'Alfenas', 11),
(1581, 'Alfredo Vasconcelos', 11),
(1582, 'Almenara', 11),
(1583, 'Alpercata', 11),
(1584, 'Alpinópolis', 11),
(1585, 'Alterosa', 11),
(1586, 'Alto Caparaó', 11),
(1587, 'Alto Jequitibá', 11),
(1588, 'Alto Rio Doce', 11),
(1589, 'Alvarenga', 11),
(1590, 'Alvinópolis', 11),
(1591, 'Alvorada de Minas', 11),
(1592, 'Amparo do Serra', 11),
(1593, 'Andradas', 11),
(1594, 'Andrelândia', 11),
(1595, 'Angelândia', 11),
(1596, 'Antônio Carlos', 11),
(1597, 'Antônio Dias', 11),
(1598, 'Antônio Prado de Minas', 11),
(1599, 'Araçaí', 11),
(1600, 'Aracitaba', 11),
(1601, 'Araçuaí', 11),
(1602, 'Araguari', 11),
(1603, 'Arantina', 11),
(1604, 'Araponga', 11),
(1605, 'Araporã', 11),
(1606, 'Arapuá', 11),
(1607, 'Araújos', 11),
(1608, 'Araxá', 11),
(1609, 'Arceburgo', 11),
(1610, 'Arcos', 11),
(1611, 'Areado', 11),
(1612, 'Argirita', 11),
(1613, 'Aricanduva', 11),
(1614, 'Arinos', 11),
(1615, 'Astolfo Dutra', 11),
(1616, 'Ataléia', 11),
(1617, 'Augusto de Lima', 11),
(1618, 'Baependi', 11),
(1619, 'Baldim', 11),
(1620, 'Bambuí', 11),
(1621, 'Bandeira', 11),
(1622, 'Bandeira do Sul', 11),
(1623, 'Barão de Cocais', 11),
(1624, 'Barão de Monte Alto', 11),
(1625, 'Barbacena', 11),
(1626, 'Barra Longa', 11),
(1627, 'Barroso', 11),
(1628, 'Bela Vista de Minas', 11),
(1629, 'Belmiro Braga', 11),
(1630, 'Belo Horizonte', 11),
(1631, 'Belo Oriente', 11),
(1632, 'Belo Vale', 11),
(1633, 'Berilo', 11),
(1634, 'Berizal', 11),
(1635, 'Bertópolis', 11),
(1636, 'Betim', 11),
(1637, 'Bias Fortes', 11),
(1638, 'Bicas', 11),
(1639, 'Biquinhas', 11),
(1640, 'Boa Esperança', 11),
(1641, 'Bocaina de Minas', 11),
(1642, 'Bocaiúva', 11),
(1643, 'Bom Despacho', 11),
(1644, 'Bom Jardim de Minas', 11),
(1645, 'Bom Jesus da Penha', 11),
(1646, 'Bom Jesus do Amparo', 11),
(1647, 'Bom Jesus do Galho', 11),
(1648, 'Bom Repouso', 11),
(1649, 'Bom Sucesso', 11),
(1650, 'Bonfim', 11),
(1651, 'Bonfinópolis de Minas', 11),
(1652, 'Bonito de Minas', 11),
(1653, 'Borda da Mata', 11),
(1654, 'Botelhos', 11),
(1655, 'Botumirim', 11),
(1656, 'Brás Pires', 11),
(1657, 'Brasilândia de Minas', 11),
(1658, 'Brasília de Minas', 11),
(1659, 'Brasópolis', 11),
(1660, 'Braúnas', 11),
(1661, 'Brumadinho', 11),
(1662, 'Bueno Brandão', 11),
(1663, 'Buenópolis', 11),
(1664, 'Bugre', 11),
(1665, 'Buritis', 11),
(1666, 'Buritizeiro', 11),
(1667, 'Cabeceira Grande', 11),
(1668, 'Cabo Verde', 11),
(1669, 'Cachoeira da Prata', 11),
(1670, 'Cachoeira de Minas', 11),
(1671, 'Cachoeira de Pajeú', 11),
(1672, 'Cachoeira Dourada', 11),
(1673, 'Caetanópolis', 11),
(1674, 'Caeté', 11),
(1675, 'Caiana', 11),
(1676, 'Cajuri', 11),
(1677, 'Caldas', 11),
(1678, 'Camacho', 11),
(1679, 'Camanducaia', 11),
(1680, 'Cambuí', 11),
(1681, 'Cambuquira', 11),
(1682, 'Campanário', 11),
(1683, 'Campanha', 11),
(1684, 'Campestre', 11),
(1685, 'Campina Verde', 11),
(1686, 'Campo Azul', 11),
(1687, 'Campo Belo', 11),
(1688, 'Campo do Meio', 11),
(1689, 'Campo Florido', 11),
(1690, 'Campos Altos', 11),
(1691, 'Campos Gerais', 11),
(1692, 'Cana Verde', 11),
(1693, 'Canaã', 11),
(1694, 'Canápolis', 11),
(1695, 'Candeias', 11),
(1696, 'Cantagalo', 11),
(1697, 'Caparaó', 11),
(1698, 'Capela Nova', 11),
(1699, 'Capelinha', 11),
(1700, 'Capetinga', 11),
(1701, 'Capim Branco', 11),
(1702, 'Capinópolis', 11),
(1703, 'Capitão Andrade', 11),
(1704, 'Capitão Enéas', 11),
(1705, 'Capitólio', 11),
(1706, 'Caputira', 11),
(1707, 'Caraí', 11),
(1708, 'Caranaíba', 11),
(1709, 'Carandaí', 11),
(1710, 'Carangola', 11),
(1711, 'Caratinga', 11),
(1712, 'Carbonita', 11),
(1713, 'Careaçu', 11),
(1714, 'Carlos Chagas', 11),
(1715, 'Carmésia', 11),
(1716, 'Carmo da Cachoeira', 11),
(1717, 'Carmo da Mata', 11),
(1718, 'Carmo de Minas', 11),
(1719, 'Carmo do Cajuru', 11),
(1720, 'Carmo do Paranaíba', 11),
(1721, 'Carmo do Rio Claro', 11),
(1722, 'Carmópolis de Minas', 11),
(1723, 'Carneirinho', 11),
(1724, 'Carrancas', 11),
(1725, 'Carvalhópolis', 11),
(1726, 'Carvalhos', 11),
(1727, 'Casa Grande', 11),
(1728, 'Cascalho Rico', 11),
(1729, 'Cássia', 11),
(1730, 'Cataguases', 11),
(1731, 'Catas Altas', 11),
(1732, 'Catas Altas da Noruega', 11),
(1733, 'Catuji', 11),
(1734, 'Catuti', 11),
(1735, 'Caxambu', 11),
(1736, 'Cedro do Abaeté', 11),
(1737, 'Central de Minas', 11),
(1738, 'Centralina', 11),
(1739, 'Chácara', 11),
(1740, 'Chalé', 11),
(1741, 'Chapada do Norte', 11),
(1742, 'Chapada Gaúcha', 11),
(1743, 'Chiador', 11),
(1744, 'Cipotânea', 11),
(1745, 'Claraval', 11),
(1746, 'Claro dos Poções', 11),
(1747, 'Cláudio', 11),
(1748, 'Coimbra', 11),
(1749, 'Coluna', 11),
(1750, 'Comendador Gomes', 11),
(1751, 'Comercinho', 11),
(1752, 'Conceição da Aparecida', 11),
(1753, 'Conceição da Barra de Minas', 11),
(1754, 'Conceição das Alagoas', 11),
(1755, 'Conceição das Pedras', 11),
(1756, 'Conceição de Ipanema', 11),
(1757, 'Conceição do Mato Dentro', 11),
(1758, 'Conceição do Pará', 11),
(1759, 'Conceição do Rio Verde', 11),
(1760, 'Conceição dos Ouros', 11),
(1761, 'Cônego Marinho', 11),
(1762, 'Confins', 11),
(1763, 'Congonhal', 11),
(1764, 'Congonhas', 11),
(1765, 'Congonhas do Norte', 11),
(1766, 'Conquista', 11),
(1767, 'Conselheiro Lafaiete', 11),
(1768, 'Conselheiro Pena', 11),
(1769, 'Consolação', 11),
(1770, 'Contagem', 11),
(1771, 'Coqueiral', 11),
(1772, 'Coração de Jesus', 11),
(1773, 'Cordisburgo', 11),
(1774, 'Cordislândia', 11),
(1775, 'Corinto', 11),
(1776, 'Coroaci', 11),
(1777, 'Coromandel', 11),
(1778, 'Coronel Fabriciano', 11),
(1779, 'Coronel Murta', 11),
(1780, 'Coronel Pacheco', 11),
(1781, 'Coronel Xavier Chaves', 11),
(1782, 'Córrego Danta', 11),
(1783, 'Córrego do Bom Jesus', 11),
(1784, 'Córrego Fundo', 11),
(1785, 'Córrego Novo', 11),
(1786, 'Couto de Magalhães de Minas', 11),
(1787, 'Crisólita', 11),
(1788, 'Cristais', 11),
(1789, 'Cristália', 11),
(1790, 'Cristiano Otoni', 11),
(1791, 'Cristina', 11),
(1792, 'Crucilândia', 11),
(1793, 'Cruzeiro da Fortaleza', 11),
(1794, 'Cruzília', 11),
(1795, 'Cuparaque', 11),
(1796, 'Curral de Dentro', 11),
(1797, 'Curvelo', 11),
(1798, 'Datas', 11),
(1799, 'Delfim Moreira', 11),
(1800, 'Delfinópolis', 11),
(1801, 'Delta', 11),
(1802, 'Descoberto', 11),
(1803, 'Desterro de Entre Rios', 11),
(1804, 'Desterro do Melo', 11),
(1805, 'Diamantina', 11),
(1806, 'Diogo de Vasconcelos', 11),
(1807, 'Dionísio', 11),
(1808, 'Divinésia', 11),
(1809, 'Divino', 11),
(1810, 'Divino das Laranjeiras', 11),
(1811, 'Divinolândia de Minas', 11),
(1812, 'Divinópolis', 11),
(1813, 'Divisa Alegre', 11),
(1814, 'Divisa Nova', 11),
(1815, 'Divisópolis', 11),
(1816, 'Dom Bosco', 11),
(1817, 'Dom Cavati', 11),
(1818, 'Dom Joaquim', 11),
(1819, 'Dom Silvério', 11),
(1820, 'Dom Viçoso', 11),
(1821, 'Dona Eusébia', 11),
(1822, 'Dores de Campos', 11),
(1823, 'Dores de Guanhães', 11),
(1824, 'Dores do Indaiá', 11),
(1825, 'Dores do Turvo', 11),
(1826, 'Doresópolis', 11),
(1827, 'Douradoquara', 11),
(1828, 'Durandé', 11),
(1829, 'Elói Mendes', 11),
(1830, 'Engenheiro Caldas', 11),
(1831, 'Engenheiro Navarro', 11),
(1832, 'Entre Folhas', 11),
(1833, 'Entre Rios de Minas', 11),
(1834, 'Ervália', 11),
(1835, 'Esmeraldas', 11),
(1836, 'Espera Feliz', 11),
(1837, 'Espinosa', 11),
(1838, 'Espírito Santo do Dourado', 11),
(1839, 'Estiva', 11),
(1840, 'Estrela Dalva', 11),
(1841, 'Estrela do Indaiá', 11),
(1842, 'Estrela do Sul', 11),
(1843, 'Eugenópolis', 11),
(1844, 'Ewbank da Câmara', 11),
(1845, 'Extrema', 11),
(1846, 'Fama', 11),
(1847, 'Faria Lemos', 11),
(1848, 'Felício dos Santos', 11),
(1849, 'Felisburgo', 11),
(1850, 'Felixlândia', 11),
(1851, 'Fernandes Tourinho', 11),
(1852, 'Ferros', 11),
(1853, 'Fervedouro', 11),
(1854, 'Florestal', 11),
(1855, 'Formiga', 11),
(1856, 'Formoso', 11),
(1857, 'Fortaleza de Minas', 11),
(1858, 'Fortuna de Minas', 11),
(1859, 'Francisco Badaró', 11),
(1860, 'Francisco Dumont', 11),
(1861, 'Francisco Sá', 11),
(1862, 'Franciscópolis', 11),
(1863, 'Frei Gaspar', 11),
(1864, 'Frei Inocêncio', 11),
(1865, 'Frei Lagonegro', 11),
(1866, 'Fronteira', 11),
(1867, 'Fronteira dos Vales', 11),
(1868, 'Fruta de Leite', 11),
(1869, 'Frutal', 11),
(1870, 'Funilândia', 11),
(1871, 'Galiléia', 11),
(1872, 'Gameleiras', 11),
(1873, 'Glaucilândia', 11),
(1874, 'Goiabeira', 11),
(1875, 'Goianá', 11),
(1876, 'Gonçalves', 11),
(1877, 'Gonzaga', 11),
(1878, 'Gouveia', 11),
(1879, 'Governador Valadares', 11),
(1880, 'Grão Mogol', 11),
(1881, 'Grupiara', 11),
(1882, 'Guanhães', 11),
(1883, 'Guapé', 11),
(1884, 'Guaraciaba', 11),
(1885, 'Guaraciama', 11),
(1886, 'Guaranésia', 11),
(1887, 'Guarani', 11),
(1888, 'Guarará', 11),
(1889, 'Guarda-Mor', 11),
(1890, 'Guaxupé', 11),
(1891, 'Guidoval', 11),
(1892, 'Guimarânia', 11),
(1893, 'Guiricema', 11),
(1894, 'Gurinhatã', 11),
(1895, 'Heliodora', 11),
(1896, 'Iapu', 11),
(1897, 'Ibertioga', 11),
(1898, 'Ibiá', 11),
(1899, 'Ibiaí', 11),
(1900, 'Ibiracatu', 11),
(1901, 'Ibiraci', 11),
(1902, 'Ibirité', 11),
(1903, 'Ibitiúra de Minas', 11),
(1904, 'Ibituruna', 11),
(1905, 'Icaraí de Minas', 11),
(1906, 'Igarapé', 11),
(1907, 'Igaratinga', 11),
(1908, 'Iguatama', 11),
(1909, 'Ijaci', 11),
(1910, 'Ilicínea', 11),
(1911, 'Imbé de Minas', 11),
(1912, 'Inconfidentes', 11),
(1913, 'Indaiabira', 11),
(1914, 'Indianópolis', 11),
(1915, 'Ingaí', 11),
(1916, 'Inhapim', 11),
(1917, 'Inhaúma', 11),
(1918, 'Inimutaba', 11),
(1919, 'Ipaba', 11),
(1920, 'Ipanema', 11),
(1921, 'Ipatinga', 11),
(1922, 'Ipiaçu', 11),
(1923, 'Ipuiúna', 11),
(1924, 'Iraí de Minas', 11),
(1925, 'Itabira', 11),
(1926, 'Itabirinha de Mantena', 11),
(1927, 'Itabirito', 11),
(1928, 'Itacambira', 11),
(1929, 'Itacarambi', 11),
(1930, 'Itaguara', 11),
(1931, 'Itaipé', 11),
(1932, 'Itajubá', 11),
(1933, 'Itamarandiba', 11),
(1934, 'Itamarati de Minas', 11),
(1935, 'Itambacuri', 11),
(1936, 'Itambé do Mato Dentro', 11),
(1937, 'Itamogi', 11),
(1938, 'Itamonte', 11),
(1939, 'Itanhandu', 11),
(1940, 'Itanhomi', 11),
(1941, 'Itaobim', 11),
(1942, 'Itapagipe', 11),
(1943, 'Itapecerica', 11),
(1944, 'Itapeva', 11),
(1945, 'Itatiaiuçu', 11),
(1946, 'Itaú de Minas', 11),
(1947, 'Itaúna', 11),
(1948, 'Itaverava', 11),
(1949, 'Itinga', 11),
(1950, 'Itueta', 11),
(1951, 'Ituiutaba', 11),
(1952, 'Itumirim', 11),
(1953, 'Iturama', 11),
(1954, 'Itutinga', 11),
(1955, 'Jaboticatubas', 11),
(1956, 'Jacinto', 11),
(1957, 'Jacuí', 11),
(1958, 'Jacutinga', 11),
(1959, 'Jaguaraçu', 11),
(1960, 'Jaíba', 11),
(1961, 'Jampruca', 11),
(1962, 'Janaúba', 11),
(1963, 'Januária', 11),
(1964, 'Japaraíba', 11),
(1965, 'Japonvar', 11),
(1966, 'Jeceaba', 11),
(1967, 'Jenipapo de Minas', 11),
(1968, 'Jequeri', 11),
(1969, 'Jequitaí', 11),
(1970, 'Jequitibá', 11),
(1971, 'Jequitinhonha', 11),
(1972, 'Jesuânia', 11),
(1973, 'Joaíma', 11),
(1974, 'Joanésia', 11),
(1975, 'João Monlevade', 11),
(1976, 'João Pinheiro', 11),
(1977, 'Joaquim Felício', 11),
(1978, 'Jordânia', 11),
(1979, 'José Gonçalves de Minas', 11),
(1980, 'José Raydan', 11),
(1981, 'Josenópolis', 11),
(1982, 'Juatuba', 11),
(1983, 'Juiz de Fora', 11),
(1984, 'Juramento', 11),
(1985, 'Juruaia', 11),
(1986, 'Juvenília', 11),
(1987, 'Ladainha', 11),
(1988, 'Lagamar', 11),
(1989, 'Lagoa da Prata', 11),
(1990, 'Lagoa dos Patos', 11),
(1991, 'Lagoa Dourada', 11),
(1992, 'Lagoa Formosa', 11),
(1993, 'Lagoa Grande', 11),
(1994, 'Lagoa Santa', 11),
(1995, 'Lajinha', 11),
(1996, 'Lambari', 11),
(1997, 'Lamim', 11),
(1998, 'Laranjal', 11),
(1999, 'Lassance', 11),
(2000, 'Lavras', 11),
(2001, 'Leandro Ferreira', 11),
(2002, 'Leme do Prado', 11),
(2003, 'Leopoldina', 11),
(2004, 'Liberdade', 11),
(2005, 'Lima Duarte', 11),
(2006, 'Limeira do Oeste', 11),
(2007, 'Lontra', 11),
(2008, 'Luisburgo', 11),
(2009, 'Luislândia', 11),
(2010, 'Luminárias', 11),
(2011, 'Luz', 11),
(2012, 'Machacalis', 11),
(2013, 'Machado', 11),
(2014, 'Madre de Deus de Minas', 11),
(2015, 'Malacacheta', 11),
(2016, 'Mamonas', 11),
(2017, 'Manga', 11),
(2018, 'Manhuaçu', 11),
(2019, 'Manhumirim', 11),
(2020, 'Mantena', 11),
(2021, 'Mar de Espanha', 11),
(2022, 'Maravilhas', 11),
(2023, 'Maria da Fé', 11),
(2024, 'Mariana', 11),
(2025, 'Marilac', 11),
(2026, 'Mário Campos', 11);
INSERT INTO `city` (`id`, `name`, `state`) VALUES
(2027, 'Maripá de Minas', 11),
(2028, 'Marliéria', 11),
(2029, 'Marmelópolis', 11),
(2030, 'Martinho Campos', 11),
(2031, 'Martins Soares', 11),
(2032, 'Mata Verde', 11),
(2033, 'Materlândia', 11),
(2034, 'Mateus Leme', 11),
(2035, 'Mathias Lobato', 11),
(2036, 'Matias Barbosa', 11),
(2037, 'Matias Cardoso', 11),
(2038, 'Matipó', 11),
(2039, 'Mato Verde', 11),
(2040, 'Matozinhos', 11),
(2041, 'Matutina', 11),
(2042, 'Medeiros', 11),
(2043, 'Medina', 11),
(2044, 'Mendes Pimentel', 11),
(2045, 'Mercês', 11),
(2046, 'Mesquita', 11),
(2047, 'Minas Novas', 11),
(2048, 'Minduri', 11),
(2049, 'Mirabela', 11),
(2050, 'Miradouro', 11),
(2051, 'Miraí', 11),
(2052, 'Miravânia', 11),
(2053, 'Moeda', 11),
(2054, 'Moema', 11),
(2055, 'Monjolos', 11),
(2056, 'Monsenhor Paulo', 11),
(2057, 'Montalvânia', 11),
(2058, 'Monte Alegre de Minas', 11),
(2059, 'Monte Azul', 11),
(2060, 'Monte Belo', 11),
(2061, 'Monte Carmelo', 11),
(2062, 'Monte Formoso', 11),
(2063, 'Monte Santo de Minas', 11),
(2064, 'Monte Sião', 11),
(2065, 'Montes Claros', 11),
(2066, 'Montezuma', 11),
(2067, 'Morada Nova de Minas', 11),
(2068, 'Morro da Garça', 11),
(2069, 'Morro do Pilar', 11),
(2070, 'Munhoz', 11),
(2071, 'Muriaé', 11),
(2072, 'Mutum', 11),
(2073, 'Muzambinho', 11),
(2074, 'Nacip Raydan', 11),
(2075, 'Nanuque', 11),
(2076, 'Naque', 11),
(2077, 'Natalândia', 11),
(2078, 'Natércia', 11),
(2079, 'Nazareno', 11),
(2080, 'Nepomuceno', 11),
(2081, 'Ninheira', 11),
(2082, 'Nova Belém', 11),
(2083, 'Nova Era', 11),
(2084, 'Nova Lima', 11),
(2085, 'Nova Módica', 11),
(2086, 'Nova Ponte', 11),
(2087, 'Nova Porteirinha', 11),
(2088, 'Nova Resende', 11),
(2089, 'Nova Serrana', 11),
(2090, 'Nova União', 11),
(2091, 'Novo Cruzeiro', 11),
(2092, 'Novo Oriente de Minas', 11),
(2093, 'Novorizonte', 11),
(2094, 'Olaria', 11),
(2095, 'Olhos-d`Água', 11),
(2096, 'Olímpio Noronha', 11),
(2097, 'Oliveira', 11),
(2098, 'Oliveira Fortes', 11),
(2099, 'Onça de Pitangui', 11),
(2100, 'Oratórios', 11),
(2101, 'Orizânia', 11),
(2102, 'Ouro Branco', 11),
(2103, 'Ouro Fino', 11),
(2104, 'Ouro Preto', 11),
(2105, 'Ouro Verde de Minas', 11),
(2106, 'Padre Carvalho', 11),
(2107, 'Padre Paraíso', 11),
(2108, 'Pai Pedro', 11),
(2109, 'Paineiras', 11),
(2110, 'Pains', 11),
(2111, 'Paiva', 11),
(2112, 'Palma', 11),
(2113, 'Palmópolis', 11),
(2114, 'Papagaios', 11),
(2115, 'Pará de Minas', 11),
(2116, 'Paracatu', 11),
(2117, 'Paraguaçu', 11),
(2118, 'Paraisópolis', 11),
(2119, 'Paraopeba', 11),
(2120, 'Passa Quatro', 11),
(2121, 'Passa Tempo', 11),
(2122, 'Passabém', 11),
(2123, 'Passa-Vinte', 11),
(2124, 'Passos', 11),
(2125, 'Patis', 11),
(2126, 'Patos de Minas', 11),
(2127, 'Patrocínio', 11),
(2128, 'Patrocínio do Muriaé', 11),
(2129, 'Paula Cândido', 11),
(2130, 'Paulistas', 11),
(2131, 'Pavão', 11),
(2132, 'Peçanha', 11),
(2133, 'Pedra Azul', 11),
(2134, 'Pedra Bonita', 11),
(2135, 'Pedra do Anta', 11),
(2136, 'Pedra do Indaiá', 11),
(2137, 'Pedra Dourada', 11),
(2138, 'Pedralva', 11),
(2139, 'Pedras de Maria da Cruz', 11),
(2140, 'Pedrinópolis', 11),
(2141, 'Pedro Leopoldo', 11),
(2142, 'Pedro Teixeira', 11),
(2143, 'Pequeri', 11),
(2144, 'Pequi', 11),
(2145, 'Perdigão', 11),
(2146, 'Perdizes', 11),
(2147, 'Perdões', 11),
(2148, 'Periquito', 11),
(2149, 'Pescador', 11),
(2150, 'Piau', 11),
(2151, 'Piedade de Caratinga', 11),
(2152, 'Piedade de Ponte Nova', 11),
(2153, 'Piedade do Rio Grande', 11),
(2154, 'Piedade dos Gerais', 11),
(2155, 'Pimenta', 11),
(2156, 'Pingo-d`Água', 11),
(2157, 'Pintópolis', 11),
(2158, 'Piracema', 11),
(2159, 'Pirajuba', 11),
(2160, 'Piranga', 11),
(2161, 'Piranguçu', 11),
(2162, 'Piranguinho', 11),
(2163, 'Pirapetinga', 11),
(2164, 'Pirapora', 11),
(2165, 'Piraúba', 11),
(2166, 'Pitangui', 11),
(2167, 'Piumhi', 11),
(2168, 'Planura', 11),
(2169, 'Poço Fundo', 11),
(2170, 'Poços de Caldas', 11),
(2171, 'Pocrane', 11),
(2172, 'Pompéu', 11),
(2173, 'Ponte Nova', 11),
(2174, 'Ponto Chique', 11),
(2175, 'Ponto dos Volantes', 11),
(2176, 'Porteirinha', 11),
(2177, 'Porto Firme', 11),
(2178, 'Poté', 11),
(2179, 'Pouso Alegre', 11),
(2180, 'Pouso Alto', 11),
(2181, 'Prados', 11),
(2182, 'Prata', 11),
(2183, 'Pratápolis', 11),
(2184, 'Pratinha', 11),
(2185, 'Presidente Bernardes', 11),
(2186, 'Presidente Juscelino', 11),
(2187, 'Presidente Kubitschek', 11),
(2188, 'Presidente Olegário', 11),
(2189, 'Prudente de Morais', 11),
(2190, 'Quartel Geral', 11),
(2191, 'Queluzito', 11),
(2192, 'Raposos', 11),
(2193, 'Raul Soares', 11),
(2194, 'Recreio', 11),
(2195, 'Reduto', 11),
(2196, 'Resende Costa', 11),
(2197, 'Resplendor', 11),
(2198, 'Ressaquinha', 11),
(2199, 'Riachinho', 11),
(2200, 'Riacho dos Machados', 11),
(2201, 'Ribeirão das Neves', 11),
(2202, 'Ribeirão Vermelho', 11),
(2203, 'Rio Acima', 11),
(2204, 'Rio Casca', 11),
(2205, 'Rio do Prado', 11),
(2206, 'Rio Doce', 11),
(2207, 'Rio Espera', 11),
(2208, 'Rio Manso', 11),
(2209, 'Rio Novo', 11),
(2210, 'Rio Paranaíba', 11),
(2211, 'Rio Pardo de Minas', 11),
(2212, 'Rio Piracicaba', 11),
(2213, 'Rio Pomba', 11),
(2214, 'Rio Preto', 11),
(2215, 'Rio Vermelho', 11),
(2216, 'Ritápolis', 11),
(2217, 'Rochedo de Minas', 11),
(2218, 'Rodeiro', 11),
(2219, 'Romaria', 11),
(2220, 'Rosário da Limeira', 11),
(2221, 'Rubelita', 11),
(2222, 'Rubim', 11),
(2223, 'Sabará', 11),
(2224, 'Sabinópolis', 11),
(2225, 'Sacramento', 11),
(2226, 'Salinas', 11),
(2227, 'Salto da Divisa', 11),
(2228, 'Santa Bárbara', 11),
(2229, 'Santa Bárbara do Leste', 11),
(2230, 'Santa Bárbara do Monte Verde', 11),
(2231, 'Santa Bárbara do Tugúrio', 11),
(2232, 'Santa Cruz de Minas', 11),
(2233, 'Santa Cruz de Salinas', 11),
(2234, 'Santa Cruz do Escalvado', 11),
(2235, 'Santa Efigênia de Minas', 11),
(2236, 'Santa Fé de Minas', 11),
(2237, 'Santa Helena de Minas', 11),
(2238, 'Santa Juliana', 11),
(2239, 'Santa Luzia', 11),
(2240, 'Santa Margarida', 11),
(2241, 'Santa Maria de Itabira', 11),
(2242, 'Santa Maria do Salto', 11),
(2243, 'Santa Maria do Suaçuí', 11),
(2244, 'Santa Rita de Caldas', 11),
(2245, 'Santa Rita de Ibitipoca', 11),
(2246, 'Santa Rita de Jacutinga', 11),
(2247, 'Santa Rita de Minas', 11),
(2248, 'Santa Rita do Itueto', 11),
(2249, 'Santa Rita do Sapucaí', 11),
(2250, 'Santa Rosa da Serra', 11),
(2251, 'Santa Vitória', 11),
(2252, 'Santana da Vargem', 11),
(2253, 'Santana de Cataguases', 11),
(2254, 'Santana de Pirapama', 11),
(2255, 'Santana do Deserto', 11),
(2256, 'Santana do Garambéu', 11),
(2257, 'Santana do Jacaré', 11),
(2258, 'Santana do Manhuaçu', 11),
(2259, 'Santana do Paraíso', 11),
(2260, 'Santana do Riacho', 11),
(2261, 'Santana dos Montes', 11),
(2262, 'Santo Antônio do Amparo', 11),
(2263, 'Santo Antônio do Aventureiro', 11),
(2264, 'Santo Antônio do Grama', 11),
(2265, 'Santo Antônio do Itambé', 11),
(2266, 'Santo Antônio do Jacinto', 11),
(2267, 'Santo Antônio do Monte', 11),
(2268, 'Santo Antônio do Retiro', 11),
(2269, 'Santo Antônio do Rio Abaixo', 11),
(2270, 'Santo Hipólito', 11),
(2271, 'Santos Dumont', 11),
(2272, 'São Bento Abade', 11),
(2273, 'São Brás do Suaçuí', 11),
(2274, 'São Domingos das Dores', 11),
(2275, 'São Domingos do Prata', 11),
(2276, 'São Félix de Minas', 11),
(2277, 'São Francisco', 11),
(2278, 'São Francisco de Paula', 11),
(2279, 'São Francisco de Sales', 11),
(2280, 'São Francisco do Glória', 11),
(2281, 'São Geraldo', 11),
(2282, 'São Geraldo da Piedade', 11),
(2283, 'São Geraldo do Baixio', 11),
(2284, 'São Gonçalo do Abaeté', 11),
(2285, 'São Gonçalo do Pará', 11),
(2286, 'São Gonçalo do Rio Abaixo', 11),
(2287, 'São Gonçalo do Rio Preto', 11),
(2288, 'São Gonçalo do Sapucaí', 11),
(2289, 'São Gotardo', 11),
(2290, 'São João Batista do Glória', 11),
(2291, 'São João da Lagoa', 11),
(2292, 'São João da Mata', 11),
(2293, 'São João da Ponte', 11),
(2294, 'São João das Missões', 11),
(2295, 'São João del Rei', 11),
(2296, 'São João do Manhuaçu', 11),
(2297, 'São João do Manteninha', 11),
(2298, 'São João do Oriente', 11),
(2299, 'São João do Pacuí', 11),
(2300, 'São João do Paraíso', 11),
(2301, 'São João Evangelista', 11),
(2302, 'São João Nepomuceno', 11),
(2303, 'São Joaquim de Bicas', 11),
(2304, 'São José da Barra', 11),
(2305, 'São José da Lapa', 11),
(2306, 'São José da Safira', 11),
(2307, 'São José da Varginha', 11),
(2308, 'São José do Alegre', 11),
(2309, 'São José do Divino', 11),
(2310, 'São José do Goiabal', 11),
(2311, 'São José do Jacuri', 11),
(2312, 'São José do Mantimento', 11),
(2313, 'São Lourenço', 11),
(2314, 'São Miguel do Anta', 11),
(2315, 'São Pedro da União', 11),
(2316, 'São Pedro do Suaçuí', 11),
(2317, 'São Pedro dos Ferros', 11),
(2318, 'São Romão', 11),
(2319, 'São Roque de Minas', 11),
(2320, 'São Sebastião da Bela Vista', 11),
(2321, 'São Sebastião da Vargem Alegre', 11),
(2322, 'São Sebastião do Anta', 11),
(2323, 'São Sebastião do Maranhão', 11),
(2324, 'São Sebastião do Oeste', 11),
(2325, 'São Sebastião do Paraíso', 11),
(2326, 'São Sebastião do Rio Preto', 11),
(2327, 'São Sebastião do Rio Verde', 11),
(2328, 'São Thomé das Letras', 11),
(2329, 'São Tiago', 11),
(2330, 'São Tomás de Aquino', 11),
(2331, 'São Vicente de Minas', 11),
(2332, 'Sapucaí-Mirim', 11),
(2333, 'Sardoá', 11),
(2334, 'Sarzedo', 11),
(2335, 'Sem-Peixe', 11),
(2336, 'Senador Amaral', 11),
(2337, 'Senador Cortes', 11),
(2338, 'Senador Firmino', 11),
(2339, 'Senador José Bento', 11),
(2340, 'Senador Modestino Gonçalves', 11),
(2341, 'Senhora de Oliveira', 11),
(2342, 'Senhora do Porto', 11),
(2343, 'Senhora dos Remédios', 11),
(2344, 'Sericita', 11),
(2345, 'Seritinga', 11),
(2346, 'Serra Azul de Minas', 11),
(2347, 'Serra da Saudade', 11),
(2348, 'Serra do Salitre', 11),
(2349, 'Serra dos Aimorés', 11),
(2350, 'Serrania', 11),
(2351, 'Serranópolis de Minas', 11),
(2352, 'Serranos', 11),
(2353, 'Serro', 11),
(2354, 'Sete Lagoas', 11),
(2355, 'Setubinha', 11),
(2356, 'Silveirânia', 11),
(2357, 'Silvianópolis', 11),
(2358, 'Simão Pereira', 11),
(2359, 'Simonésia', 11),
(2360, 'Sobrália', 11),
(2361, 'Soledade de Minas', 11),
(2362, 'Tabuleiro', 11),
(2363, 'Taiobeiras', 11),
(2364, 'Taparuba', 11),
(2365, 'Tapira', 11),
(2366, 'Tapiraí', 11),
(2367, 'Taquaraçu de Minas', 11),
(2368, 'Tarumirim', 11),
(2369, 'Teixeiras', 11),
(2370, 'Teófilo Otoni', 11),
(2371, 'Timóteo', 11),
(2372, 'Tiradentes', 11),
(2373, 'Tiros', 11),
(2374, 'Tocantins', 11),
(2375, 'Tocos do Moji', 11),
(2376, 'Toledo', 11),
(2377, 'Tombos', 11),
(2378, 'Três Corações', 11),
(2379, 'Três Marias', 11),
(2380, 'Três Pontas', 11),
(2381, 'Tumiritinga', 11),
(2382, 'Tupaciguara', 11),
(2383, 'Turmalina', 11),
(2384, 'Turvolândia', 11),
(2385, 'Ubá', 11),
(2386, 'Ubaí', 11),
(2387, 'Ubaporanga', 11),
(2388, 'Uberaba', 11),
(2389, 'Uberlândia', 11),
(2390, 'Umburatiba', 11),
(2391, 'Unaí', 11),
(2392, 'União de Minas', 11),
(2393, 'Uruana de Minas', 11),
(2394, 'Urucânia', 11),
(2395, 'Urucuia', 11),
(2396, 'Vargem Alegre', 11),
(2397, 'Vargem Bonita', 11),
(2398, 'Vargem Grande do Rio Pardo', 11),
(2399, 'Varginha', 11),
(2400, 'Varjão de Minas', 11),
(2401, 'Várzea da Palma', 11),
(2402, 'Varzelândia', 11),
(2403, 'Vazante', 11),
(2404, 'Verdelândia', 11),
(2405, 'Veredinha', 11),
(2406, 'Veríssimo', 11),
(2407, 'Vermelho Novo', 11),
(2408, 'Vespasiano', 11),
(2409, 'Viçosa', 11),
(2410, 'Vieiras', 11),
(2411, 'Virgem da Lapa', 11),
(2412, 'Virgínia', 11),
(2413, 'Virginópolis', 11),
(2414, 'Virgolândia', 11),
(2415, 'Visconde do Rio Branco', 11),
(2416, 'Volta Grande', 11),
(2417, 'Wenceslau Braz', 11),
(2418, 'Abaetetuba', 14),
(2419, 'Abel Figueiredo', 14),
(2420, 'Acará', 14),
(2421, 'Afuá', 14),
(2422, 'Água Azul do Norte', 14),
(2423, 'Alenquer', 14),
(2424, 'Almeirim', 14),
(2425, 'Altamira', 14),
(2426, 'Anajás', 14),
(2427, 'Ananindeua', 14),
(2428, 'Anapu', 14),
(2429, 'Augusto Corrêa', 14),
(2430, 'Aurora do Pará', 14),
(2431, 'Aveiro', 14),
(2432, 'Bagre', 14),
(2433, 'Baião', 14),
(2434, 'Bannach', 14),
(2435, 'Barcarena', 14),
(2436, 'Belém', 14),
(2437, 'Belterra', 14),
(2438, 'Benevides', 14),
(2439, 'Bom Jesus do Tocantins', 14),
(2440, 'Bonito', 14),
(2441, 'Bragança', 14),
(2442, 'Brasil Novo', 14),
(2443, 'Brejo Grande do Araguaia', 14),
(2444, 'Breu Branco', 14),
(2445, 'Breves', 14),
(2446, 'Bujaru', 14),
(2447, 'Cachoeira do Arari', 14),
(2448, 'Cachoeira do Piriá', 14),
(2449, 'Cametá', 14),
(2450, 'Canaã dos Carajás', 14),
(2451, 'Capanema', 14),
(2452, 'Capitão Poço', 14),
(2453, 'Castanhal', 14),
(2454, 'Chaves', 14),
(2455, 'Colares', 14),
(2456, 'Conceição do Araguaia', 14),
(2457, 'Concórdia do Pará', 14),
(2458, 'Cumaru do Norte', 14),
(2459, 'Curionópolis', 14),
(2460, 'Curralinho', 14),
(2461, 'Curuá', 14),
(2462, 'Curuçá', 14),
(2463, 'Dom Eliseu', 14),
(2464, 'Eldorado dos Carajás', 14),
(2465, 'Faro', 14),
(2466, 'Floresta do Araguaia', 14),
(2467, 'Garrafão do Norte', 14),
(2468, 'Goianésia do Pará', 14),
(2469, 'Gurupá', 14),
(2470, 'Igarapé-Açu', 14),
(2471, 'Igarapé-Miri', 14),
(2472, 'Inhangapi', 14),
(2473, 'Ipixuna do Pará', 14),
(2474, 'Irituia', 14),
(2475, 'Itaituba', 14),
(2476, 'Itupiranga', 14),
(2477, 'Jacareacanga', 14),
(2478, 'Jacundá', 14),
(2479, 'Juruti', 14),
(2480, 'Limoeiro do Ajuru', 14),
(2481, 'Mãe do Rio', 14),
(2482, 'Magalhães Barata', 14),
(2483, 'Marabá', 14),
(2484, 'Maracanã', 14),
(2485, 'Marapanim', 14),
(2486, 'Marituba', 14),
(2487, 'Medicilândia', 14),
(2488, 'Melgaço', 14),
(2489, 'Mocajuba', 14),
(2490, 'Moju', 14),
(2491, 'Monte Alegre', 14),
(2492, 'Muaná', 14),
(2493, 'Nova Esperança do Piriá', 14),
(2494, 'Nova Ipixuna', 14),
(2495, 'Nova Timboteua', 14),
(2496, 'Novo Progresso', 14),
(2497, 'Novo Repartimento', 14),
(2498, 'Óbidos', 14),
(2499, 'Oeiras do Pará', 14),
(2500, 'Oriximiná', 14),
(2501, 'Ourém', 14),
(2502, 'Ourilândia do Norte', 14),
(2503, 'Pacajá', 14),
(2504, 'Palestina do Pará', 14),
(2505, 'Paragominas', 14),
(2506, 'Parauapebas', 14),
(2507, 'Pau d`Arco', 14),
(2508, 'Peixe-Boi', 14),
(2509, 'Piçarra', 14),
(2510, 'Placas', 14),
(2511, 'Ponta de Pedras', 14),
(2512, 'Portel', 14),
(2513, 'Porto de Moz', 14),
(2514, 'Prainha', 14),
(2515, 'Primavera', 14),
(2516, 'Quatipuru', 14),
(2517, 'Redenção', 14),
(2518, 'Rio Maria', 14),
(2519, 'Rondon do Pará', 14),
(2520, 'Rurópolis', 14),
(2521, 'Salinópolis', 14),
(2522, 'Salvaterra', 14),
(2523, 'Santa Bárbara do Pará', 14),
(2524, 'Santa Cruz do Arari', 14),
(2525, 'Santa Isabel do Pará', 14),
(2526, 'Santa Luzia do Pará', 14),
(2527, 'Santa Maria das Barreiras', 14),
(2528, 'Santa Maria do Pará', 14),
(2529, 'Santana do Araguaia', 14),
(2530, 'Santarém', 14),
(2531, 'Santarém Novo', 14),
(2532, 'Santo Antônio do Tauá', 14),
(2533, 'São Caetano de Odivelas', 14),
(2534, 'São Domingos do Araguaia', 14),
(2535, 'São Domingos do Capim', 14),
(2536, 'São Félix do Xingu', 14),
(2537, 'São Francisco do Pará', 14),
(2538, 'São Geraldo do Araguaia', 14),
(2539, 'São João da Ponta', 14),
(2540, 'São João de Pirabas', 14),
(2541, 'São João do Araguaia', 14),
(2542, 'São Miguel do Guamá', 14),
(2543, 'São Sebastião da Boa Vista', 14),
(2544, 'Sapucaia', 14),
(2545, 'Senador José Porfírio', 14),
(2546, 'Soure', 14),
(2547, 'Tailândia', 14),
(2548, 'Terra Alta', 14),
(2549, 'Terra Santa', 14),
(2550, 'Tomé-Açu', 14),
(2551, 'Tracuateua', 14),
(2552, 'Trairão', 14),
(2553, 'Tucumã', 14),
(2554, 'Tucuruí', 14),
(2555, 'Ulianópolis', 14),
(2556, 'Uruará', 14),
(2557, 'Vigia', 14),
(2558, 'Viseu', 14),
(2559, 'Vitória do Xingu', 14),
(2560, 'Xinguara', 14),
(2561, 'Água Branca', 15),
(2562, 'Aguiar', 15),
(2563, 'Alagoa Grande', 15),
(2564, 'Alagoa Nova', 15),
(2565, 'Alagoinha', 15),
(2566, 'Alcantil', 15),
(2567, 'Algodão de Jandaíra', 15),
(2568, 'Alhandra', 15),
(2569, 'Amparo', 15),
(2570, 'Aparecida', 15),
(2571, 'Araçagi', 15),
(2572, 'Arara', 15),
(2573, 'Araruna', 15),
(2574, 'Areia', 15),
(2575, 'Areia de Baraúnas', 15),
(2576, 'Areial', 15),
(2577, 'Aroeiras', 15),
(2578, 'Assunção', 15),
(2579, 'Baía da Traição', 15),
(2580, 'Bananeiras', 15),
(2581, 'Baraúna', 15),
(2582, 'Barra de Santa Rosa', 15),
(2583, 'Barra de Santana', 15),
(2584, 'Barra de São Miguel', 15),
(2585, 'Bayeux', 15),
(2586, 'Belém', 15),
(2587, 'Belém do Brejo do Cruz', 15),
(2588, 'Bernardino Batista', 15),
(2589, 'Boa Ventura', 15),
(2590, 'Boa Vista', 15),
(2591, 'Bom Jesus', 15),
(2592, 'Bom Sucesso', 15),
(2593, 'Bonito de Santa Fé', 15),
(2594, 'Boqueirão', 15),
(2595, 'Borborema', 15),
(2596, 'Brejo do Cruz', 15),
(2597, 'Brejo dos Santos', 15),
(2598, 'Caaporã', 15),
(2599, 'Cabaceiras', 15),
(2600, 'Cabedelo', 15),
(2601, 'Cachoeira dos Índios', 15),
(2602, 'Cacimba de Areia', 15),
(2603, 'Cacimba de Dentro', 15),
(2604, 'Cacimbas', 15),
(2605, 'Caiçara', 15),
(2606, 'Cajazeiras', 15),
(2607, 'Cajazeirinhas', 15),
(2608, 'Caldas Brandão', 15),
(2609, 'Camalaú', 15),
(2610, 'Campina Grande', 15),
(2611, 'Campo de Santana', 15),
(2612, 'Capim', 15),
(2613, 'Caraúbas', 15),
(2614, 'Carrapateira', 15),
(2615, 'Casserengue', 15),
(2616, 'Catingueira', 15),
(2617, 'Catolé do Rocha', 15),
(2618, 'Caturité', 15),
(2619, 'Conceição', 15),
(2620, 'Condado', 15),
(2621, 'Conde', 15),
(2622, 'Congo', 15),
(2623, 'Coremas', 15),
(2624, 'Coxixola', 15),
(2625, 'Cruz do Espírito Santo', 15),
(2626, 'Cubati', 15),
(2627, 'Cuité', 15),
(2628, 'Cuité de Mamanguape', 15),
(2629, 'Cuitegi', 15),
(2630, 'Curral de Cima', 15),
(2631, 'Curral Velho', 15),
(2632, 'Damião', 15),
(2633, 'Desterro', 15),
(2634, 'Diamante', 15),
(2635, 'Dona Inês', 15),
(2636, 'Duas Estradas', 15),
(2637, 'Emas', 15),
(2638, 'Esperança', 15),
(2639, 'Fagundes', 15),
(2640, 'Frei Martinho', 15),
(2641, 'Gado Bravo', 15),
(2642, 'Guarabira', 15),
(2643, 'Gurinhém', 15),
(2644, 'Gurjão', 15),
(2645, 'Ibiara', 15),
(2646, 'Igaracy', 15),
(2647, 'Imaculada', 15),
(2648, 'Ingá', 15),
(2649, 'Itabaiana', 15),
(2650, 'Itaporanga', 15),
(2651, 'Itapororoca', 15),
(2652, 'Itatuba', 15),
(2653, 'Jacaraú', 15),
(2654, 'Jericó', 15),
(2655, 'João Pessoa', 15),
(2656, 'Juarez Távora', 15),
(2657, 'Juazeirinho', 15),
(2658, 'Junco do Seridó', 15),
(2659, 'Juripiranga', 15),
(2660, 'Juru', 15),
(2661, 'Lagoa', 15),
(2662, 'Lagoa de Dentro', 15),
(2663, 'Lagoa Seca', 15),
(2664, 'Lastro', 15),
(2665, 'Livramento', 15),
(2666, 'Logradouro', 15),
(2667, 'Lucena', 15),
(2668, 'Mãe d`Água', 15),
(2669, 'Malta', 15),
(2670, 'Mamanguape', 15),
(2671, 'Manaíra', 15),
(2672, 'Marcação', 15),
(2673, 'Mari', 15),
(2674, 'Marizópolis', 15),
(2675, 'Massaranduba', 15),
(2676, 'Mataraca', 15),
(2677, 'Matinhas', 15),
(2678, 'Mato Grosso', 15),
(2679, 'Maturéia', 15),
(2680, 'Mogeiro', 15),
(2681, 'Montadas', 15),
(2682, 'Monte Horebe', 15),
(2683, 'Monteiro', 15),
(2684, 'Mulungu', 15),
(2685, 'Natuba', 15),
(2686, 'Nazarezinho', 15),
(2687, 'Nova Floresta', 15),
(2688, 'Nova Olinda', 15),
(2689, 'Nova Palmeira', 15),
(2690, 'Olho d`Água', 15),
(2691, 'Olivedos', 15),
(2692, 'Ouro Velho', 15),
(2693, 'Parari', 15),
(2694, 'Passagem', 15),
(2695, 'Patos', 15),
(2696, 'Paulista', 15),
(2697, 'Pedra Branca', 15),
(2698, 'Pedra Lavrada', 15),
(2699, 'Pedras de Fogo', 15),
(2700, 'Pedro Régis', 15),
(2701, 'Piancó', 15),
(2702, 'Picuí', 15),
(2703, 'Pilar', 15),
(2704, 'Pilões', 15),
(2705, 'Pilõezinhos', 15),
(2706, 'Pirpirituba', 15),
(2707, 'Pitimbu', 15),
(2708, 'Pocinhos', 15),
(2709, 'Poço Dantas', 15),
(2710, 'Poço de José de Moura', 15),
(2711, 'Pombal', 15),
(2712, 'Prata', 15),
(2713, 'Princesa Isabel', 15),
(2714, 'Puxinanã', 15),
(2715, 'Queimadas', 15),
(2716, 'Quixabá', 15),
(2717, 'Remígio', 15),
(2718, 'Riachão', 15),
(2719, 'Riachão do Bacamarte', 15),
(2720, 'Riachão do Poço', 15),
(2721, 'Riacho de Santo Antônio', 15),
(2722, 'Riacho dos Cavalos', 15),
(2723, 'Rio Tinto', 15),
(2724, 'Salgadinho', 15),
(2725, 'Salgado de São Félix', 15),
(2726, 'Santa Cecília', 15),
(2727, 'Santa Cruz', 15),
(2728, 'Santa Helena', 15),
(2729, 'Santa Inês', 15),
(2730, 'Santa Luzia', 15),
(2731, 'Santa Rita', 15),
(2732, 'Santa Teresinha', 15),
(2733, 'Santana de Mangueira', 15),
(2734, 'Santana dos Garrotes', 15),
(2735, 'Santarém', 15),
(2736, 'Santo André', 15),
(2737, 'São Bentinho', 15),
(2738, 'São Bento', 15),
(2739, 'São Domingos de Pombal', 15),
(2740, 'São Domingos do Cariri', 15),
(2741, 'São Francisco', 15),
(2742, 'São João do Cariri', 15),
(2743, 'São João do Rio do Peixe', 15),
(2744, 'São João do Tigre', 15),
(2745, 'São José da Lagoa Tapada', 15),
(2746, 'São José de Caiana', 15),
(2747, 'São José de Espinharas', 15),
(2748, 'São José de Piranhas', 15),
(2749, 'São José de Princesa', 15),
(2750, 'São José do Bonfim', 15),
(2751, 'São José do Brejo do Cruz', 15),
(2752, 'São José do Sabugi', 15),
(2753, 'São José dos Cordeiros', 15),
(2754, 'São José dos Ramos', 15),
(2755, 'São Mamede', 15),
(2756, 'São Miguel de Taipu', 15),
(2757, 'São Sebastião de Lagoa de Roça', 15),
(2758, 'São Sebastião do Umbuzeiro', 15),
(2759, 'Sapé', 15),
(2760, 'Seridó', 15),
(2761, 'Serra Branca', 15),
(2762, 'Serra da Raiz', 15),
(2763, 'Serra Grande', 15),
(2764, 'Serra Redonda', 15),
(2765, 'Serraria', 15),
(2766, 'Sertãozinho', 15),
(2767, 'Sobrado', 15),
(2768, 'Solânea', 15),
(2769, 'Soledade', 15),
(2770, 'Sossêgo', 15),
(2771, 'Sousa', 15),
(2772, 'Sumé', 15),
(2773, 'Taperoá', 15),
(2774, 'Tavares', 15),
(2775, 'Teixeira', 15),
(2776, 'Tenório', 15),
(2777, 'Triunfo', 15),
(2778, 'Uiraúna', 15),
(2779, 'Umbuzeiro', 15),
(2780, 'Várzea', 15),
(2781, 'Vieirópolis', 15),
(2782, 'Vista Serrana', 15),
(2783, 'Zabelê', 15),
(2784, 'Abatiá', 18),
(2785, 'Adrianópolis', 18),
(2786, 'Agudos do Sul', 18),
(2787, 'Almirante Tamandaré', 18),
(2788, 'Altamira do Paraná', 18),
(2789, 'Alto Paraíso', 18),
(2790, 'Alto Paraná', 18),
(2791, 'Alto Piquiri', 18),
(2792, 'Altônia', 18),
(2793, 'Alvorada do Sul', 18),
(2794, 'Amaporã', 18),
(2795, 'Ampére', 18),
(2796, 'Anahy', 18),
(2797, 'Andirá', 18),
(2798, 'Ângulo', 18),
(2799, 'Antonina', 18),
(2800, 'Antônio Olinto', 18),
(2801, 'Apucarana', 18),
(2802, 'Arapongas', 18),
(2803, 'Arapoti', 18),
(2804, 'Arapuã', 18),
(2805, 'Araruna', 18),
(2806, 'Araucária', 18),
(2807, 'Ariranha do Ivaí', 18),
(2808, 'Assaí', 18),
(2809, 'Assis Chateaubriand', 18),
(2810, 'Astorga', 18),
(2811, 'Atalaia', 18),
(2812, 'Balsa Nova', 18),
(2813, 'Bandeirantes', 18),
(2814, 'Barbosa Ferraz', 18),
(2815, 'Barra do Jacaré', 18),
(2816, 'Barracão', 18),
(2817, 'Bela Vista da Caroba', 18),
(2818, 'Bela Vista do Paraíso', 18),
(2819, 'Bituruna', 18),
(2820, 'Boa Esperança', 18),
(2821, 'Boa Esperança do Iguaçu', 18),
(2822, 'Boa Ventura de São Roque', 18),
(2823, 'Boa Vista da Aparecida', 18),
(2824, 'Bocaiúva do Sul', 18),
(2825, 'Bom Jesus do Sul', 18),
(2826, 'Bom Sucesso', 18),
(2827, 'Bom Sucesso do Sul', 18),
(2828, 'Borrazópolis', 18),
(2829, 'Braganey', 18),
(2830, 'Brasilândia do Sul', 18),
(2831, 'Cafeara', 18),
(2832, 'Cafelândia', 18),
(2833, 'Cafezal do Sul', 18),
(2834, 'Califórnia', 18),
(2835, 'Cambará', 18),
(2836, 'Cambé', 18),
(2837, 'Cambira', 18),
(2838, 'Campina da Lagoa', 18),
(2839, 'Campina do Simão', 18),
(2840, 'Campina Grande do Sul', 18),
(2841, 'Campo Bonito', 18),
(2842, 'Campo do Tenente', 18),
(2843, 'Campo Largo', 18),
(2844, 'Campo Magro', 18),
(2845, 'Campo Mourão', 18),
(2846, 'Cândido de Abreu', 18),
(2847, 'Candói', 18),
(2848, 'Cantagalo', 18),
(2849, 'Capanema', 18),
(2850, 'Capitão Leônidas Marques', 18),
(2851, 'Carambeí', 18),
(2852, 'Carlópolis', 18),
(2853, 'Cascavel', 18),
(2854, 'Castro', 18),
(2855, 'Catanduvas', 18),
(2856, 'Centenário do Sul', 18),
(2857, 'Cerro Azul', 18),
(2858, 'Céu Azul', 18),
(2859, 'Chopinzinho', 18),
(2860, 'Cianorte', 18),
(2861, 'Cidade Gaúcha', 18),
(2862, 'Clevelândia', 18),
(2863, 'Colombo', 18),
(2864, 'Colorado', 18),
(2865, 'Congonhinhas', 18),
(2866, 'Conselheiro Mairinck', 18),
(2867, 'Contenda', 18),
(2868, 'Corbélia', 18),
(2869, 'Cornélio Procópio', 18),
(2870, 'Coronel Domingos Soares', 18),
(2871, 'Coronel Vivida', 18),
(2872, 'Corumbataí do Sul', 18),
(2873, 'Cruz Machado', 18),
(2874, 'Cruzeiro do Iguaçu', 18),
(2875, 'Cruzeiro do Oeste', 18),
(2876, 'Cruzeiro do Sul', 18),
(2877, 'Cruzmaltina', 18),
(2878, 'Curitiba', 18),
(2879, 'Curiúva', 18),
(2880, 'Diamante d`Oeste', 18),
(2881, 'Diamante do Norte', 18),
(2882, 'Diamante do Sul', 18),
(2883, 'Dois Vizinhos', 18),
(2884, 'Douradina', 18),
(2885, 'Doutor Camargo', 18),
(2886, 'Doutor Ulysses', 18),
(2887, 'Enéas Marques', 18),
(2888, 'Engenheiro Beltrão', 18),
(2889, 'Entre Rios do Oeste', 18),
(2890, 'Esperança Nova', 18),
(2891, 'Espigão Alto do Iguaçu', 18),
(2892, 'Farol', 18),
(2893, 'Faxinal', 18),
(2894, 'Fazenda Rio Grande', 18),
(2895, 'Fênix', 18),
(2896, 'Fernandes Pinheiro', 18),
(2897, 'Figueira', 18),
(2898, 'Flor da Serra do Sul', 18),
(2899, 'Floraí', 18),
(2900, 'Floresta', 18),
(2901, 'Florestópolis', 18),
(2902, 'Flórida', 18),
(2903, 'Formosa do Oeste', 18),
(2904, 'Foz do Iguaçu', 18),
(2905, 'Foz do Jordão', 18),
(2906, 'Francisco Alves', 18),
(2907, 'Francisco Beltrão', 18),
(2908, 'General Carneiro', 18),
(2909, 'Godoy Moreira', 18),
(2910, 'Goioerê', 18),
(2911, 'Goioxim', 18),
(2912, 'Grandes Rios', 18),
(2913, 'Guaíra', 18),
(2914, 'Guairaçá', 18),
(2915, 'Guamiranga', 18),
(2916, 'Guapirama', 18),
(2917, 'Guaporema', 18),
(2918, 'Guaraci', 18),
(2919, 'Guaraniaçu', 18),
(2920, 'Guarapuava', 18),
(2921, 'Guaraqueçaba', 18),
(2922, 'Guaratuba', 18),
(2923, 'Honório Serpa', 18),
(2924, 'Ibaiti', 18),
(2925, 'Ibema', 18),
(2926, 'Ibiporã', 18),
(2927, 'Icaraíma', 18),
(2928, 'Iguaraçu', 18),
(2929, 'Iguatu', 18),
(2930, 'Imbaú', 18),
(2931, 'Imbituva', 18),
(2932, 'Inácio Martins', 18),
(2933, 'Inajá', 18),
(2934, 'Indianópolis', 18),
(2935, 'Ipiranga', 18),
(2936, 'Iporã', 18),
(2937, 'Iracema do Oeste', 18),
(2938, 'Irati', 18),
(2939, 'Iretama', 18),
(2940, 'Itaguajé', 18),
(2941, 'Itaipulândia', 18),
(2942, 'Itambaracá', 18),
(2943, 'Itambé', 18),
(2944, 'Itapejara d`Oeste', 18),
(2945, 'Itaperuçu', 18),
(2946, 'Itaúna do Sul', 18),
(2947, 'Ivaí', 18),
(2948, 'Ivaiporã', 18),
(2949, 'Ivaté', 18),
(2950, 'Ivatuba', 18),
(2951, 'Jaboti', 18),
(2952, 'Jacarezinho', 18),
(2953, 'Jaguapitã', 18),
(2954, 'Jaguariaíva', 18),
(2955, 'Jandaia do Sul', 18),
(2956, 'Janiópolis', 18),
(2957, 'Japira', 18),
(2958, 'Japurá', 18),
(2959, 'Jardim Alegre', 18),
(2960, 'Jardim Olinda', 18),
(2961, 'Jataizinho', 18),
(2962, 'Jesuítas', 18),
(2963, 'Joaquim Távora', 18),
(2964, 'Jundiaí do Sul', 18),
(2965, 'Juranda', 18),
(2966, 'Jussara', 18),
(2967, 'Kaloré', 18),
(2968, 'Lapa', 18),
(2969, 'Laranjal', 18),
(2970, 'Laranjeiras do Sul', 18),
(2971, 'Leópolis', 18),
(2972, 'Lidianópolis', 18),
(2973, 'Lindoeste', 18),
(2974, 'Loanda', 18),
(2975, 'Lobato', 18),
(2976, 'Londrina', 18),
(2977, 'Luiziana', 18),
(2978, 'Lunardelli', 18),
(2979, 'Lupionópolis', 18),
(2980, 'Mallet', 18),
(2981, 'Mamborê', 18),
(2982, 'Mandaguaçu', 18),
(2983, 'Mandaguari', 18),
(2984, 'Mandirituba', 18),
(2985, 'Manfrinópolis', 18),
(2986, 'Mangueirinha', 18),
(2987, 'Manoel Ribas', 18),
(2988, 'Marechal Cândido Rondon', 18),
(2989, 'Maria Helena', 18),
(2990, 'Marialva', 18),
(2991, 'Marilândia do Sul', 18),
(2992, 'Marilena', 18),
(2993, 'Mariluz', 18),
(2994, 'Maringá', 18),
(2995, 'Mariópolis', 18),
(2996, 'Maripá', 18),
(2997, 'Marmeleiro', 18),
(2998, 'Marquinho', 18),
(2999, 'Marumbi', 18),
(3000, 'Matelândia', 18),
(3001, 'Matinhos', 18),
(3002, 'Mato Rico', 18),
(3003, 'Mauá da Serra', 18),
(3004, 'Medianeira', 18),
(3005, 'Mercedes', 18),
(3006, 'Mirador', 18),
(3007, 'Miraselva', 18),
(3008, 'Missal', 18),
(3009, 'Moreira Sales', 18),
(3010, 'Morretes', 18),
(3011, 'Munhoz de Melo', 18),
(3012, 'Nossa Senhora das Graças', 18),
(3013, 'Nova Aliança do Ivaí', 18),
(3014, 'Nova América da Colina', 18),
(3015, 'Nova Aurora', 18),
(3016, 'Nova Cantu', 18),
(3017, 'Nova Esperança', 18),
(3018, 'Nova Esperança do Sudoeste', 18),
(3019, 'Nova Fátima', 18),
(3020, 'Nova Laranjeiras', 18),
(3021, 'Nova Londrina', 18),
(3022, 'Nova Olímpia', 18),
(3023, 'Nova Prata do Iguaçu', 18),
(3024, 'Nova Santa Bárbara', 18),
(3025, 'Nova Santa Rosa', 18),
(3026, 'Nova Tebas', 18),
(3027, 'Novo Itacolomi', 18),
(3028, 'Ortigueira', 18),
(3029, 'Ourizona', 18),
(3030, 'Ouro Verde do Oeste', 18),
(3031, 'Paiçandu', 18),
(3032, 'Palmas', 18),
(3033, 'Palmeira', 18),
(3034, 'Palmital', 18),
(3035, 'Palotina', 18),
(3036, 'Paraíso do Norte', 18),
(3037, 'Paranacity', 18),
(3038, 'Paranaguá', 18),
(3039, 'Paranapoema', 18),
(3040, 'Paranavaí', 18),
(3041, 'Pato Bragado', 18),
(3042, 'Pato Branco', 18),
(3043, 'Paula Freitas', 18),
(3044, 'Paulo Frontin', 18),
(3045, 'Peabiru', 18),
(3046, 'Perobal', 18),
(3047, 'Pérola', 18),
(3048, 'Pérola d`Oeste', 18),
(3049, 'Piên', 18),
(3050, 'Pinhais', 18),
(3051, 'Pinhal de São Bento', 18),
(3052, 'Pinhalão', 18),
(3053, 'Pinhão', 18),
(3054, 'Piraí do Sul', 18),
(3055, 'Piraquara', 18),
(3056, 'Pitanga', 18),
(3057, 'Pitangueiras', 18),
(3058, 'Planaltina do Paraná', 18),
(3059, 'Planalto', 18),
(3060, 'Ponta Grossa', 18),
(3061, 'Pontal do Paraná', 18),
(3062, 'Porecatu', 18),
(3063, 'Porto Amazonas', 18),
(3064, 'Porto Barreiro', 18),
(3065, 'Porto Rico', 18),
(3066, 'Porto Vitória', 18),
(3067, 'Prado Ferreira', 18),
(3068, 'Pranchita', 18),
(3069, 'Presidente Castelo Branco', 18),
(3070, 'Primeiro de Maio', 18),
(3071, 'Prudentópolis', 18),
(3072, 'Quarto Centenário', 18),
(3073, 'Quatiguá', 18),
(3074, 'Quatro Barras', 18),
(3075, 'Quatro Pontes', 18),
(3076, 'Quedas do Iguaçu', 18),
(3077, 'Querência do Norte', 18),
(3078, 'Quinta do Sol', 18),
(3079, 'Quitandinha', 18),
(3080, 'Ramilândia', 18),
(3081, 'Rancho Alegre', 18),
(3082, 'Rancho Alegre d`Oeste', 18),
(3083, 'Realeza', 18),
(3084, 'Rebouças', 18),
(3085, 'Renascença', 18),
(3086, 'Reserva', 18),
(3087, 'Reserva do Iguaçu', 18),
(3088, 'Ribeirão Claro', 18),
(3089, 'Ribeirão do Pinhal', 18),
(3090, 'Rio Azul', 18),
(3091, 'Rio Bom', 18),
(3092, 'Rio Bonito do Iguaçu', 18),
(3093, 'Rio Branco do Ivaí', 18),
(3094, 'Rio Branco do Sul', 18),
(3095, 'Rio Negro', 18),
(3096, 'Rolândia', 18),
(3097, 'Roncador', 18),
(3098, 'Rondon', 18),
(3099, 'Rosário do Ivaí', 18),
(3100, 'Sabáudia', 18),
(3101, 'Salgado Filho', 18),
(3102, 'Salto do Itararé', 18),
(3103, 'Salto do Lontra', 18),
(3104, 'Santa Amélia', 18),
(3105, 'Santa Cecília do Pavão', 18),
(3106, 'Santa Cruz de Monte Castelo', 18),
(3107, 'Santa Fé', 18),
(3108, 'Santa Helena', 18),
(3109, 'Santa Inês', 18),
(3110, 'Santa Isabel do Ivaí', 18),
(3111, 'Santa Izabel do Oeste', 18),
(3112, 'Santa Lúcia', 18),
(3113, 'Santa Maria do Oeste', 18),
(3114, 'Santa Mariana', 18),
(3115, 'Santa Mônica', 18),
(3116, 'Santa Tereza do Oeste', 18),
(3117, 'Santa Terezinha de Itaipu', 18),
(3118, 'Santana do Itararé', 18),
(3119, 'Santo Antônio da Platina', 18),
(3120, 'Santo Antônio do Caiuá', 18),
(3121, 'Santo Antônio do Paraíso', 18),
(3122, 'Santo Antônio do Sudoeste', 18),
(3123, 'Santo Inácio', 18),
(3124, 'São Carlos do Ivaí', 18),
(3125, 'São Jerônimo da Serra', 18),
(3126, 'São João', 18),
(3127, 'São João do Caiuá', 18),
(3128, 'São João do Ivaí', 18),
(3129, 'São João do Triunfo', 18),
(3130, 'São Jorge d`Oeste', 18),
(3131, 'São Jorge do Ivaí', 18),
(3132, 'São Jorge do Patrocínio', 18),
(3133, 'São José da Boa Vista', 18),
(3134, 'São José das Palmeiras', 18),
(3135, 'São José dos Pinhais', 18),
(3136, 'São Manoel do Paraná', 18),
(3137, 'São Mateus do Sul', 18),
(3138, 'São Miguel do Iguaçu', 18),
(3139, 'São Pedro do Iguaçu', 18),
(3140, 'São Pedro do Ivaí', 18),
(3141, 'São Pedro do Paraná', 18),
(3142, 'São Sebastião da Amoreira', 18),
(3143, 'São Tomé', 18),
(3144, 'Sapopema', 18),
(3145, 'Sarandi', 18),
(3146, 'Saudade do Iguaçu', 18),
(3147, 'Sengés', 18),
(3148, 'Serranópolis do Iguaçu', 18),
(3149, 'Sertaneja', 18),
(3150, 'Sertanópolis', 18),
(3151, 'Siqueira Campos', 18),
(3152, 'Sulina', 18),
(3153, 'Tamarana', 18),
(3154, 'Tamboara', 18),
(3155, 'Tapejara', 18),
(3156, 'Tapira', 18),
(3157, 'Teixeira Soares', 18),
(3158, 'Telêmaco Borba', 18),
(3159, 'Terra Boa', 18),
(3160, 'Terra Rica', 18),
(3161, 'Terra Roxa', 18),
(3162, 'Tibagi', 18),
(3163, 'Tijucas do Sul', 18),
(3164, 'Toledo', 18),
(3165, 'Tomazina', 18),
(3166, 'Três Barras do Paraná', 18),
(3167, 'Tunas do Paraná', 18),
(3168, 'Tuneiras do Oeste', 18),
(3169, 'Tupãssi', 18),
(3170, 'Turvo', 18),
(3171, 'Ubiratã', 18),
(3172, 'Umuarama', 18),
(3173, 'União da Vitória', 18),
(3174, 'Uniflor', 18),
(3175, 'Uraí', 18),
(3176, 'Ventania', 18),
(3177, 'Vera Cruz do Oeste', 18),
(3178, 'Verê', 18),
(3179, 'Virmond', 18),
(3180, 'Vitorino', 18),
(3181, 'Wenceslau Braz', 18),
(3182, 'Xambrê', 18),
(3183, 'Abreu e Lima', 16),
(3184, 'Afogados da Ingazeira', 16),
(3185, 'Afrânio', 16),
(3186, 'Agrestina', 16),
(3187, 'Água Preta', 16),
(3188, 'Águas Belas', 16),
(3189, 'Alagoinha', 16),
(3190, 'Aliança', 16),
(3191, 'Altinho', 16),
(3192, 'Amaraji', 16),
(3193, 'Angelim', 16),
(3194, 'Araçoiaba', 16),
(3195, 'Araripina', 16),
(3196, 'Arcoverde', 16),
(3197, 'Barra de Guabiraba', 16),
(3198, 'Barreiros', 16),
(3199, 'Belém de Maria', 16),
(3200, 'Belém de São Francisco', 16),
(3201, 'Belo Jardim', 16),
(3202, 'Betânia', 16),
(3203, 'Bezerros', 16),
(3204, 'Bodocó', 16),
(3205, 'Bom Conselho', 16),
(3206, 'Bom Jardim', 16),
(3207, 'Bonito', 16),
(3208, 'Brejão', 16),
(3209, 'Brejinho', 16),
(3210, 'Brejo da Madre de Deus', 16),
(3211, 'Buenos Aires', 16),
(3212, 'Buíque', 16),
(3213, 'Cabo de Santo Agostinho', 16),
(3214, 'Cabrobó', 16),
(3215, 'Cachoeirinha', 16),
(3216, 'Caetés', 16),
(3217, 'Calçado', 16),
(3218, 'Calumbi', 16),
(3219, 'Camaragibe', 16),
(3220, 'Camocim de São Félix', 16),
(3221, 'Camutanga', 16),
(3222, 'Canhotinho', 16),
(3223, 'Capoeiras', 16),
(3224, 'Carnaíba', 16),
(3225, 'Carnaubeira da Penha', 16),
(3226, 'Carpina', 16),
(3227, 'Caruaru', 16),
(3228, 'Casinhas', 16),
(3229, 'Catende', 16),
(3230, 'Cedro', 16),
(3231, 'Chã de Alegria', 16),
(3232, 'Chã Grande', 16),
(3233, 'Condado', 16),
(3234, 'Correntes', 16),
(3235, 'Cortês', 16),
(3236, 'Cumaru', 16),
(3237, 'Cupira', 16),
(3238, 'Custódia', 16),
(3239, 'Dormentes', 16),
(3240, 'Escada', 16),
(3241, 'Exu', 16),
(3242, 'Feira Nova', 16),
(3243, 'Fernando de Noronha', 16),
(3244, 'Ferreiros', 16),
(3245, 'Flores', 16),
(3246, 'Floresta', 16),
(3247, 'Frei Miguelinho', 16),
(3248, 'Gameleira', 16),
(3249, 'Garanhuns', 16),
(3250, 'Glória do Goitá', 16),
(3251, 'Goiana', 16),
(3252, 'Granito', 16),
(3253, 'Gravatá', 16),
(3254, 'Iati', 16),
(3255, 'Ibimirim', 16),
(3256, 'Ibirajuba', 16),
(3257, 'Igarassu', 16),
(3258, 'Iguaraci', 16),
(3259, 'Ilha de Itamaracá', 16),
(3260, 'Inajá', 16),
(3261, 'Ingazeira', 16),
(3262, 'Ipojuca', 16),
(3263, 'Ipubi', 16),
(3264, 'Itacuruba', 16),
(3265, 'Itaíba', 16),
(3266, 'Itambé', 16),
(3267, 'Itapetim', 16),
(3268, 'Itapissuma', 16),
(3269, 'Itaquitinga', 16),
(3270, 'Jaboatão dos Guararapes', 16),
(3271, 'Jaqueira', 16),
(3272, 'Jataúba', 16),
(3273, 'Jatobá', 16),
(3274, 'João Alfredo', 16),
(3275, 'Joaquim Nabuco', 16),
(3276, 'Jucati', 16),
(3277, 'Jupi', 16),
(3278, 'Jurema', 16),
(3279, 'Lagoa do Carro', 16),
(3280, 'Lagoa do Itaenga', 16),
(3281, 'Lagoa do Ouro', 16),
(3282, 'Lagoa dos Gatos', 16),
(3283, 'Lagoa Grande', 16),
(3284, 'Lajedo', 16),
(3285, 'Limoeiro', 16),
(3286, 'Macaparana', 16),
(3287, 'Machados', 16),
(3288, 'Manari', 16),
(3289, 'Maraial', 16),
(3290, 'Mirandiba', 16),
(3291, 'Moreilândia', 16),
(3292, 'Moreno', 16),
(3293, 'Nazaré da Mata', 16),
(3294, 'Olinda', 16),
(3295, 'Orobó', 16),
(3296, 'Orocó', 16),
(3297, 'Ouricuri', 16),
(3298, 'Palmares', 16),
(3299, 'Palmeirina', 16),
(3300, 'Panelas', 16),
(3301, 'Paranatama', 16),
(3302, 'Parnamirim', 16),
(3303, 'Passira', 16),
(3304, 'Paudalho', 16),
(3305, 'Paulista', 16),
(3306, 'Pedra', 16),
(3307, 'Pesqueira', 16),
(3308, 'Petrolândia', 16),
(3309, 'Petrolina', 16),
(3310, 'Poção', 16),
(3311, 'Pombos', 16),
(3312, 'Primavera', 16),
(3313, 'Quipapá', 16),
(3314, 'Quixaba', 16),
(3315, 'Recife', 16),
(3316, 'Riacho das Almas', 16),
(3317, 'Ribeirão', 16),
(3318, 'Rio Formoso', 16),
(3319, 'Sairé', 16),
(3320, 'Salgadinho', 16),
(3321, 'Salgueiro', 16),
(3322, 'Saloá', 16),
(3323, 'Sanharó', 16),
(3324, 'Santa Cruz', 16),
(3325, 'Santa Cruz da Baixa Verde', 16),
(3326, 'Santa Cruz do Capibaribe', 16),
(3327, 'Santa Filomena', 16),
(3328, 'Santa Maria da Boa Vista', 16),
(3329, 'Santa Maria do Cambucá', 16),
(3330, 'Santa Terezinha', 16),
(3331, 'São Benedito do Sul', 16),
(3332, 'São Bento do Una', 16),
(3333, 'São Caitano', 16),
(3334, 'São João', 16),
(3335, 'São Joaquim do Monte', 16),
(3336, 'São José da Coroa Grande', 16),
(3337, 'São José do Belmonte', 16),
(3338, 'São José do Egito', 16),
(3339, 'São Lourenço da Mata', 16),
(3340, 'São Vicente Ferrer', 16),
(3341, 'Serra Talhada', 16),
(3342, 'Serrita', 16),
(3343, 'Sertânia', 16),
(3344, 'Sirinhaém', 16),
(3345, 'Solidão', 16),
(3346, 'Surubim', 16),
(3347, 'Tabira', 16),
(3348, 'Tacaimbó', 16),
(3349, 'Tacaratu', 16),
(3350, 'Tamandaré', 16),
(3351, 'Taquaritinga do Norte', 16),
(3352, 'Terezinha', 16),
(3353, 'Terra Nova', 16),
(3354, 'Timbaúba', 16),
(3355, 'Toritama', 16),
(3356, 'Tracunhaém', 16),
(3357, 'Trindade', 16),
(3358, 'Triunfo', 16),
(3359, 'Tupanatinga', 16),
(3360, 'Tuparetama', 16),
(3361, 'Venturosa', 16),
(3362, 'Verdejante', 16),
(3363, 'Vertente do Lério', 16),
(3364, 'Vertentes', 16),
(3365, 'Vicência', 16),
(3366, 'Vitória de Santo Antão', 16),
(3367, 'Xexéu', 16),
(3368, 'Acauã', 17),
(3369, 'Agricolândia', 17),
(3370, 'Água Branca', 17),
(3371, 'Alagoinha do Piauí', 17),
(3372, 'Alegrete do Piauí', 17),
(3373, 'Alto Longá', 17),
(3374, 'Altos', 17),
(3375, 'Alvorada do Gurguéia', 17),
(3376, 'Amarante', 17),
(3377, 'Angical do Piauí', 17),
(3378, 'Anísio de Abreu', 17),
(3379, 'Antônio Almeida', 17),
(3380, 'Aroazes', 17),
(3381, 'Aroeiras do Itaim', 17),
(3382, 'Arraial', 17),
(3383, 'Assunção do Piauí', 17),
(3384, 'Avelino Lopes', 17),
(3385, 'Baixa Grande do Ribeiro', 17),
(3386, 'Barra d`Alcântara', 17),
(3387, 'Barras', 17),
(3388, 'Barreiras do Piauí', 17),
(3389, 'Barro Duro', 17),
(3390, 'Batalha', 17),
(3391, 'Bela Vista do Piauí', 17),
(3392, 'Belém do Piauí', 17),
(3393, 'Beneditinos', 17),
(3394, 'Bertolínia', 17),
(3395, 'Betânia do Piauí', 17),
(3396, 'Boa Hora', 17),
(3397, 'Bocaina', 17),
(3398, 'Bom Jesus', 17),
(3399, 'Bom Princípio do Piauí', 17),
(3400, 'Bonfim do Piauí', 17),
(3401, 'Boqueirão do Piauí', 17),
(3402, 'Brasileira', 17),
(3403, 'Brejo do Piauí', 17),
(3404, 'Buriti dos Lopes', 17),
(3405, 'Buriti dos Montes', 17),
(3406, 'Cabeceiras do Piauí', 17),
(3407, 'Cajazeiras do Piauí', 17),
(3408, 'Cajueiro da Praia', 17),
(3409, 'Caldeirão Grande do Piauí', 17),
(3410, 'Campinas do Piauí', 17),
(3411, 'Campo Alegre do Fidalgo', 17),
(3412, 'Campo Grande do Piauí', 17),
(3413, 'Campo Largo do Piauí', 17),
(3414, 'Campo Maior', 17),
(3415, 'Canavieira', 17),
(3416, 'Canto do Buriti', 17),
(3417, 'Capitão de Campos', 17),
(3418, 'Capitão Gervásio Oliveira', 17),
(3419, 'Caracol', 17),
(3420, 'Caraúbas do Piauí', 17),
(3421, 'Caridade do Piauí', 17),
(3422, 'Castelo do Piauí', 17),
(3423, 'Caxingó', 17),
(3424, 'Cocal', 17),
(3425, 'Cocal de Telha', 17),
(3426, 'Cocal dos Alves', 17),
(3427, 'Coivaras', 17),
(3428, 'Colônia do Gurguéia', 17),
(3429, 'Colônia do Piauí', 17),
(3430, 'Conceição do Canindé', 17),
(3431, 'Coronel José Dias', 17),
(3432, 'Corrente', 17),
(3433, 'Cristalândia do Piauí', 17),
(3434, 'Cristino Castro', 17),
(3435, 'Curimatá', 17),
(3436, 'Currais', 17),
(3437, 'Curral Novo do Piauí', 17),
(3438, 'Curralinhos', 17),
(3439, 'Demerval Lobão', 17),
(3440, 'Dirceu Arcoverde', 17),
(3441, 'Dom Expedito Lopes', 17),
(3442, 'Dom Inocêncio', 17),
(3443, 'Domingos Mourão', 17),
(3444, 'Elesbão Veloso', 17),
(3445, 'Eliseu Martins', 17),
(3446, 'Esperantina', 17),
(3447, 'Fartura do Piauí', 17),
(3448, 'Flores do Piauí', 17),
(3449, 'Floresta do Piauí', 17),
(3450, 'Floriano', 17),
(3451, 'Francinópolis', 17),
(3452, 'Francisco Ayres', 17),
(3453, 'Francisco Macedo', 17),
(3454, 'Francisco Santos', 17),
(3455, 'Fronteiras', 17),
(3456, 'Geminiano', 17),
(3457, 'Gilbués', 17),
(3458, 'Guadalupe', 17),
(3459, 'Guaribas', 17),
(3460, 'Hugo Napoleão', 17),
(3461, 'Ilha Grande', 17),
(3462, 'Inhuma', 17),
(3463, 'Ipiranga do Piauí', 17),
(3464, 'Isaías Coelho', 17),
(3465, 'Itainópolis', 17),
(3466, 'Itaueira', 17),
(3467, 'Jacobina do Piauí', 17),
(3468, 'Jaicós', 17),
(3469, 'Jardim do Mulato', 17),
(3470, 'Jatobá do Piauí', 17),
(3471, 'Jerumenha', 17),
(3472, 'João Costa', 17),
(3473, 'Joaquim Pires', 17),
(3474, 'Joca Marques', 17),
(3475, 'José de Freitas', 17),
(3476, 'Juazeiro do Piauí', 17),
(3477, 'Júlio Borges', 17),
(3478, 'Jurema', 17),
(3479, 'Lagoa Alegre', 17),
(3480, 'Lagoa de São Francisco', 17),
(3481, 'Lagoa do Barro do Piauí', 17),
(3482, 'Lagoa do Piauí', 17),
(3483, 'Lagoa do Sítio', 17),
(3484, 'Lagoinha do Piauí', 17),
(3485, 'Landri Sales', 17),
(3486, 'Luís Correia', 17),
(3487, 'Luzilândia', 17),
(3488, 'Madeiro', 17),
(3489, 'Manoel Emídio', 17),
(3490, 'Marcolândia', 17),
(3491, 'Marcos Parente', 17),
(3492, 'Massapê do Piauí', 17),
(3493, 'Matias Olímpio', 17),
(3494, 'Miguel Alves', 17),
(3495, 'Miguel Leão', 17),
(3496, 'Milton Brandão', 17),
(3497, 'Monsenhor Gil', 17),
(3498, 'Monsenhor Hipólito', 17),
(3499, 'Monte Alegre do Piauí', 17),
(3500, 'Morro Cabeça no Tempo', 17),
(3501, 'Morro do Chapéu do Piauí', 17),
(3502, 'Murici dos Portelas', 17),
(3503, 'Nazaré do Piauí', 17),
(3504, 'Nossa Senhora de Nazaré', 17),
(3505, 'Nossa Senhora dos Remédios', 17),
(3506, 'Nova Santa Rita', 17),
(3507, 'Novo Oriente do Piauí', 17),
(3508, 'Novo Santo Antônio', 17),
(3509, 'Oeiras', 17),
(3510, 'Olho d`Água do Piauí', 17),
(3511, 'Padre Marcos', 17),
(3512, 'Paes Landim', 17),
(3513, 'Pajeú do Piauí', 17),
(3514, 'Palmeira do Piauí', 17),
(3515, 'Palmeirais', 17),
(3516, 'Paquetá', 17),
(3517, 'Parnaguá', 17),
(3518, 'Parnaíba', 17),
(3519, 'Passagem Franca do Piauí', 17),
(3520, 'Patos do Piauí', 17),
(3521, 'Pau d`Arco do Piauí', 17),
(3522, 'Paulistana', 17),
(3523, 'Pavussu', 17),
(3524, 'Pedro II', 17),
(3525, 'Pedro Laurentino', 17),
(3526, 'Picos', 17),
(3527, 'Pimenteiras', 17),
(3528, 'Pio IX', 17),
(3529, 'Piracuruca', 17),
(3530, 'Piripiri', 17),
(3531, 'Porto', 17),
(3532, 'Porto Alegre do Piauí', 17),
(3533, 'Prata do Piauí', 17),
(3534, 'Queimada Nova', 17),
(3535, 'Redenção do Gurguéia', 17),
(3536, 'Regeneração', 17),
(3537, 'Riacho Frio', 17),
(3538, 'Ribeira do Piauí', 17),
(3539, 'Ribeiro Gonçalves', 17),
(3540, 'Rio Grande do Piauí', 17),
(3541, 'Santa Cruz do Piauí', 17),
(3542, 'Santa Cruz dos Milagres', 17),
(3543, 'Santa Filomena', 17),
(3544, 'Santa Luz', 17),
(3545, 'Santa Rosa do Piauí', 17),
(3546, 'Santana do Piauí', 17),
(3547, 'Santo Antônio de Lisboa', 17),
(3548, 'Santo Antônio dos Milagres', 17),
(3549, 'Santo Inácio do Piauí', 17),
(3550, 'São Braz do Piauí', 17),
(3551, 'São Félix do Piauí', 17),
(3552, 'São Francisco de Assis do Piauí', 17),
(3553, 'São Francisco do Piauí', 17),
(3554, 'São Gonçalo do Gurguéia', 17),
(3555, 'São Gonçalo do Piauí', 17),
(3556, 'São João da Canabrava', 17),
(3557, 'São João da Fronteira', 17),
(3558, 'São João da Serra', 17),
(3559, 'São João da Varjota', 17),
(3560, 'São João do Arraial', 17),
(3561, 'São João do Piauí', 17),
(3562, 'São José do Divino', 17),
(3563, 'São José do Peixe', 17),
(3564, 'São José do Piauí', 17),
(3565, 'São Julião', 17),
(3566, 'São Lourenço do Piauí', 17),
(3567, 'São Luis do Piauí', 17),
(3568, 'São Miguel da Baixa Grande', 17),
(3569, 'São Miguel do Fidalgo', 17),
(3570, 'São Miguel do Tapuio', 17),
(3571, 'São Pedro do Piauí', 17),
(3572, 'São Raimundo Nonato', 17),
(3573, 'Sebastião Barros', 17),
(3574, 'Sebastião Leal', 17),
(3575, 'Sigefredo Pacheco', 17),
(3576, 'Simões', 17),
(3577, 'Simplício Mendes', 17),
(3578, 'Socorro do Piauí', 17),
(3579, 'Sussuapara', 17),
(3580, 'Tamboril do Piauí', 17),
(3581, 'Tanque do Piauí', 17),
(3582, 'Teresina', 17),
(3583, 'União', 17),
(3584, 'Uruçuí', 17),
(3585, 'Valença do Piauí', 17),
(3586, 'Várzea Branca', 17),
(3587, 'Várzea Grande', 17),
(3588, 'Vera Mendes', 17),
(3589, 'Vila Nova do Piauí', 17),
(3590, 'Wall Ferraz', 17),
(3591, 'Angra dos Reis', 19),
(3592, 'Aperibé', 19),
(3593, 'Araruama', 19),
(3594, 'Areal', 19),
(3595, 'Armação dos Búzios', 19),
(3596, 'Arraial do Cabo', 19),
(3597, 'Barra do Piraí', 19),
(3598, 'Barra Mansa', 19),
(3599, 'Belford Roxo', 19),
(3600, 'Bom Jardim', 19),
(3601, 'Bom Jesus do Itabapoana', 19),
(3602, 'Cabo Frio', 19),
(3603, 'Cachoeiras de Macacu', 19),
(3604, 'Cambuci', 19),
(3605, 'Campos dos Goytacazes', 19),
(3606, 'Cantagalo', 19),
(3607, 'Carapebus', 19),
(3608, 'Cardoso Moreira', 19),
(3609, 'Carmo', 19),
(3610, 'Casimiro de Abreu', 19),
(3611, 'Comendador Levy Gasparian', 19),
(3612, 'Conceição de Macabu', 19),
(3613, 'Cordeiro', 19),
(3614, 'Duas Barras', 19),
(3615, 'Duque de Caxias', 19),
(3616, 'Engenheiro Paulo de Frontin', 19),
(3617, 'Guapimirim', 19),
(3618, 'Iguaba Grande', 19),
(3619, 'Itaboraí', 19),
(3620, 'Itaguaí', 19),
(3621, 'Italva', 19),
(3622, 'Itaocara', 19),
(3623, 'Itaperuna', 19),
(3624, 'Itatiaia', 19),
(3625, 'Japeri', 19),
(3626, 'Laje do Muriaé', 19),
(3627, 'Macaé', 19),
(3628, 'Macuco', 19),
(3629, 'Magé', 19),
(3630, 'Mangaratiba', 19),
(3631, 'Maricá', 19),
(3632, 'Mendes', 19),
(3633, 'Mesquita', 19),
(3634, 'Miguel Pereira', 19),
(3635, 'Miracema', 19),
(3636, 'Natividade', 19),
(3637, 'Nilópolis', 19),
(3638, 'Niterói', 19),
(3639, 'Nova Friburgo', 19),
(3640, 'Nova Iguaçu', 19),
(3641, 'Paracambi', 19),
(3642, 'Paraíba do Sul', 19),
(3643, 'Parati', 19),
(3644, 'Paty do Alferes', 19),
(3645, 'Petrópolis', 19),
(3646, 'Pinheiral', 19),
(3647, 'Piraí', 19),
(3648, 'Porciúncula', 19),
(3649, 'Porto Real', 19),
(3650, 'Quatis', 19),
(3651, 'Queimados', 19),
(3652, 'Quissamã', 19),
(3653, 'Resende', 19),
(3654, 'Rio Bonito', 19),
(3655, 'Rio Claro', 19),
(3656, 'Rio das Flores', 19),
(3657, 'Rio das Ostras', 19),
(3658, 'Rio de Janeiro', 19),
(3659, 'Santa Maria Madalena', 19),
(3660, 'Santo Antônio de Pádua', 19),
(3661, 'São Fidélis', 19),
(3662, 'São Francisco de Itabapoana', 19),
(3663, 'São Gonçalo', 19),
(3664, 'São João da Barra', 19),
(3665, 'São João de Meriti', 19),
(3666, 'São José de Ubá', 19),
(3667, 'São José do Vale do Rio Pret', 19),
(3668, 'São Pedro da Aldeia', 19),
(3669, 'São Sebastião do Alto', 19),
(3670, 'Sapucaia', 19),
(3671, 'Saquarema', 19),
(3672, 'Seropédica', 19),
(3673, 'Silva Jardim', 19),
(3674, 'Sumidouro', 19),
(3675, 'Tanguá', 19),
(3676, 'Teresópolis', 19),
(3677, 'Trajano de Morais', 19),
(3678, 'Três Rios', 19),
(3679, 'Valença', 19),
(3680, 'Varre-Sai', 19),
(3681, 'Vassouras', 19),
(3682, 'Volta Redonda', 19),
(3683, 'Acari', 20),
(3684, 'Açu', 20),
(3685, 'Afonso Bezerra', 20),
(3686, 'Água Nova', 20),
(3687, 'Alexandria', 20),
(3688, 'Almino Afonso', 20),
(3689, 'Alto do Rodrigues', 20),
(3690, 'Angicos', 20),
(3691, 'Antônio Martins', 20),
(3692, 'Apodi', 20),
(3693, 'Areia Branca', 20),
(3694, 'Arês', 20),
(3695, 'Augusto Severo', 20),
(3696, 'Baía Formosa', 20),
(3697, 'Baraúna', 20),
(3698, 'Barcelona', 20),
(3699, 'Bento Fernandes', 20),
(3700, 'Bodó', 20),
(3701, 'Bom Jesus', 20),
(3702, 'Brejinho', 20),
(3703, 'Caiçara do Norte', 20),
(3704, 'Caiçara do Rio do Vento', 20),
(3705, 'Caicó', 20),
(3706, 'Campo Redondo', 20),
(3707, 'Canguaretama', 20),
(3708, 'Caraúbas', 20),
(3709, 'Carnaúba dos Dantas', 20),
(3710, 'Carnaubais', 20),
(3711, 'Ceará-Mirim', 20),
(3712, 'Cerro Corá', 20),
(3713, 'Coronel Ezequiel', 20),
(3714, 'Coronel João Pessoa', 20),
(3715, 'Cruzeta', 20),
(3716, 'Currais Novos', 20),
(3717, 'Doutor Severiano', 20),
(3718, 'Encanto', 20),
(3719, 'Equador', 20),
(3720, 'Espírito Santo', 20),
(3721, 'Extremoz', 20),
(3722, 'Felipe Guerra', 20),
(3723, 'Fernando Pedroza', 20),
(3724, 'Florânia', 20),
(3725, 'Francisco Dantas', 20),
(3726, 'Frutuoso Gomes', 20),
(3727, 'Galinhos', 20),
(3728, 'Goianinha', 20),
(3729, 'Governador Dix-Sept Rosado', 20),
(3730, 'Grossos', 20),
(3731, 'Guamaré', 20),
(3732, 'Ielmo Marinho', 20),
(3733, 'Ipanguaçu', 20),
(3734, 'Ipueira', 20),
(3735, 'Itajá', 20),
(3736, 'Itaú', 20),
(3737, 'Jaçanã', 20),
(3738, 'Jandaíra', 20),
(3739, 'Janduís', 20),
(3740, 'Januário Cicco', 20),
(3741, 'Japi', 20),
(3742, 'Jardim de Angicos', 20),
(3743, 'Jardim de Piranhas', 20),
(3744, 'Jardim do Seridó', 20),
(3745, 'João Câmara', 20),
(3746, 'João Dias', 20),
(3747, 'José da Penha', 20),
(3748, 'Jucurutu', 20),
(3749, 'Jundiá', 20),
(3750, 'Lagoa d`Anta', 20),
(3751, 'Lagoa de Pedras', 20),
(3752, 'Lagoa de Velhos', 20),
(3753, 'Lagoa Nova', 20),
(3754, 'Lagoa Salgada', 20),
(3755, 'Lajes', 20),
(3756, 'Lajes Pintadas', 20),
(3757, 'Lucrécia', 20),
(3758, 'Luís Gomes', 20),
(3759, 'Macaíba', 20),
(3760, 'Macau', 20),
(3761, 'Major Sales', 20),
(3762, 'Marcelino Vieira', 20),
(3763, 'Martins', 20),
(3764, 'Maxaranguape', 20),
(3765, 'Messias Targino', 20),
(3766, 'Montanhas', 20),
(3767, 'Monte Alegre', 20),
(3768, 'Monte das Gameleiras', 20),
(3769, 'Mossoró', 20),
(3770, 'Natal', 20),
(3771, 'Nísia Floresta', 20),
(3772, 'Nova Cruz', 20),
(3773, 'Olho-d`Água do Borges', 20),
(3774, 'Ouro Branco', 20),
(3775, 'Paraná', 20),
(3776, 'Paraú', 20),
(3777, 'Parazinho', 20),
(3778, 'Parelhas', 20),
(3779, 'Parnamirim', 20),
(3780, 'Passa e Fica', 20),
(3781, 'Passagem', 20),
(3782, 'Patu', 20),
(3783, 'Pau dos Ferros', 20),
(3784, 'Pedra Grande', 20),
(3785, 'Pedra Preta', 20),
(3786, 'Pedro Avelino', 20),
(3787, 'Pedro Velho', 20),
(3788, 'Pendências', 20),
(3789, 'Pilões', 20),
(3790, 'Poço Branco', 20),
(3791, 'Portalegre', 20),
(3792, 'Porto do Mangue', 20),
(3793, 'Presidente Juscelino', 20),
(3794, 'Pureza', 20),
(3795, 'Rafael Fernandes', 20),
(3796, 'Rafael Godeiro', 20),
(3797, 'Riacho da Cruz', 20),
(3798, 'Riacho de Santana', 20),
(3799, 'Riachuelo', 20),
(3800, 'Rio do Fogo', 20),
(3801, 'Rodolfo Fernandes', 20),
(3802, 'Ruy Barbosa', 20),
(3803, 'Santa Cruz', 20),
(3804, 'Santa Maria', 20),
(3805, 'Santana do Matos', 20),
(3806, 'Santana do Seridó', 20),
(3807, 'Santo Antônio', 20),
(3808, 'São Bento do Norte', 20),
(3809, 'São Bento do Trairí', 20),
(3810, 'São Fernando', 20),
(3811, 'São Francisco do Oeste', 20),
(3812, 'São Gonçalo do Amarante', 20),
(3813, 'São João do Sabugi', 20),
(3814, 'São José de Mipibu', 20),
(3815, 'São José do Campestre', 20),
(3816, 'São José do Seridó', 20),
(3817, 'São Miguel', 20),
(3818, 'São Miguel do Gostoso', 20),
(3819, 'São Paulo do Potengi', 20),
(3820, 'São Pedro', 20),
(3821, 'São Rafael', 20),
(3822, 'São Tomé', 20),
(3823, 'São Vicente', 20),
(3824, 'Senador Elói de Souza', 20),
(3825, 'Senador Georgino Avelino', 20),
(3826, 'Serra de São Bento', 20),
(3827, 'Serra do Mel', 20),
(3828, 'Serra Negra do Norte', 20),
(3829, 'Serrinha', 20),
(3830, 'Serrinha dos Pintos', 20),
(3831, 'Severiano Melo', 20),
(3832, 'Sítio Novo', 20),
(3833, 'Taboleiro Grande', 20),
(3834, 'Taipu', 20),
(3835, 'Tangará', 20),
(3836, 'Tenente Ananias', 20),
(3837, 'Tenente Laurentino Cruz', 20),
(3838, 'Tibau', 20),
(3839, 'Tibau do Sul', 20),
(3840, 'Timbaúba dos Batistas', 20),
(3841, 'Touros', 20),
(3842, 'Triunfo Potiguar', 20),
(3843, 'Umarizal', 20),
(3844, 'Upanema', 20),
(3845, 'Várzea', 20),
(3846, 'Venha-Ver', 20),
(3847, 'Vera Cruz', 20),
(3848, 'Viçosa', 20),
(3849, 'Vila Flor', 20),
(3850, 'Aceguá', 23),
(3851, 'Água Santa', 23),
(3852, 'Agudo', 23),
(3853, 'Ajuricaba', 23),
(3854, 'Alecrim', 23),
(3855, 'Alegrete', 23),
(3856, 'Alegria', 23),
(3857, 'Almirante Tamandaré do Sul', 23),
(3858, 'Alpestre', 23),
(3859, 'Alto Alegre', 23),
(3860, 'Alto Feliz', 23),
(3861, 'Alvorada', 23),
(3862, 'Amaral Ferrador', 23),
(3863, 'Ametista do Sul', 23),
(3864, 'André da Rocha', 23),
(3865, 'Anta Gorda', 23),
(3866, 'Antônio Prado', 23),
(3867, 'Arambaré', 23),
(3868, 'Araricá', 23),
(3869, 'Aratiba', 23),
(3870, 'Arroio do Meio', 23),
(3871, 'Arroio do Padre', 23),
(3872, 'Arroio do Sal', 23),
(3873, 'Arroio do Tigre', 23),
(3874, 'Arroio dos Ratos', 23),
(3875, 'Arroio Grande', 23),
(3876, 'Arvorezinha', 23),
(3877, 'Augusto Pestana', 23),
(3878, 'Áurea', 23),
(3879, 'Bagé', 23),
(3880, 'Balneário Pinhal', 23),
(3881, 'Barão', 23),
(3882, 'Barão de Cotegipe', 23),
(3883, 'Barão do Triunfo', 23),
(3884, 'Barra do Guarita', 23),
(3885, 'Barra do Quaraí', 23),
(3886, 'Barra do Ribeiro', 23),
(3887, 'Barra do Rio Azul', 23),
(3888, 'Barra Funda', 23),
(3889, 'Barracão', 23),
(3890, 'Barros Cassal', 23),
(3891, 'Benjamin Constant do Sul', 23),
(3892, 'Bento Gonçalves', 23),
(3893, 'Boa Vista das Missões', 23);
INSERT INTO `city` (`id`, `name`, `state`) VALUES
(3894, 'Boa Vista do Buricá', 23),
(3895, 'Boa Vista do Cadeado', 23),
(3896, 'Boa Vista do Incra', 23),
(3897, 'Boa Vista do Sul', 23),
(3898, 'Bom Jesus', 23),
(3899, 'Bom Princípio', 23),
(3900, 'Bom Progresso', 23),
(3901, 'Bom Retiro do Sul', 23),
(3902, 'Boqueirão do Leão', 23),
(3903, 'Bossoroca', 23),
(3904, 'Bozano', 23),
(3905, 'Braga', 23),
(3906, 'Brochier', 23),
(3907, 'Butiá', 23),
(3908, 'Caçapava do Sul', 23),
(3909, 'Cacequi', 23),
(3910, 'Cachoeira do Sul', 23),
(3911, 'Cachoeirinha', 23),
(3912, 'Cacique Doble', 23),
(3913, 'Caibaté', 23),
(3914, 'Caiçara', 23),
(3915, 'Camaquã', 23),
(3916, 'Camargo', 23),
(3917, 'Cambará do Sul', 23),
(3918, 'Campestre da Serra', 23),
(3919, 'Campina das Missões', 23),
(3920, 'Campinas do Sul', 23),
(3921, 'Campo Bom', 23),
(3922, 'Campo Novo', 23),
(3923, 'Campos Borges', 23),
(3924, 'Candelária', 23),
(3925, 'Cândido Godói', 23),
(3926, 'Candiota', 23),
(3927, 'Canela', 23),
(3928, 'Canguçu', 23),
(3929, 'Canoas', 23),
(3930, 'Canudos do Vale', 23),
(3931, 'Capão Bonito do Sul', 23),
(3932, 'Capão da Canoa', 23),
(3933, 'Capão do Cipó', 23),
(3934, 'Capão do Leão', 23),
(3935, 'Capela de Santana', 23),
(3936, 'Capitão', 23),
(3937, 'Capivari do Sul', 23),
(3938, 'Caraá', 23),
(3939, 'Carazinho', 23),
(3940, 'Carlos Barbosa', 23),
(3941, 'Carlos Gomes', 23),
(3942, 'Casca', 23),
(3943, 'Caseiros', 23),
(3944, 'Catuípe', 23),
(3945, 'Caxias do Sul', 23),
(3946, 'Centenário', 23),
(3947, 'Cerrito', 23),
(3948, 'Cerro Branco', 23),
(3949, 'Cerro Grande', 23),
(3950, 'Cerro Grande do Sul', 23),
(3951, 'Cerro Largo', 23),
(3952, 'Chapada', 23),
(3953, 'Charqueadas', 23),
(3954, 'Charrua', 23),
(3955, 'Chiapeta', 23),
(3956, 'Chuí', 23),
(3957, 'Chuvisca', 23),
(3958, 'Cidreira', 23),
(3959, 'Ciríaco', 23),
(3960, 'Colinas', 23),
(3961, 'Colorado', 23),
(3962, 'Condor', 23),
(3963, 'Constantina', 23),
(3964, 'Coqueiro Baixo', 23),
(3965, 'Coqueiros do Sul', 23),
(3966, 'Coronel Barros', 23),
(3967, 'Coronel Bicaco', 23),
(3968, 'Coronel Pilar', 23),
(3969, 'Cotiporã', 23),
(3970, 'Coxilha', 23),
(3971, 'Crissiumal', 23),
(3972, 'Cristal', 23),
(3973, 'Cristal do Sul', 23),
(3974, 'Cruz Alta', 23),
(3975, 'Cruzaltense', 23),
(3976, 'Cruzeiro do Sul', 23),
(3977, 'David Canabarro', 23),
(3978, 'Derrubadas', 23),
(3979, 'Dezesseis de Novembro', 23),
(3980, 'Dilermando de Aguiar', 23),
(3981, 'Dois Irmãos', 23),
(3982, 'Dois Irmãos das Missões', 23),
(3983, 'Dois Lajeados', 23),
(3984, 'Dom Feliciano', 23),
(3985, 'Dom Pedrito', 23),
(3986, 'Dom Pedro de Alcântara', 23),
(3987, 'Dona Francisca', 23),
(3988, 'Doutor Maurício Cardoso', 23),
(3989, 'Doutor Ricardo', 23),
(3990, 'Eldorado do Sul', 23),
(3991, 'Encantado', 23),
(3992, 'Encruzilhada do Sul', 23),
(3993, 'Engenho Velho', 23),
(3994, 'Entre Rios do Sul', 23),
(3995, 'Entre-Ijuís', 23),
(3996, 'Erebango', 23),
(3997, 'Erechim', 23),
(3998, 'Ernestina', 23),
(3999, 'Erval Grande', 23),
(4000, 'Erval Seco', 23),
(4001, 'Esmeralda', 23),
(4002, 'Esperança do Sul', 23),
(4003, 'Espumoso', 23),
(4004, 'Estação', 23),
(4005, 'Estância Velha', 23),
(4006, 'Esteio', 23),
(4007, 'Estrela', 23),
(4008, 'Estrela Velha', 23),
(4009, 'Eugênio de Castro', 23),
(4010, 'Fagundes Varela', 23),
(4011, 'Farroupilha', 23),
(4012, 'Faxinal do Soturno', 23),
(4013, 'Faxinalzinho', 23),
(4014, 'Fazenda Vilanova', 23),
(4015, 'Feliz', 23),
(4016, 'Flores da Cunha', 23),
(4017, 'Floriano Peixoto', 23),
(4018, 'Fontoura Xavier', 23),
(4019, 'Formigueiro', 23),
(4020, 'Forquetinha', 23),
(4021, 'Fortaleza dos Valos', 23),
(4022, 'Frederico Westphalen', 23),
(4023, 'Garibaldi', 23),
(4024, 'Garruchos', 23),
(4025, 'Gaurama', 23),
(4026, 'General Câmara', 23),
(4027, 'Gentil', 23),
(4028, 'Getúlio Vargas', 23),
(4029, 'Giruá', 23),
(4030, 'Glorinha', 23),
(4031, 'Gramado', 23),
(4032, 'Gramado dos Loureiros', 23),
(4033, 'Gramado Xavier', 23),
(4034, 'Gravataí', 23),
(4035, 'Guabiju', 23),
(4036, 'Guaíba', 23),
(4037, 'Guaporé', 23),
(4038, 'Guarani das Missões', 23),
(4039, 'Harmonia', 23),
(4040, 'Herval', 23),
(4041, 'Herveiras', 23),
(4042, 'Horizontina', 23),
(4043, 'Hulha Negra', 23),
(4044, 'Humaitá', 23),
(4045, 'Ibarama', 23),
(4046, 'Ibiaçá', 23),
(4047, 'Ibiraiaras', 23),
(4048, 'Ibirapuitã', 23),
(4049, 'Ibirubá', 23),
(4050, 'Igrejinha', 23),
(4051, 'Ijuí', 23),
(4052, 'Ilópolis', 23),
(4053, 'Imbé', 23),
(4054, 'Imigrante', 23),
(4055, 'Independência', 23),
(4056, 'Inhacorá', 23),
(4057, 'Ipê', 23),
(4058, 'Ipiranga do Sul', 23),
(4059, 'Iraí', 23),
(4060, 'Itaara', 23),
(4061, 'Itacurubi', 23),
(4062, 'Itapuca', 23),
(4063, 'Itaqui', 23),
(4064, 'Itati', 23),
(4065, 'Itatiba do Sul', 23),
(4066, 'Ivorá', 23),
(4067, 'Ivoti', 23),
(4068, 'Jaboticaba', 23),
(4069, 'Jacuizinho', 23),
(4070, 'Jacutinga', 23),
(4071, 'Jaguarão', 23),
(4072, 'Jaguari', 23),
(4073, 'Jaquirana', 23),
(4074, 'Jari', 23),
(4075, 'Jóia', 23),
(4076, 'Júlio de Castilhos', 23),
(4077, 'Lagoa Bonita do Sul', 23),
(4078, 'Lagoa dos Três Cantos', 23),
(4079, 'Lagoa Vermelha', 23),
(4080, 'Lagoão', 23),
(4081, 'Lajeado', 23),
(4082, 'Lajeado do Bugre', 23),
(4083, 'Lavras do Sul', 23),
(4084, 'Liberato Salzano', 23),
(4085, 'Lindolfo Collor', 23),
(4086, 'Linha Nova', 23),
(4087, 'Maçambara', 23),
(4088, 'Machadinho', 23),
(4089, 'Mampituba', 23),
(4090, 'Manoel Viana', 23),
(4091, 'Maquiné', 23),
(4092, 'Maratá', 23),
(4093, 'Marau', 23),
(4094, 'Marcelino Ramos', 23),
(4095, 'Mariana Pimentel', 23),
(4096, 'Mariano Moro', 23),
(4097, 'Marques de Souza', 23),
(4098, 'Mata', 23),
(4099, 'Mato Castelhano', 23),
(4100, 'Mato Leitão', 23),
(4101, 'Mato Queimado', 23),
(4102, 'Maximiliano de Almeida', 23),
(4103, 'Minas do Leão', 23),
(4104, 'Miraguaí', 23),
(4105, 'Montauri', 23),
(4106, 'Monte Alegre dos Campos', 23),
(4107, 'Monte Belo do Sul', 23),
(4108, 'Montenegro', 23),
(4109, 'Mormaço', 23),
(4110, 'Morrinhos do Sul', 23),
(4111, 'Morro Redondo', 23),
(4112, 'Morro Reuter', 23),
(4113, 'Mostardas', 23),
(4114, 'Muçum', 23),
(4115, 'Muitos Capões', 23),
(4116, 'Muliterno', 23),
(4117, 'Não-Me-Toque', 23),
(4118, 'Nicolau Vergueiro', 23),
(4119, 'Nonoai', 23),
(4120, 'Nova Alvorada', 23),
(4121, 'Nova Araçá', 23),
(4122, 'Nova Bassano', 23),
(4123, 'Nova Boa Vista', 23),
(4124, 'Nova Bréscia', 23),
(4125, 'Nova Candelária', 23),
(4126, 'Nova Esperança do Sul', 23),
(4127, 'Nova Hartz', 23),
(4128, 'Nova Pádua', 23),
(4129, 'Nova Palma', 23),
(4130, 'Nova Petrópolis', 23),
(4131, 'Nova Prata', 23),
(4132, 'Nova Ramada', 23),
(4133, 'Nova Roma do Sul', 23),
(4134, 'Nova Santa Rita', 23),
(4135, 'Novo Barreiro', 23),
(4136, 'Novo Cabrais', 23),
(4137, 'Novo Hamburgo', 23),
(4138, 'Novo Machado', 23),
(4139, 'Novo Tiradentes', 23),
(4140, 'Novo Xingu', 23),
(4141, 'Osório', 23),
(4142, 'Paim Filho', 23),
(4143, 'Palmares do Sul', 23),
(4144, 'Palmeira das Missões', 23),
(4145, 'Palmitinho', 23),
(4146, 'Panambi', 23),
(4147, 'Pantano Grande', 23),
(4148, 'Paraí', 23),
(4149, 'Paraíso do Sul', 23),
(4150, 'Pareci Novo', 23),
(4151, 'Parobé', 23),
(4152, 'Passa Sete', 23),
(4153, 'Passo do Sobrado', 23),
(4154, 'Passo Fundo', 23),
(4155, 'Paulo Bento', 23),
(4156, 'Paverama', 23),
(4157, 'Pedras Altas', 23),
(4158, 'Pedro Osório', 23),
(4159, 'Pejuçara', 23),
(4160, 'Pelotas', 23),
(4161, 'Picada Café', 23),
(4162, 'Pinhal', 23),
(4163, 'Pinhal da Serra', 23),
(4164, 'Pinhal Grande', 23),
(4165, 'Pinheirinho do Vale', 23),
(4166, 'Pinheiro Machado', 23),
(4167, 'Pirapó', 23),
(4168, 'Piratini', 23),
(4169, 'Planalto', 23),
(4170, 'Poço das Antas', 23),
(4171, 'Pontão', 23),
(4172, 'Ponte Preta', 23),
(4173, 'Portão', 23),
(4174, 'Porto Alegre', 23),
(4175, 'Porto Lucena', 23),
(4176, 'Porto Mauá', 23),
(4177, 'Porto Vera Cruz', 23),
(4178, 'Porto Xavier', 23),
(4179, 'Pouso Novo', 23),
(4180, 'Presidente Lucena', 23),
(4181, 'Progresso', 23),
(4182, 'Protásio Alves', 23),
(4183, 'Putinga', 23),
(4184, 'Quaraí', 23),
(4185, 'Quatro Irmãos', 23),
(4186, 'Quevedos', 23),
(4187, 'Quinze de Novembro', 23),
(4188, 'Redentora', 23),
(4189, 'Relvado', 23),
(4190, 'Restinga Seca', 23),
(4191, 'Rio dos Índios', 23),
(4192, 'Rio Grande', 23),
(4193, 'Rio Pardo', 23),
(4194, 'Riozinho', 23),
(4195, 'Roca Sales', 23),
(4196, 'Rodeio Bonito', 23),
(4197, 'Rolador', 23),
(4198, 'Rolante', 23),
(4199, 'Ronda Alta', 23),
(4200, 'Rondinha', 23),
(4201, 'Roque Gonzales', 23),
(4202, 'Rosário do Sul', 23),
(4203, 'Sagrada Família', 23),
(4204, 'Saldanha Marinho', 23),
(4205, 'Salto do Jacuí', 23),
(4206, 'Salvador das Missões', 23),
(4207, 'Salvador do Sul', 23),
(4208, 'Sananduva', 23),
(4209, 'Santa Bárbara do Sul', 23),
(4210, 'Santa Cecília do Sul', 23),
(4211, 'Santa Clara do Sul', 23),
(4212, 'Santa Cruz do Sul', 23),
(4213, 'Santa Margarida do Sul', 23),
(4214, 'Santa Maria', 23),
(4215, 'Santa Maria do Herval', 23),
(4216, 'Santa Rosa', 23),
(4217, 'Santa Tereza', 23),
(4218, 'Santa Vitória do Palmar', 23),
(4219, 'Santana da Boa Vista', 23),
(4220, 'Santana do Livramento', 23),
(4221, 'Santiago', 23),
(4222, 'Santo Ângelo', 23),
(4223, 'Santo Antônio da Patrulha', 23),
(4224, 'Santo Antônio das Missões', 23),
(4225, 'Santo Antônio do Palma', 23),
(4226, 'Santo Antônio do Planalto', 23),
(4227, 'Santo Augusto', 23),
(4228, 'Santo Cristo', 23),
(4229, 'Santo Expedito do Sul', 23),
(4230, 'São Borja', 23),
(4231, 'São Domingos do Sul', 23),
(4232, 'São Francisco de Assis', 23),
(4233, 'São Francisco de Paula', 23),
(4234, 'São Gabriel', 23),
(4235, 'São Jerônimo', 23),
(4236, 'São João da Urtiga', 23),
(4237, 'São João do Polêsine', 23),
(4238, 'São Jorge', 23),
(4239, 'São José das Missões', 23),
(4240, 'São José do Herval', 23),
(4241, 'São José do Hortêncio', 23),
(4242, 'São José do Inhacorá', 23),
(4243, 'São José do Norte', 23),
(4244, 'São José do Ouro', 23),
(4245, 'São José do Sul', 23),
(4246, 'São José dos Ausentes', 23),
(4247, 'São Leopoldo', 23),
(4248, 'São Lourenço do Sul', 23),
(4249, 'São Luiz Gonzaga', 23),
(4250, 'São Marcos', 23),
(4251, 'São Martinho', 23),
(4252, 'São Martinho da Serra', 23),
(4253, 'São Miguel das Missões', 23),
(4254, 'São Nicolau', 23),
(4255, 'São Paulo das Missões', 23),
(4256, 'São Pedro da Serra', 23),
(4257, 'São Pedro das Missões', 23),
(4258, 'São Pedro do Butiá', 23),
(4259, 'São Pedro do Sul', 23),
(4260, 'São Sebastião do Caí', 23),
(4261, 'São Sepé', 23),
(4262, 'São Valentim', 23),
(4263, 'São Valentim do Sul', 23),
(4264, 'São Valério do Sul', 23),
(4265, 'São Vendelino', 23),
(4266, 'São Vicente do Sul', 23),
(4267, 'Sapiranga', 23),
(4268, 'Sapucaia do Sul', 23),
(4269, 'Sarandi', 23),
(4270, 'Seberi', 23),
(4271, 'Sede Nova', 23),
(4272, 'Segredo', 23),
(4273, 'Selbach', 23),
(4274, 'Senador Salgado Filho', 23),
(4275, 'Sentinela do Sul', 23),
(4276, 'Serafina Corrêa', 23),
(4277, 'Sério', 23),
(4278, 'Sertão', 23),
(4279, 'Sertão Santana', 23),
(4280, 'Sete de Setembro', 23),
(4281, 'Severiano de Almeida', 23),
(4282, 'Silveira Martins', 23),
(4283, 'Sinimbu', 23),
(4284, 'Sobradinho', 23),
(4285, 'Soledade', 23),
(4286, 'Tabaí', 23),
(4287, 'Tapejara', 23),
(4288, 'Tapera', 23),
(4289, 'Tapes', 23),
(4290, 'Taquara', 23),
(4291, 'Taquari', 23),
(4292, 'Taquaruçu do Sul', 23),
(4293, 'Tavares', 23),
(4294, 'Tenente Portela', 23),
(4295, 'Terra de Areia', 23),
(4296, 'Teutônia', 23),
(4297, 'Tio Hugo', 23),
(4298, 'Tiradentes do Sul', 23),
(4299, 'Toropi', 23),
(4300, 'Torres', 23),
(4301, 'Tramandaí', 23),
(4302, 'Travesseiro', 23),
(4303, 'Três Arroios', 23),
(4304, 'Três Cachoeiras', 23),
(4305, 'Três Coroas', 23),
(4306, 'Três de Maio', 23),
(4307, 'Três Forquilhas', 23),
(4308, 'Três Palmeiras', 23),
(4309, 'Três Passos', 23),
(4310, 'Trindade do Sul', 23),
(4311, 'Triunfo', 23),
(4312, 'Tucunduva', 23),
(4313, 'Tunas', 23),
(4314, 'Tupanci do Sul', 23),
(4315, 'Tupanciretã', 23),
(4316, 'Tupandi', 23),
(4317, 'Tuparendi', 23),
(4318, 'Turuçu', 23),
(4319, 'Ubiretama', 23),
(4320, 'União da Serra', 23),
(4321, 'Unistalda', 23),
(4322, 'Uruguaiana', 23),
(4323, 'Vacaria', 23),
(4324, 'Vale do Sol', 23),
(4325, 'Vale Real', 23),
(4326, 'Vale Verde', 23),
(4327, 'Vanini', 23),
(4328, 'Venâncio Aires', 23),
(4329, 'Vera Cruz', 23),
(4330, 'Veranópolis', 23),
(4331, 'Vespasiano Correa', 23),
(4332, 'Viadutos', 23),
(4333, 'Viamão', 23),
(4334, 'Vicente Dutra', 23),
(4335, 'Victor Graeff', 23),
(4336, 'Vila Flores', 23),
(4337, 'Vila Lângaro', 23),
(4338, 'Vila Maria', 23),
(4339, 'Vila Nova do Sul', 23),
(4340, 'Vista Alegre', 23),
(4341, 'Vista Alegre do Prata', 23),
(4342, 'Vista Gaúcha', 23),
(4343, 'Vitória das Missões', 23),
(4344, 'Westfália', 23),
(4345, 'Xangri-lá', 23),
(4346, 'Alta Floresta d`Oeste', 21),
(4347, 'Alto Alegre dos Parecis', 21),
(4348, 'Alto Paraíso', 21),
(4349, 'Alvorada d`Oeste', 21),
(4350, 'Ariquemes', 21),
(4351, 'Buritis', 21),
(4352, 'Cabixi', 21),
(4353, 'Cacaulândia', 21),
(4354, 'Cacoal', 21),
(4355, 'Campo Novo de Rondônia', 21),
(4356, 'Candeias do Jamari', 21),
(4357, 'Castanheiras', 21),
(4358, 'Cerejeiras', 21),
(4359, 'Chupinguaia', 21),
(4360, 'Colorado do Oeste', 21),
(4361, 'Corumbiara', 21),
(4362, 'Costa Marques', 21),
(4363, 'Cujubim', 21),
(4364, 'Espigão d`Oeste', 21),
(4365, 'Governador Jorge Teixeira', 21),
(4366, 'Guajará-Mirim', 21),
(4367, 'Itapuã do Oeste', 21),
(4368, 'Jaru', 21),
(4369, 'Ji-Paraná', 21),
(4370, 'Machadinho d`Oeste', 21),
(4371, 'Ministro Andreazza', 21),
(4372, 'Mirante da Serra', 21),
(4373, 'Monte Negro', 21),
(4374, 'Nova Brasilândia d`Oeste', 21),
(4375, 'Nova Mamoré', 21),
(4376, 'Nova União', 21),
(4377, 'Novo Horizonte do Oeste', 21),
(4378, 'Ouro Preto do Oeste', 21),
(4379, 'Parecis', 21),
(4380, 'Pimenta Bueno', 21),
(4381, 'Pimenteiras do Oeste', 21),
(4382, 'Porto Velho', 21),
(4383, 'Presidente Médici', 21),
(4384, 'Primavera de Rondônia', 21),
(4385, 'Rio Crespo', 21),
(4386, 'Rolim de Moura', 21),
(4387, 'Santa Luzia d`Oeste', 21),
(4388, 'São Felipe d`Oeste', 21),
(4389, 'São Francisco do Guaporé', 21),
(4390, 'São Miguel do Guaporé', 21),
(4391, 'Seringueiras', 21),
(4392, 'Teixeirópolis', 21),
(4393, 'Theobroma', 21),
(4394, 'Urupá', 21),
(4395, 'Vale do Anari', 21),
(4396, 'Vale do Paraíso', 21),
(4397, 'Vilhena', 21),
(4398, 'Alto Alegre', 22),
(4399, 'Amajari', 22),
(4400, 'Boa Vista', 22),
(4401, 'Bonfim', 22),
(4402, 'Cantá', 22),
(4403, 'Caracaraí', 22),
(4404, 'Caroebe', 22),
(4405, 'Iracema', 22),
(4406, 'Mucajaí', 22),
(4407, 'Normandia', 22),
(4408, 'Pacaraima', 22),
(4409, 'Rorainópolis', 22),
(4410, 'São João da Baliza', 22),
(4411, 'São Luiz', 22),
(4412, 'Uiramutã', 22),
(4413, 'Abdon Batista', 24),
(4414, 'Abelardo Luz', 24),
(4415, 'Agrolândia', 24),
(4416, 'Agronômica', 24),
(4417, 'Água Doce', 24),
(4418, 'Águas de Chapecó', 24),
(4419, 'Águas Frias', 24),
(4420, 'Águas Mornas', 24),
(4421, 'Alfredo Wagner', 24),
(4422, 'Alto Bela Vista', 24),
(4423, 'Anchieta', 24),
(4424, 'Angelina', 24),
(4425, 'Anita Garibaldi', 24),
(4426, 'Anitápolis', 24),
(4427, 'Antônio Carlos', 24),
(4428, 'Apiúna', 24),
(4429, 'Arabutã', 24),
(4430, 'Araquari', 24),
(4431, 'Araranguá', 24),
(4432, 'Armazém', 24),
(4433, 'Arroio Trinta', 24),
(4434, 'Arvoredo', 24),
(4435, 'Ascurra', 24),
(4436, 'Atalanta', 24),
(4437, 'Aurora', 24),
(4438, 'Balneário Arroio do Silva', 24),
(4439, 'Balneário Barra do Sul', 24),
(4440, 'Balneário Camboriú', 24),
(4441, 'Balneário Gaivota', 24),
(4442, 'Bandeirante', 24),
(4443, 'Barra Bonita', 24),
(4444, 'Barra Velha', 24),
(4445, 'Bela Vista do Toldo', 24),
(4446, 'Belmonte', 24),
(4447, 'Benedito Novo', 24),
(4448, 'Biguaçu', 24),
(4449, 'Blumenau', 24),
(4450, 'Bocaina do Sul', 24),
(4451, 'Bom Jardim da Serra', 24),
(4452, 'Bom Jesus', 24),
(4453, 'Bom Jesus do Oeste', 24),
(4454, 'Bom Retiro', 24),
(4455, 'Bombinhas', 24),
(4456, 'Botuverá', 24),
(4457, 'Braço do Norte', 24),
(4458, 'Braço do Trombudo', 24),
(4459, 'Brunópolis', 24),
(4460, 'Brusque', 24),
(4461, 'Caçador', 24),
(4462, 'Caibi', 24),
(4463, 'Calmon', 24),
(4464, 'Camboriú', 24),
(4465, 'Campo Alegre', 24),
(4466, 'Campo Belo do Sul', 24),
(4467, 'Campo Erê', 24),
(4468, 'Campos Novos', 24),
(4469, 'Canelinha', 24),
(4470, 'Canoinhas', 24),
(4471, 'Capão Alto', 24),
(4472, 'Capinzal', 24),
(4473, 'Capivari de Baixo', 24),
(4474, 'Catanduvas', 24),
(4475, 'Caxambu do Sul', 24),
(4476, 'Celso Ramos', 24),
(4477, 'Cerro Negro', 24),
(4478, 'Chapadão do Lageado', 24),
(4479, 'Chapecó', 24),
(4480, 'Cocal do Sul', 24),
(4481, 'Concórdia', 24),
(4482, 'Cordilheira Alta', 24),
(4483, 'Coronel Freitas', 24),
(4484, 'Coronel Martins', 24),
(4485, 'Correia Pinto', 24),
(4486, 'Corupá', 24),
(4487, 'Criciúma', 24),
(4488, 'Cunha Porã', 24),
(4489, 'Cunhataí', 24),
(4490, 'Curitibanos', 24),
(4491, 'Descanso', 24),
(4492, 'Dionísio Cerqueira', 24),
(4493, 'Dona Emma', 24),
(4494, 'Doutor Pedrinho', 24),
(4495, 'Entre Rios', 24),
(4496, 'Ermo', 24),
(4497, 'Erval Velho', 24),
(4498, 'Faxinal dos Guedes', 24),
(4499, 'Flor do Sertão', 24),
(4500, 'Florianópolis', 24),
(4501, 'Formosa do Sul', 24),
(4502, 'Forquilhinha', 24),
(4503, 'Fraiburgo', 24),
(4504, 'Frei Rogério', 24),
(4505, 'Galvão', 24),
(4506, 'Garopaba', 24),
(4507, 'Garuva', 24),
(4508, 'Gaspar', 24),
(4509, 'Governador Celso Ramos', 24),
(4510, 'Grão Pará', 24),
(4511, 'Gravatal', 24),
(4512, 'Guabiruba', 24),
(4513, 'Guaraciaba', 24),
(4514, 'Guaramirim', 24),
(4515, 'Guarujá do Sul', 24),
(4516, 'Guatambú', 24),
(4517, 'Herval d`Oeste', 24),
(4518, 'Ibiam', 24),
(4519, 'Ibicaré', 24),
(4520, 'Ibirama', 24),
(4521, 'Içara', 24),
(4522, 'Ilhota', 24),
(4523, 'Imaruí', 24),
(4524, 'Imbituba', 24),
(4525, 'Imbuia', 24),
(4526, 'Indaial', 24),
(4527, 'Iomerê', 24),
(4528, 'Ipira', 24),
(4529, 'Iporã do Oeste', 24),
(4530, 'Ipuaçu', 24),
(4531, 'Ipumirim', 24),
(4532, 'Iraceminha', 24),
(4533, 'Irani', 24),
(4534, 'Irati', 24),
(4535, 'Irineópolis', 24),
(4536, 'Itá', 24),
(4537, 'Itaiópolis', 24),
(4538, 'Itajaí', 24),
(4539, 'Itapema', 24),
(4540, 'Itapiranga', 24),
(4541, 'Itapoá', 24),
(4542, 'Ituporanga', 24),
(4543, 'Jaborá', 24),
(4544, 'Jacinto Machado', 24),
(4545, 'Jaguaruna', 24),
(4546, 'Jaraguá do Sul', 24),
(4547, 'Jardinópolis', 24),
(4548, 'Joaçaba', 24),
(4549, 'Joinville', 24),
(4550, 'José Boiteux', 24),
(4551, 'Jupiá', 24),
(4552, 'Lacerdópolis', 24),
(4553, 'Lages', 24),
(4554, 'Laguna', 24),
(4555, 'Lajeado Grande', 24),
(4556, 'Laurentino', 24),
(4557, 'Lauro Muller', 24),
(4558, 'Lebon Régis', 24),
(4559, 'Leoberto Leal', 24),
(4560, 'Lindóia do Sul', 24),
(4561, 'Lontras', 24),
(4562, 'Luiz Alves', 24),
(4563, 'Luzerna', 24),
(4564, 'Macieira', 24),
(4565, 'Mafra', 24),
(4566, 'Major Gercino', 24),
(4567, 'Major Vieira', 24),
(4568, 'Maracajá', 24),
(4569, 'Maravilha', 24),
(4570, 'Marema', 24),
(4571, 'Massaranduba', 24),
(4572, 'Matos Costa', 24),
(4573, 'Meleiro', 24),
(4574, 'Mirim Doce', 24),
(4575, 'Modelo', 24),
(4576, 'Mondaí', 24),
(4577, 'Monte Carlo', 24),
(4578, 'Monte Castelo', 24),
(4579, 'Morro da Fumaça', 24),
(4580, 'Morro Grande', 24),
(4581, 'Navegantes', 24),
(4582, 'Nova Erechim', 24),
(4583, 'Nova Itaberaba', 24),
(4584, 'Nova Trento', 24),
(4585, 'Nova Veneza', 24),
(4586, 'Novo Horizonte', 24),
(4587, 'Orleans', 24),
(4588, 'Otacílio Costa', 24),
(4589, 'Ouro', 24),
(4590, 'Ouro Verde', 24),
(4591, 'Paial', 24),
(4592, 'Painel', 24),
(4593, 'Palhoça', 24),
(4594, 'Palma Sola', 24),
(4595, 'Palmeira', 24),
(4596, 'Palmitos', 24),
(4597, 'Papanduva', 24),
(4598, 'Paraíso', 24),
(4599, 'Passo de Torres', 24),
(4600, 'Passos Maia', 24),
(4601, 'Paulo Lopes', 24),
(4602, 'Pedras Grandes', 24),
(4603, 'Penha', 24),
(4604, 'Peritiba', 24),
(4605, 'Petrolândia', 24),
(4606, 'Piçarras', 24),
(4607, 'Pinhalzinho', 24),
(4608, 'Pinheiro Preto', 24),
(4609, 'Piratuba', 24),
(4610, 'Planalto Alegre', 24),
(4611, 'Pomerode', 24),
(4612, 'Ponte Alta', 24),
(4613, 'Ponte Alta do Norte', 24),
(4614, 'Ponte Serrada', 24),
(4615, 'Porto Belo', 24),
(4616, 'Porto União', 24),
(4617, 'Pouso Redondo', 24),
(4618, 'Praia Grande', 24),
(4619, 'Presidente Castelo Branco', 24),
(4620, 'Presidente Getúlio', 24),
(4621, 'Presidente Nereu', 24),
(4622, 'Princesa', 24),
(4623, 'Quilombo', 24),
(4624, 'Rancho Queimado', 24),
(4625, 'Rio das Antas', 24),
(4626, 'Rio do Campo', 24),
(4627, 'Rio do Oeste', 24),
(4628, 'Rio do Sul', 24),
(4629, 'Rio dos Cedros', 24),
(4630, 'Rio Fortuna', 24),
(4631, 'Rio Negrinho', 24),
(4632, 'Rio Rufino', 24),
(4633, 'Riqueza', 24),
(4634, 'Rodeio', 24),
(4635, 'Romelândia', 24),
(4636, 'Salete', 24),
(4637, 'Saltinho', 24),
(4638, 'Salto Veloso', 24),
(4639, 'Sangão', 24),
(4640, 'Santa Cecília', 24),
(4641, 'Santa Helena', 24),
(4642, 'Santa Rosa de Lima', 24),
(4643, 'Santa Rosa do Sul', 24),
(4644, 'Santa Terezinha', 24),
(4645, 'Santa Terezinha do Progresso', 24),
(4646, 'Santiago do Sul', 24),
(4647, 'Santo Amaro da Imperatriz', 24),
(4648, 'São Bento do Sul', 24),
(4649, 'São Bernardino', 24),
(4650, 'São Bonifácio', 24),
(4651, 'São Carlos', 24),
(4652, 'São Cristovão do Sul', 24),
(4653, 'São Domingos', 24),
(4654, 'São Francisco do Sul', 24),
(4655, 'São João Batista', 24),
(4656, 'São João do Itaperiú', 24),
(4657, 'São João do Oeste', 24),
(4658, 'São João do Sul', 24),
(4659, 'São Joaquim', 24),
(4660, 'São José', 24),
(4661, 'São José do Cedro', 24),
(4662, 'São José do Cerrito', 24),
(4663, 'São Lourenço do Oeste', 24),
(4664, 'São Ludgero', 24),
(4665, 'São Martinho', 24),
(4666, 'São Miguel da Boa Vista', 24),
(4667, 'São Miguel do Oeste', 24),
(4668, 'São Pedro de Alcântara', 24),
(4669, 'Saudades', 24),
(4670, 'Schroeder', 24),
(4671, 'Seara', 24),
(4672, 'Serra Alta', 24),
(4673, 'Siderópolis', 24),
(4674, 'Sombrio', 24),
(4675, 'Sul Brasil', 24),
(4676, 'Taió', 24),
(4677, 'Tangará', 24),
(4678, 'Tigrinhos', 24),
(4679, 'Tijucas', 24),
(4680, 'Timbé do Sul', 24),
(4681, 'Timbó', 24),
(4682, 'Timbó Grande', 24),
(4683, 'Três Barras', 24),
(4684, 'Treviso', 24),
(4685, 'Treze de Maio', 24),
(4686, 'Treze Tílias', 24),
(4687, 'Trombudo Central', 24),
(4688, 'Tubarão', 24),
(4689, 'Tunápolis', 24),
(4690, 'Turvo', 24),
(4691, 'União do Oeste', 24),
(4692, 'Urubici', 24),
(4693, 'Urupema', 24),
(4694, 'Urussanga', 24),
(4695, 'Vargeão', 24),
(4696, 'Vargem', 24),
(4697, 'Vargem Bonita', 24),
(4698, 'Vidal Ramos', 24),
(4699, 'Videira', 24),
(4700, 'Vitor Meireles', 24),
(4701, 'Witmarsum', 24),
(4702, 'Xanxerê', 24),
(4703, 'Xavantina', 24),
(4704, 'Xaxim', 24),
(4705, 'Zortéa', 24),
(4706, 'Adamantina', 26),
(4707, 'Adolfo', 26),
(4708, 'Aguaí', 26),
(4709, 'Águas da Prata', 26),
(4710, 'Águas de Lindóia', 26),
(4711, 'Águas de Santa Bárbara', 26),
(4712, 'Águas de São Pedro', 26),
(4713, 'Agudos', 26),
(4714, 'Alambari', 26),
(4715, 'Alfredo Marcondes', 26),
(4716, 'Altair', 26),
(4717, 'Altinópolis', 26),
(4718, 'Alto Alegre', 26),
(4719, 'Alumínio', 26),
(4720, 'Álvares Florence', 26),
(4721, 'Álvares Machado', 26),
(4722, 'Álvaro de Carvalho', 26),
(4723, 'Alvinlândia', 26),
(4724, 'Americana', 26),
(4725, 'Américo Brasiliense', 26),
(4726, 'Américo de Campos', 26),
(4727, 'Amparo', 26),
(4728, 'Analândia', 26),
(4729, 'Andradina', 26),
(4730, 'Angatuba', 26),
(4731, 'Anhembi', 26),
(4732, 'Anhumas', 26),
(4733, 'Aparecida', 26),
(4734, 'Aparecida d`Oeste', 26),
(4735, 'Apiaí', 26),
(4736, 'Araçariguama', 26),
(4737, 'Araçatuba', 26),
(4738, 'Araçoiaba da Serra', 26),
(4739, 'Aramina', 26),
(4740, 'Arandu', 26),
(4741, 'Arapeí', 26),
(4742, 'Araraquara', 26),
(4743, 'Araras', 26),
(4744, 'Arco-Íris', 26),
(4745, 'Arealva', 26),
(4746, 'Areias', 26),
(4747, 'Areiópolis', 26),
(4748, 'Ariranha', 26),
(4749, 'Artur Nogueira', 26),
(4750, 'Arujá', 26),
(4751, 'Aspásia', 26),
(4752, 'Assis', 26),
(4753, 'Atibaia', 26),
(4754, 'Auriflama', 26),
(4755, 'Avaí', 26),
(4756, 'Avanhandava', 26),
(4757, 'Avaré', 26),
(4758, 'Bady Bassitt', 26),
(4759, 'Balbinos', 26),
(4760, 'Bálsamo', 26),
(4761, 'Bananal', 26),
(4762, 'Barão de Antonina', 26),
(4763, 'Barbosa', 26),
(4764, 'Bariri', 26),
(4765, 'Barra Bonita', 26),
(4766, 'Barra do Chapéu', 26),
(4767, 'Barra do Turvo', 26),
(4768, 'Barretos', 26),
(4769, 'Barrinha', 26),
(4770, 'Barueri', 26),
(4771, 'Bastos', 26),
(4772, 'Batatais', 26),
(4773, 'Bauru', 26),
(4774, 'Bebedouro', 26),
(4775, 'Bento de Abreu', 26),
(4776, 'Bernardino de Campos', 26),
(4777, 'Bertioga', 26),
(4778, 'Bilac', 26),
(4779, 'Birigui', 26),
(4780, 'Biritiba-Mirim', 26),
(4781, 'Boa Esperança do Sul', 26),
(4782, 'Bocaina', 26),
(4783, 'Bofete', 26),
(4784, 'Boituva', 26),
(4785, 'Bom Jesus dos Perdões', 26),
(4786, 'Bom Sucesso de Itararé', 26),
(4787, 'Borá', 26),
(4788, 'Boracéia', 26),
(4789, 'Borborema', 26),
(4790, 'Borebi', 26),
(4791, 'Botucatu', 26),
(4792, 'Bragança Paulista', 26),
(4793, 'Braúna', 26),
(4794, 'Brejo Alegre', 26),
(4795, 'Brodowski', 26),
(4796, 'Brotas', 26),
(4797, 'Buri', 26),
(4798, 'Buritama', 26),
(4799, 'Buritizal', 26),
(4800, 'Cabrália Paulista', 26),
(4801, 'Cabreúva', 26),
(4802, 'Caçapava', 26),
(4803, 'Cachoeira Paulista', 26),
(4804, 'Caconde', 26),
(4805, 'Cafelândia', 26),
(4806, 'Caiabu', 26),
(4807, 'Caieiras', 26),
(4808, 'Caiuá', 26),
(4809, 'Cajamar', 26),
(4810, 'Cajati', 26),
(4811, 'Cajobi', 26),
(4812, 'Cajuru', 26),
(4813, 'Campina do Monte Alegre', 26),
(4814, 'Campinas', 26),
(4815, 'Campo Limpo Paulista', 26),
(4816, 'Campos do Jordão', 26),
(4817, 'Campos Novos Paulista', 26),
(4818, 'Cananéia', 26),
(4819, 'Canas', 26),
(4820, 'Cândido Mota', 26),
(4821, 'Cândido Rodrigues', 26),
(4822, 'Canitar', 26),
(4823, 'Capão Bonito', 26),
(4824, 'Capela do Alto', 26),
(4825, 'Capivari', 26),
(4826, 'Caraguatatuba', 26),
(4827, 'Carapicuíba', 26),
(4828, 'Cardoso', 26),
(4829, 'Casa Branca', 26),
(4830, 'Cássia dos Coqueiros', 26),
(4831, 'Castilho', 26),
(4832, 'Catanduva', 26),
(4833, 'Catiguá', 26),
(4834, 'Cedral', 26),
(4835, 'Cerqueira César', 26),
(4836, 'Cerquilho', 26),
(4837, 'Cesário Lange', 26),
(4838, 'Charqueada', 26),
(4839, 'Chavantes', 26),
(4840, 'Clementina', 26),
(4841, 'Colina', 26),
(4842, 'Colômbia', 26),
(4843, 'Conchal', 26),
(4844, 'Conchas', 26),
(4845, 'Cordeirópolis', 26),
(4846, 'Coroados', 26),
(4847, 'Coronel Macedo', 26),
(4848, 'Corumbataí', 26),
(4849, 'Cosmópolis', 26),
(4850, 'Cosmorama', 26),
(4851, 'Cotia', 26),
(4852, 'Cravinhos', 26),
(4853, 'Cristais Paulista', 26),
(4854, 'Cruzália', 26),
(4855, 'Cruzeiro', 26),
(4856, 'Cubatão', 26),
(4857, 'Cunha', 26),
(4858, 'Descalvado', 26),
(4859, 'Diadema', 26),
(4860, 'Dirce Reis', 26),
(4861, 'Divinolândia', 26),
(4862, 'Dobrada', 26),
(4863, 'Dois Córregos', 26),
(4864, 'Dolcinópolis', 26),
(4865, 'Dourado', 26),
(4866, 'Dracena', 26),
(4867, 'Duartina', 26),
(4868, 'Dumont', 26),
(4869, 'Echaporã', 26),
(4870, 'Eldorado', 26),
(4871, 'Elias Fausto', 26),
(4872, 'Elisiário', 26),
(4873, 'Embaúba', 26),
(4874, 'Embu', 26),
(4875, 'Embu-Guaçu', 26),
(4876, 'Emilianópolis', 26),
(4877, 'Engenheiro Coelho', 26),
(4878, 'Espírito Santo do Pinhal', 26),
(4879, 'Espírito Santo do Turvo', 26),
(4880, 'Estiva Gerbi', 26),
(4881, 'Estrela d`Oeste', 26),
(4882, 'Estrela do Norte', 26),
(4883, 'Euclides da Cunha Paulista', 26),
(4884, 'Fartura', 26),
(4885, 'Fernando Prestes', 26),
(4886, 'Fernandópolis', 26),
(4887, 'Fernão', 26),
(4888, 'Ferraz de Vasconcelos', 26),
(4889, 'Flora Rica', 26),
(4890, 'Floreal', 26),
(4891, 'Flórida Paulista', 26),
(4892, 'Florínia', 26),
(4893, 'Franca', 26),
(4894, 'Francisco Morato', 26),
(4895, 'Franco da Rocha', 26),
(4896, 'Gabriel Monteiro', 26),
(4897, 'Gália', 26),
(4898, 'Garça', 26),
(4899, 'Gastão Vidigal', 26),
(4900, 'Gavião Peixoto', 26),
(4901, 'General Salgado', 26),
(4902, 'Getulina', 26),
(4903, 'Glicério', 26),
(4904, 'Guaiçara', 26),
(4905, 'Guaimbê', 26),
(4906, 'Guaíra', 26),
(4907, 'Guapiaçu', 26),
(4908, 'Guapiara', 26),
(4909, 'Guará', 26),
(4910, 'Guaraçaí', 26),
(4911, 'Guaraci', 26),
(4912, 'Guarani d`Oeste', 26),
(4913, 'Guarantã', 26),
(4914, 'Guararapes', 26),
(4915, 'Guararema', 26),
(4916, 'Guaratinguetá', 26),
(4917, 'Guareí', 26),
(4918, 'Guariba', 26),
(4919, 'Guarujá', 26),
(4920, 'Guarulhos', 26),
(4921, 'Guatapará', 26),
(4922, 'Guzolândia', 26),
(4923, 'Herculândia', 26),
(4924, 'Holambra', 26),
(4925, 'Hortolândia', 26),
(4926, 'Iacanga', 26),
(4927, 'Iacri', 26),
(4928, 'Iaras', 26),
(4929, 'Ibaté', 26),
(4930, 'Ibirá', 26),
(4931, 'Ibirarema', 26),
(4932, 'Ibitinga', 26),
(4933, 'Ibiúna', 26),
(4934, 'Icém', 26),
(4935, 'Iepê', 26),
(4936, 'Igaraçu do Tietê', 26),
(4937, 'Igarapava', 26),
(4938, 'Igaratá', 26),
(4939, 'Iguape', 26),
(4940, 'Ilha Comprida', 26),
(4941, 'Ilha Solteira', 26),
(4942, 'Ilhabela', 26),
(4943, 'Indaiatuba', 26),
(4944, 'Indiana', 26),
(4945, 'Indiaporã', 26),
(4946, 'Inúbia Paulista', 26),
(4947, 'Ipaussu', 26),
(4948, 'Iperó', 26),
(4949, 'Ipeúna', 26),
(4950, 'Ipiguá', 26),
(4951, 'Iporanga', 26),
(4952, 'Ipuã', 26),
(4953, 'Iracemápolis', 26),
(4954, 'Irapuã', 26),
(4955, 'Irapuru', 26),
(4956, 'Itaberá', 26),
(4957, 'Itaí', 26),
(4958, 'Itajobi', 26),
(4959, 'Itaju', 26),
(4960, 'Itanhaém', 26),
(4961, 'Itaóca', 26),
(4962, 'Itapecerica da Serra', 26),
(4963, 'Itapetininga', 26),
(4964, 'Itapeva', 26),
(4965, 'Itapevi', 26),
(4966, 'Itapira', 26),
(4967, 'Itapirapuã Paulista', 26),
(4968, 'Itápolis', 26),
(4969, 'Itaporanga', 26),
(4970, 'Itapuí', 26),
(4971, 'Itapura', 26),
(4972, 'Itaquaquecetuba', 26),
(4973, 'Itararé', 26),
(4974, 'Itariri', 26),
(4975, 'Itatiba', 26),
(4976, 'Itatinga', 26),
(4977, 'Itirapina', 26),
(4978, 'Itirapuã', 26),
(4979, 'Itobi', 26),
(4980, 'Itu', 26),
(4981, 'Itupeva', 26),
(4982, 'Ituverava', 26),
(4983, 'Jaborandi', 26),
(4984, 'Jaboticabal', 26),
(4985, 'Jacareí', 26),
(4986, 'Jaci', 26),
(4987, 'Jacupiranga', 26),
(4988, 'Jaguariúna', 26),
(4989, 'Jales', 26),
(4990, 'Jambeiro', 26),
(4991, 'Jandira', 26),
(4992, 'Jardinópolis', 26),
(4993, 'Jarinu', 26),
(4994, 'Jaú', 26),
(4995, 'Jeriquara', 26),
(4996, 'Joanópolis', 26),
(4997, 'João Ramalho', 26),
(4998, 'José Bonifácio', 26),
(4999, 'Júlio Mesquita', 26),
(5000, 'Jumirim', 26),
(5001, 'Jundiaí', 26),
(5002, 'Junqueirópolis', 26),
(5003, 'Juquiá', 26),
(5004, 'Juquitiba', 26),
(5005, 'Lagoinha', 26),
(5006, 'Laranjal Paulista', 26),
(5007, 'Lavínia', 26),
(5008, 'Lavrinhas', 26),
(5009, 'Leme', 26),
(5010, 'Lençóis Paulista', 26),
(5011, 'Limeira', 26),
(5012, 'Lindóia', 26),
(5013, 'Lins', 26),
(5014, 'Lorena', 26),
(5015, 'Lourdes', 26),
(5016, 'Louveira', 26),
(5017, 'Lucélia', 26),
(5018, 'Lucianópolis', 26),
(5019, 'Luís Antônio', 26),
(5020, 'Luiziânia', 26),
(5021, 'Lupércio', 26),
(5022, 'Lutécia', 26),
(5023, 'Macatuba', 26),
(5024, 'Macaubal', 26),
(5025, 'Macedônia', 26),
(5026, 'Magda', 26),
(5027, 'Mairinque', 26),
(5028, 'Mairiporã', 26),
(5029, 'Manduri', 26),
(5030, 'Marabá Paulista', 26),
(5031, 'Maracaí', 26),
(5032, 'Marapoama', 26),
(5033, 'Mariápolis', 26),
(5034, 'Marília', 26),
(5035, 'Marinópolis', 26),
(5036, 'Martinópolis', 26),
(5037, 'Matão', 26),
(5038, 'Mauá', 26),
(5039, 'Mendonça', 26),
(5040, 'Meridiano', 26),
(5041, 'Mesópolis', 26),
(5042, 'Miguelópolis', 26),
(5043, 'Mineiros do Tietê', 26),
(5044, 'Mira Estrela', 26),
(5045, 'Miracatu', 26),
(5046, 'Mirandópolis', 26),
(5047, 'Mirante do Paranapanema', 26),
(5048, 'Mirassol', 26),
(5049, 'Mirassolândia', 26),
(5050, 'Mococa', 26),
(5051, 'Mogi das Cruzes', 26),
(5052, 'Mogi Guaçu', 26),
(5053, 'Moji Mirim', 26),
(5054, 'Mombuca', 26),
(5055, 'Monções', 26),
(5056, 'Mongaguá', 26),
(5057, 'Monte Alegre do Sul', 26),
(5058, 'Monte Alto', 26),
(5059, 'Monte Aprazível', 26),
(5060, 'Monte Azul Paulista', 26),
(5061, 'Monte Castelo', 26),
(5062, 'Monte Mor', 26),
(5063, 'Monteiro Lobato', 26),
(5064, 'Morro Agudo', 26),
(5065, 'Morungaba', 26),
(5066, 'Motuca', 26),
(5067, 'Murutinga do Sul', 26),
(5068, 'Nantes', 26),
(5069, 'Narandiba', 26),
(5070, 'Natividade da Serra', 26),
(5071, 'Nazaré Paulista', 26),
(5072, 'Neves Paulista', 26),
(5073, 'Nhandeara', 26),
(5074, 'Nipoã', 26),
(5075, 'Nova Aliança', 26),
(5076, 'Nova Campina', 26),
(5077, 'Nova Canaã Paulista', 26),
(5078, 'Nova Castilho', 26),
(5079, 'Nova Europa', 26),
(5080, 'Nova Granada', 26),
(5081, 'Nova Guataporanga', 26),
(5082, 'Nova Independência', 26),
(5083, 'Nova Luzitânia', 26),
(5084, 'Nova Odessa', 26),
(5085, 'Novais', 26),
(5086, 'Novo Horizonte', 26),
(5087, 'Nuporanga', 26),
(5088, 'Ocauçu', 26),
(5089, 'Óleo', 26),
(5090, 'Olímpia', 26),
(5091, 'Onda Verde', 26),
(5092, 'Oriente', 26),
(5093, 'Orindiúva', 26),
(5094, 'Orlândia', 26),
(5095, 'Osasco', 26),
(5096, 'Oscar Bressane', 26),
(5097, 'Osvaldo Cruz', 26),
(5098, 'Ourinhos', 26),
(5099, 'Ouro Verde', 26),
(5100, 'Ouroeste', 26),
(5101, 'Pacaembu', 26),
(5102, 'Palestina', 26),
(5103, 'Palmares Paulista', 26),
(5104, 'Palmeira d`Oeste', 26),
(5105, 'Palmital', 26),
(5106, 'Panorama', 26),
(5107, 'Paraguaçu Paulista', 26),
(5108, 'Paraibuna', 26),
(5109, 'Paraíso', 26),
(5110, 'Paranapanema', 26),
(5111, 'Paranapuã', 26),
(5112, 'Parapuã', 26),
(5113, 'Pardinho', 26),
(5114, 'Pariquera-Açu', 26),
(5115, 'Parisi', 26),
(5116, 'Patrocínio Paulista', 26),
(5117, 'Paulicéia', 26),
(5118, 'Paulínia', 26),
(5119, 'Paulistânia', 26),
(5120, 'Paulo de Faria', 26),
(5121, 'Pederneiras', 26),
(5122, 'Pedra Bela', 26),
(5123, 'Pedranópolis', 26),
(5124, 'Pedregulho', 26),
(5125, 'Pedreira', 26),
(5126, 'Pedrinhas Paulista', 26),
(5127, 'Pedro de Toledo', 26),
(5128, 'Penápolis', 26),
(5129, 'Pereira Barreto', 26),
(5130, 'Pereiras', 26),
(5131, 'Peruíbe', 26),
(5132, 'Piacatu', 26),
(5133, 'Piedade', 26),
(5134, 'Pilar do Sul', 26),
(5135, 'Pindamonhangaba', 26),
(5136, 'Pindorama', 26),
(5137, 'Pinhalzinho', 26),
(5138, 'Piquerobi', 26),
(5139, 'Piquete', 26),
(5140, 'Piracaia', 26),
(5141, 'Piracicaba', 26),
(5142, 'Piraju', 26),
(5143, 'Pirajuí', 26),
(5144, 'Pirangi', 26),
(5145, 'Pirapora do Bom Jesus', 26),
(5146, 'Pirapozinho', 26),
(5147, 'Pirassununga', 26),
(5148, 'Piratininga', 26),
(5149, 'Pitangueiras', 26),
(5150, 'Planalto', 26),
(5151, 'Platina', 26),
(5152, 'Poá', 26),
(5153, 'Poloni', 26),
(5154, 'Pompéia', 26),
(5155, 'Pongaí', 26),
(5156, 'Pontal', 26),
(5157, 'Pontalinda', 26),
(5158, 'Pontes Gestal', 26),
(5159, 'Populina', 26),
(5160, 'Porangaba', 26),
(5161, 'Porto Feliz', 26),
(5162, 'Porto Ferreira', 26),
(5163, 'Potim', 26),
(5164, 'Potirendaba', 26),
(5165, 'Pracinha', 26),
(5166, 'Pradópolis', 26),
(5167, 'Praia Grande', 26),
(5168, 'Pratânia', 26),
(5169, 'Presidente Alves', 26),
(5170, 'Presidente Bernardes', 26),
(5171, 'Presidente Epitácio', 26),
(5172, 'Presidente Prudente', 26),
(5173, 'Presidente Venceslau', 26),
(5174, 'Promissão', 26),
(5175, 'Quadra', 26),
(5176, 'Quatá', 26),
(5177, 'Queiroz', 26),
(5178, 'Queluz', 26),
(5179, 'Quintana', 26),
(5180, 'Rafard', 26),
(5181, 'Rancharia', 26),
(5182, 'Redenção da Serra', 26),
(5183, 'Regente Feijó', 26),
(5184, 'Reginópolis', 26),
(5185, 'Registro', 26),
(5186, 'Restinga', 26),
(5187, 'Ribeira', 26),
(5188, 'Ribeirão Bonito', 26),
(5189, 'Ribeirão Branco', 26),
(5190, 'Ribeirão Corrente', 26),
(5191, 'Ribeirão do Sul', 26),
(5192, 'Ribeirão dos Índios', 26),
(5193, 'Ribeirão Grande', 26),
(5194, 'Ribeirão Pires', 26),
(5195, 'Ribeirão Preto', 26),
(5196, 'Rifaina', 26),
(5197, 'Rincão', 26),
(5198, 'Rinópolis', 26),
(5199, 'Rio Claro', 26),
(5200, 'Rio das Pedras', 26),
(5201, 'Rio Grande da Serra', 26),
(5202, 'Riolândia', 26),
(5203, 'Riversul', 26),
(5204, 'Rosana', 26),
(5205, 'Roseira', 26),
(5206, 'Rubiácea', 26),
(5207, 'Rubinéia', 26),
(5208, 'Sabino', 26),
(5209, 'Sagres', 26),
(5210, 'Sales', 26),
(5211, 'Sales Oliveira', 26),
(5212, 'Salesópolis', 26),
(5213, 'Salmourão', 26),
(5214, 'Saltinho', 26),
(5215, 'Salto', 26),
(5216, 'Salto de Pirapora', 26),
(5217, 'Salto Grande', 26),
(5218, 'Sandovalina', 26),
(5219, 'Santa Adélia', 26),
(5220, 'Santa Albertina', 26),
(5221, 'Santa Bárbara d`Oeste', 26),
(5222, 'Santa Branca', 26),
(5223, 'Santa Clara d`Oeste', 26),
(5224, 'Santa Cruz da Conceição', 26),
(5225, 'Santa Cruz da Esperança', 26),
(5226, 'Santa Cruz das Palmeiras', 26),
(5227, 'Santa Cruz do Rio Pardo', 26),
(5228, 'Santa Ernestina', 26),
(5229, 'Santa Fé do Sul', 26),
(5230, 'Santa Gertrudes', 26),
(5231, 'Santa Isabel', 26),
(5232, 'Santa Lúcia', 26),
(5233, 'Santa Maria da Serra', 26),
(5234, 'Santa Mercedes', 26),
(5235, 'Santa Rita d`Oeste', 26),
(5236, 'Santa Rita do Passa Quatro', 26),
(5237, 'Santa Rosa de Viterbo', 26),
(5238, 'Santa Salete', 26),
(5239, 'Santana da Ponte Pensa', 26),
(5240, 'Santana de Parnaíba', 26),
(5241, 'Santo Anastácio', 26),
(5242, 'Santo André', 26),
(5243, 'Santo Antônio da Alegria', 26),
(5244, 'Santo Antônio de Posse', 26),
(5245, 'Santo Antônio do Aracanguá', 26),
(5246, 'Santo Antônio do Jardim', 26),
(5247, 'Santo Antônio do Pinhal', 26),
(5248, 'Santo Expedito', 26),
(5249, 'Santópolis do Aguapeí', 26),
(5250, 'Santos', 26),
(5251, 'São Bento do Sapucaí', 26),
(5252, 'São Bernardo do Campo', 26),
(5253, 'São Caetano do Sul', 26),
(5254, 'São Carlos', 26),
(5255, 'São Francisco', 26),
(5256, 'São João da Boa Vista', 26),
(5257, 'São João das Duas Pontes', 26),
(5258, 'São João de Iracema', 26),
(5259, 'São João do Pau d`Alho', 26),
(5260, 'São Joaquim da Barra', 26),
(5261, 'São José da Bela Vista', 26),
(5262, 'São José do Barreiro', 26),
(5263, 'São José do Rio Pardo', 26),
(5264, 'São José do Rio Preto', 26),
(5265, 'São José dos Campos', 26),
(5266, 'São Lourenço da Serra', 26),
(5267, 'São Luís do Paraitinga', 26),
(5268, 'São Manuel', 26),
(5269, 'São Miguel Arcanjo', 26),
(5270, 'São Paulo', 26),
(5271, 'São Pedro', 26),
(5272, 'São Pedro do Turvo', 26),
(5273, 'São Roque', 26),
(5274, 'São Sebastião', 26),
(5275, 'São Sebastião da Grama', 26),
(5276, 'São Simão', 26),
(5277, 'São Vicente', 26),
(5278, 'Sarapuí', 26),
(5279, 'Sarutaiá', 26),
(5280, 'Sebastianópolis do Sul', 26),
(5281, 'Serra Azul', 26),
(5282, 'Serra Negra', 26),
(5283, 'Serrana', 26),
(5284, 'Sertãozinho', 26),
(5285, 'Sete Barras', 26),
(5286, 'Severínia', 26),
(5287, 'Silveiras', 26),
(5288, 'Socorro', 26),
(5289, 'Sorocaba', 26),
(5290, 'Sud Mennucci', 26),
(5291, 'Sumaré', 26),
(5292, 'Suzanápolis', 26),
(5293, 'Suzano', 26),
(5294, 'Tabapuã', 26),
(5295, 'Tabatinga', 26),
(5296, 'Taboão da Serra', 26),
(5297, 'Taciba', 26),
(5298, 'Taguaí', 26),
(5299, 'Taiaçu', 26),
(5300, 'Taiúva', 26),
(5301, 'Tambaú', 26),
(5302, 'Tanabi', 26),
(5303, 'Tapiraí', 26),
(5304, 'Tapiratiba', 26),
(5305, 'Taquaral', 26),
(5306, 'Taquaritinga', 26),
(5307, 'Taquarituba', 26),
(5308, 'Taquarivaí', 26),
(5309, 'Tarabai', 26),
(5310, 'Tarumã', 26),
(5311, 'Tatuí', 26),
(5312, 'Taubaté', 26),
(5313, 'Tejupá', 26),
(5314, 'Teodoro Sampaio', 26),
(5315, 'Terra Roxa', 26),
(5316, 'Tietê', 26),
(5317, 'Timburi', 26),
(5318, 'Torre de Pedra', 26),
(5319, 'Torrinha', 26),
(5320, 'Trabiju', 26),
(5321, 'Tremembé', 26),
(5322, 'Três Fronteiras', 26),
(5323, 'Tuiuti', 26),
(5324, 'Tupã', 26),
(5325, 'Tupi Paulista', 26),
(5326, 'Turiúba', 26),
(5327, 'Turmalina', 26),
(5328, 'Ubarana', 26),
(5329, 'Ubatuba', 26),
(5330, 'Ubirajara', 26),
(5331, 'Uchoa', 26),
(5332, 'União Paulista', 26),
(5333, 'Urânia', 26),
(5334, 'Uru', 26),
(5335, 'Urupês', 26),
(5336, 'Valentim Gentil', 26),
(5337, 'Valinhos', 26),
(5338, 'Valparaíso', 26),
(5339, 'Vargem', 26),
(5340, 'Vargem Grande do Sul', 26),
(5341, 'Vargem Grande Paulista', 26),
(5342, 'Várzea Paulista', 26),
(5343, 'Vera Cruz', 26),
(5344, 'Vinhedo', 26),
(5345, 'Viradouro', 26),
(5346, 'Vista Alegre do Alto', 26),
(5347, 'Vitória Brasil', 26),
(5348, 'Votorantim', 26),
(5349, 'Votuporanga', 26),
(5350, 'Zacarias', 26),
(5351, 'Amparo de São Francisco', 25),
(5352, 'Aquidabã', 25),
(5353, 'Aracaju', 25),
(5354, 'Arauá', 25),
(5355, 'Areia Branca', 25),
(5356, 'Barra dos Coqueiros', 25),
(5357, 'Boquim', 25),
(5358, 'Brejo Grande', 25),
(5359, 'Campo do Brito', 25),
(5360, 'Canhoba', 25),
(5361, 'Canindé de São Francisco', 25),
(5362, 'Capela', 25),
(5363, 'Carira', 25),
(5364, 'Carmópolis', 25),
(5365, 'Cedro de São João', 25),
(5366, 'Cristinápolis', 25),
(5367, 'Cumbe', 25),
(5368, 'Divina Pastora', 25),
(5369, 'Estância', 25),
(5370, 'Feira Nova', 25),
(5371, 'Frei Paulo', 25),
(5372, 'Gararu', 25),
(5373, 'General Maynard', 25),
(5374, 'Gracho Cardoso', 25),
(5375, 'Ilha das Flores', 25),
(5376, 'Indiaroba', 25),
(5377, 'Itabaiana', 25),
(5378, 'Itabaianinha', 25),
(5379, 'Itabi', 25),
(5380, 'Itaporanga d`Ajuda', 25),
(5381, 'Japaratuba', 25),
(5382, 'Japoatã', 25),
(5383, 'Lagarto', 25),
(5384, 'Laranjeiras', 25),
(5385, 'Macambira', 25),
(5386, 'Malhada dos Bois', 25),
(5387, 'Malhador', 25),
(5388, 'Maruim', 25),
(5389, 'Moita Bonita', 25),
(5390, 'Monte Alegre de Sergipe', 25),
(5391, 'Muribeca', 25),
(5392, 'Neópolis', 25),
(5393, 'Nossa Senhora Aparecida', 25),
(5394, 'Nossa Senhora da Glória', 25),
(5395, 'Nossa Senhora das Dores', 25),
(5396, 'Nossa Senhora de Lourdes', 25),
(5397, 'Nossa Senhora do Socorro', 25),
(5398, 'Pacatuba', 25),
(5399, 'Pedra Mole', 25),
(5400, 'Pedrinhas', 25),
(5401, 'Pinhão', 25),
(5402, 'Pirambu', 25),
(5403, 'Poço Redondo', 25),
(5404, 'Poço Verde', 25),
(5405, 'Porto da Folha', 25),
(5406, 'Propriá', 25),
(5407, 'Riachão do Dantas', 25),
(5408, 'Riachuelo', 25),
(5409, 'Ribeirópolis', 25),
(5410, 'Rosário do Catete', 25),
(5411, 'Salgado', 25),
(5412, 'Santa Luzia do Itanhy', 25),
(5413, 'Santa Rosa de Lima', 25),
(5414, 'Santana do São Francisco', 25),
(5415, 'Santo Amaro das Brotas', 25),
(5416, 'São Cristóvão', 25),
(5417, 'São Domingos', 25),
(5418, 'São Francisco', 25),
(5419, 'São Miguel do Aleixo', 25),
(5420, 'Simão Dias', 25),
(5421, 'Siriri', 25),
(5422, 'Telha', 25),
(5423, 'Tobias Barreto', 25),
(5424, 'Tomar do Geru', 25),
(5425, 'Umbaúba', 25),
(5426, 'Abreulândia', 27),
(5427, 'Aguiarnópolis', 27),
(5428, 'Aliança do Tocantins', 27),
(5429, 'Almas', 27),
(5430, 'Alvorada', 27),
(5431, 'Ananás', 27),
(5432, 'Angico', 27),
(5433, 'Aparecida do Rio Negro', 27),
(5434, 'Aragominas', 27),
(5435, 'Araguacema', 27),
(5436, 'Araguaçu', 27),
(5437, 'Araguaína', 27),
(5438, 'Araguanã', 27),
(5439, 'Araguatins', 27),
(5440, 'Arapoema', 27),
(5441, 'Arraias', 27),
(5442, 'Augustinópolis', 27),
(5443, 'Aurora do Tocantins', 27),
(5444, 'Axixá do Tocantins', 27),
(5445, 'Babaçulândia', 27),
(5446, 'Bandeirantes do Tocantins', 27),
(5447, 'Barra do Ouro', 27),
(5448, 'Barrolândia', 27),
(5449, 'Bernardo Sayão', 27),
(5450, 'Bom Jesus do Tocantins', 27),
(5451, 'Brasilândia do Tocantins', 27),
(5452, 'Brejinho de Nazaré', 27),
(5453, 'Buriti do Tocantins', 27),
(5454, 'Cachoeirinha', 27),
(5455, 'Campos Lindos', 27),
(5456, 'Cariri do Tocantins', 27),
(5457, 'Carmolândia', 27),
(5458, 'Carrasco Bonito', 27),
(5459, 'Caseara', 27),
(5460, 'Centenário', 27),
(5461, 'Chapada da Natividade', 27),
(5462, 'Chapada de Areia', 27),
(5463, 'Colinas do Tocantins', 27),
(5464, 'Colméia', 27),
(5465, 'Combinado', 27),
(5466, 'Conceição do Tocantins', 27),
(5467, 'Couto de Magalhães', 27),
(5468, 'Cristalândia', 27),
(5469, 'Crixás do Tocantins', 27),
(5470, 'Darcinópolis', 27),
(5471, 'Dianópolis', 27),
(5472, 'Divinópolis do Tocantins', 27),
(5473, 'Dois Irmãos do Tocantins', 27),
(5474, 'Dueré', 27),
(5475, 'Esperantina', 27),
(5476, 'Fátima', 27),
(5477, 'Figueirópolis', 27),
(5478, 'Filadélfia', 27),
(5479, 'Formoso do Araguaia', 27),
(5480, 'Fortaleza do Tabocão', 27),
(5481, 'Goianorte', 27),
(5482, 'Goiatins', 27),
(5483, 'Guaraí', 27),
(5484, 'Gurupi', 27),
(5485, 'Ipueiras', 27),
(5486, 'Itacajá', 27),
(5487, 'Itaguatins', 27),
(5488, 'Itapiratins', 27),
(5489, 'Itaporã do Tocantins', 27),
(5490, 'Jaú do Tocantins', 27),
(5491, 'Juarina', 27),
(5492, 'Lagoa da Confusão', 27),
(5493, 'Lagoa do Tocantins', 27),
(5494, 'Lajeado', 27),
(5495, 'Lavandeira', 27),
(5496, 'Lizarda', 27),
(5497, 'Luzinópolis', 27),
(5498, 'Marianópolis do Tocantins', 27),
(5499, 'Mateiros', 27),
(5500, 'Maurilândia do Tocantins', 27),
(5501, 'Miracema do Tocantins', 27),
(5502, 'Miranorte', 27),
(5503, 'Monte do Carmo', 27),
(5504, 'Monte Santo do Tocantins', 27),
(5505, 'Muricilândia', 27),
(5506, 'Natividade', 27),
(5507, 'Nazaré', 27),
(5508, 'Nova Olinda', 27),
(5509, 'Nova Rosalândia', 27),
(5510, 'Novo Acordo', 27),
(5511, 'Novo Alegre', 27),
(5512, 'Novo Jardim', 27),
(5513, 'Oliveira de Fátima', 27),
(5514, 'Palmas', 27),
(5515, 'Palmeirante', 27),
(5516, 'Palmeiras do Tocantins', 27),
(5517, 'Palmeirópolis', 27),
(5518, 'Paraíso do Tocantins', 27),
(5519, 'Paranã', 27),
(5520, 'Pau d`Arco', 27),
(5521, 'Pedro Afonso', 27),
(5522, 'Peixe', 27),
(5523, 'Pequizeiro', 27),
(5524, 'Pindorama do Tocantins', 27),
(5525, 'Piraquê', 27),
(5526, 'Pium', 27),
(5527, 'Ponte Alta do Bom Jesus', 27),
(5528, 'Ponte Alta do Tocantins', 27),
(5529, 'Porto Alegre do Tocantins', 27),
(5530, 'Porto Nacional', 27),
(5531, 'Praia Norte', 27),
(5532, 'Presidente Kennedy', 27),
(5533, 'Pugmil', 27),
(5534, 'Recursolândia', 27),
(5535, 'Riachinho', 27),
(5536, 'Rio da Conceição', 27),
(5537, 'Rio dos Bois', 27),
(5538, 'Rio Sono', 27),
(5539, 'Sampaio', 27),
(5540, 'Sandolândia', 27),
(5541, 'Santa Fé do Araguaia', 27),
(5542, 'Santa Maria do Tocantins', 27),
(5543, 'Santa Rita do Tocantins', 27),
(5544, 'Santa Rosa do Tocantins', 27),
(5545, 'Santa Tereza do Tocantins', 27),
(5546, 'Santa Terezinha do Tocantins', 27),
(5547, 'São Bento do Tocantins', 27),
(5548, 'São Félix do Tocantins', 27),
(5549, 'São Miguel do Tocantins', 27),
(5550, 'São Salvador do Tocantins', 27),
(5551, 'São Sebastião do Tocantins', 27),
(5552, 'São Valério da Natividade', 27),
(5553, 'Silvanópolis', 27),
(5554, 'Sítio Novo do Tocantins', 27),
(5555, 'Sucupira', 27),
(5556, 'Taguatinga', 27),
(5557, 'Taipas do Tocantins', 27),
(5558, 'Talismã', 27),
(5559, 'Tocantínia', 27),
(5560, 'Tocantinópolis', 27),
(5561, 'Tupirama', 27),
(5562, 'Tupiratins', 27),
(5563, 'Wanderlândia', 27),
(5564, 'Xambioá', 27);
    **/


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->delete();

        City::create(['state' => 1, 'ibge_code' => '1200013', 'name' => 'Acrelândia']);
        City::create(['state' => 1, 'ibge_code' => '1200054', 'name' => 'Assis Brasil']);
        City::create(['state' => 1, 'ibge_code' => '1200104', 'name' => 'Brasiléia']);
        City::create(['state' => 1, 'ibge_code' => '1200138', 'name' => 'Bujari']);
        City::create(['state' => 1, 'ibge_code' => '1200179', 'name' => 'Capixaba']);
        City::create(['state' => 1, 'ibge_code' => '1200203', 'name' => 'Cruzeiro do Sul']);
        City::create(['state' => 1, 'ibge_code' => '1200252', 'name' => 'Epitaciolândia']);
        City::create(['state' => 1, 'ibge_code' => '1200302', 'name' => 'Feijó']);
        City::create(['state' => 1, 'ibge_code' => '1200328', 'name' => 'Jordão']);
        City::create(['state' => 1, 'ibge_code' => '1200336', 'name' => 'Mâncio Lima']);
        City::create(['state' => 1, 'ibge_code' => '1200344', 'name' => 'Manoel Urbano']);
        City::create(['state' => 1, 'ibge_code' => '1200351', 'name' => 'Marechal Thaumaturgo']);
        City::create(['state' => 1, 'ibge_code' => '1200385', 'name' => 'Plácido de Castro']);
        City::create(['state' => 1, 'ibge_code' => '1200807', 'name' => 'Porto Acre']);
        City::create(['state' => 1, 'ibge_code' => '1200393', 'name' => 'Porto Walter']);
        City::create(['state' => 1, 'ibge_code' => '1200401', 'name' => 'Rio Branco']);
        City::create(['state' => 1, 'ibge_code' => '1200427', 'name' => 'Rodrigues Alves']);
        City::create(['state' => 1, 'ibge_code' => '1200435', 'name' => 'Santa Rosa do Purus']);
        City::create(['state' => 1, 'ibge_code' => '1200500', 'name' => 'Sena Madureira']);
        City::create(['state' => 1, 'ibge_code' => '1200450', 'name' => 'Senador Guiomard']);
        City::create(['state' => 1, 'ibge_code' => '1200609', 'name' => 'Tarauacá']);
        City::create(['state' => 1, 'ibge_code' => '1200708', 'name' => 'Xapuri']);

        City::create(['state' => 2, 'ibge_code' => '2700102', 'name' => "Água Branca"]);
        City::create(['state' => 2, 'ibge_code' => '2700201', 'name' => "Anadia"]);
        City::create(['state' => 2, 'ibge_code' => '2700300', 'name' => "Arapiraca"]);
        City::create(['state' => 2, 'ibge_code' => '2700409', 'name' => "Atalaia"]);
        City::create(['state' => 2, 'ibge_code' => '2700508', 'name' => "Barra de Santo Antônio"]);
        City::create(['state' => 2, 'ibge_code' => '2700607', 'name' => "Barra de São Miguel"]);
        City::create(['state' => 2, 'ibge_code' => '2700706', 'name' => "Batalha"]);
        City::create(['state' => 2, 'ibge_code' => '2700805', 'name' => "Belém"]);
        City::create(['state' => 2, 'ibge_code' => '2700904', 'name' => "Belo Monte"]);
        City::create(['state' => 2, 'ibge_code' => '2701001', 'name' => "Boca da Mata"]);
        City::create(['state' => 2, 'ibge_code' => '2701100', 'name' => "Branquinha"]);
        City::create(['state' => 2, 'ibge_code' => '2701209', 'name' => "Cacimbinhas"]);
        City::create(['state' => 2, 'ibge_code' => '2701308', 'name' => "Cajueiro"]);
        City::create(['state' => 2, 'ibge_code' => '2701357', 'name' => "Campestre"]);
        City::create(['state' => 2, 'ibge_code' => '2701407', 'name' => "Campo Alegre"]);
        City::create(['state' => 2, 'ibge_code' => '2701506', 'name' => "Campo Grande"]);
        City::create(['state' => 2, 'ibge_code' => '2701605', 'name' => "Canapi"]);
        City::create(['state' => 2, 'ibge_code' => '2701704', 'name' => "Capela"]);
        City::create(['state' => 2, 'ibge_code' => '2701803', 'name' => "Carneiros"]);
        City::create(['state' => 2, 'ibge_code' => '2701902', 'name' => "Chã Preta"]);
        City::create(['state' => 2, 'ibge_code' => '2702009', 'name' => "Coité do Nóia"]);
        City::create(['state' => 2, 'ibge_code' => '2702108', 'name' => "Colônia Leopoldina"]);
        City::create(['state' => 2, 'ibge_code' => '2702207', 'name' => "Coqueiro Seco"]);
        City::create(['state' => 2, 'ibge_code' => '2702306', 'name' => "Coruripe"]);
        City::create(['state' => 2, 'ibge_code' => '2702355', 'name' => "Craíbas"]);
        City::create(['state' => 2, 'ibge_code' => '2702405', 'name' => "Delmiro Gouveia"]);
        City::create(['state' => 2, 'ibge_code' => '2702504', 'name' => "Dois Riachos"]);
        City::create(['state' => 2, 'ibge_code' => '2702553', 'name' => "Estrela de Alagoas"]);
        City::create(['state' => 2, 'ibge_code' => '2702603', 'name' => "Feira Grande"]);
        City::create(['state' => 2, 'ibge_code' => '2702702', 'name' => "Feliz Deserto"]);
        City::create(['state' => 2, 'ibge_code' => '2702801', 'name' => "Flexeiras"]);
        City::create(['state' => 2, 'ibge_code' => '2702900', 'name' => "Girau do Ponciano"]);
        City::create(['state' => 2, 'ibge_code' => '2703007', 'name' => "Ibateguara"]);
        City::create(['state' => 2, 'ibge_code' => '2703106', 'name' => "Igaci"]);
        City::create(['state' => 2, 'ibge_code' => '2703205', 'name' => "Igreja Nova"]);
        City::create(['state' => 2, 'ibge_code' => '2703304', 'name' => "Inhapi"]);
        City::create(['state' => 2, 'ibge_code' => '2703403', 'name' => "Jacaré dos Homens"]);
        City::create(['state' => 2, 'ibge_code' => '2703502', 'name' => "Jacuípe"]);
        City::create(['state' => 2, 'ibge_code' => '2703601', 'name' => "Japaratinga"]);
        City::create(['state' => 2, 'ibge_code' => '2703700', 'name' => "Jaramataia"]);
        City::create(['state' => 2, 'ibge_code' => '2703759', 'name' => "Jequiá da Praia"]);
        City::create(['state' => 2, 'ibge_code' => '2703809', 'name' => "Joaquim Gomes"]);
        City::create(['state' => 2, 'ibge_code' => '2703908', 'name' => "Jundiá"]);
        City::create(['state' => 2, 'ibge_code' => '2704005', 'name' => "Junqueiro"]);
        City::create(['state' => 2, 'ibge_code' => '2704104', 'name' => "Lagoa da Canoa"]);
        City::create(['state' => 2, 'ibge_code' => '2704203', 'name' => "Limoeiro de Anadia"]);
        City::create(['state' => 2, 'ibge_code' => '2704302', 'name' => "Maceió"]);
        City::create(['state' => 2, 'ibge_code' => '2704401', 'name' => "Major Isidoro"]);
        City::create(['state' => 2, 'ibge_code' => '2704906', 'name' => "Mar Vermelho"]);
        City::create(['state' => 2, 'ibge_code' => '2704500', 'name' => "Maragogi"]);
        City::create(['state' => 2, 'ibge_code' => '2704609', 'name' => "Maravilha"]);
        City::create(['state' => 2, 'ibge_code' => '2704708', 'name' => "Marechal Deodoro"]);
        City::create(['state' => 2, 'ibge_code' => '2704807', 'name' => "Maribondo"]);
        City::create(['state' => 2, 'ibge_code' => '2705002', 'name' => "Mata Grande"]);
        City::create(['state' => 2, 'ibge_code' => '2705101', 'name' => "Matriz de Camaragibe"]);
        City::create(['state' => 2, 'ibge_code' => '2705200', 'name' => "Messias"]);
        City::create(['state' => 2, 'ibge_code' => '2705309', 'name' => "Minador do Negrão"]);
        City::create(['state' => 2, 'ibge_code' => '2705408', 'name' => "Monteirópolis"]);
        City::create(['state' => 2, 'ibge_code' => '2705507', 'name' => "Murici"]);
        City::create(['state' => 2, 'ibge_code' => '2705606', 'name' => "Novo Lino"]);
        City::create(['state' => 2, 'ibge_code' => '2705705', 'name' => "Olho d'Água das Flores"]);
        City::create(['state' => 2, 'ibge_code' => '2705804', 'name' => "Olho d'Água do Casado"]);
        City::create(['state' => 2, 'ibge_code' => '2705903', 'name' => "Olho d'Água Grande"]);
        City::create(['state' => 2, 'ibge_code' => '2706000', 'name' => "Olivença"]);
        City::create(['state' => 2, 'ibge_code' => '2706109', 'name' => "Ouro Branco"]);
        City::create(['state' => 2, 'ibge_code' => '2706208', 'name' => "Palestina"]);
        City::create(['state' => 2, 'ibge_code' => '2706307', 'name' => "Palmeira dos Índios"]);
        City::create(['state' => 2, 'ibge_code' => '2706406', 'name' => "Pão de Açúcar"]);
        City::create(['state' => 2, 'ibge_code' => '2706422', 'name' => "Pariconha"]);
        City::create(['state' => 2, 'ibge_code' => '2706448', 'name' => "Paripueira"]);
        City::create(['state' => 2, 'ibge_code' => '2706505', 'name' => "Passo de Camaragibe"]);
        City::create(['state' => 2, 'ibge_code' => '2706604', 'name' => "Paulo Jacinto"]);
        City::create(['state' => 2, 'ibge_code' => '2706703', 'name' => "Penedo"]);
        City::create(['state' => 2, 'ibge_code' => '2706802', 'name' => "Piaçabuçu"]);
        City::create(['state' => 2, 'ibge_code' => '2706901', 'name' => "Pilar"]);
        City::create(['state' => 2, 'ibge_code' => '2707008', 'name' => "Pindoba"]);
        City::create(['state' => 2, 'ibge_code' => '2707107', 'name' => "Piranhas"]);
        City::create(['state' => 2, 'ibge_code' => '2707206', 'name' => "Poço das Trincheiras"]);
        City::create(['state' => 2, 'ibge_code' => '2707305', 'name' => "Porto Calvo"]);
        City::create(['state' => 2, 'ibge_code' => '2707404', 'name' => "Porto de Pedras"]);
        City::create(['state' => 2, 'ibge_code' => '2707503', 'name' => "Porto Real do Colégio"]);
        City::create(['state' => 2, 'ibge_code' => '2707602', 'name' => "Quebrangulo"]);
        City::create(['state' => 2, 'ibge_code' => '2707701', 'name' => "Rio Largo"]);
        City::create(['state' => 2, 'ibge_code' => '2707800', 'name' => "Roteiro"]);
        City::create(['state' => 2, 'ibge_code' => '2707909', 'name' => "Santa Luzia do Norte"]);
        City::create(['state' => 2, 'ibge_code' => '2708006', 'name' => "Santana do Ipanema"]);
        City::create(['state' => 2, 'ibge_code' => '2708105', 'name' => "Santana do Mundaú"]);
        City::create(['state' => 2, 'ibge_code' => '2708204', 'name' => "São Brás"]);
        City::create(['state' => 2, 'ibge_code' => '2708303', 'name' => "São José da Laje"]);
        City::create(['state' => 2, 'ibge_code' => '2708402', 'name' => "São José da Tapera"]);
        City::create(['state' => 2, 'ibge_code' => '2708501', 'name' => "São Luís do Quitunde"]);
        City::create(['state' => 2, 'ibge_code' => '2708600', 'name' => "São Miguel dos Campos"]);
        City::create(['state' => 2, 'ibge_code' => '2708709', 'name' => "São Miguel dos Milagres"]);
        City::create(['state' => 2, 'ibge_code' => '2708808', 'name' => "São Sebastião"]);
        City::create(['state' => 2, 'ibge_code' => '2708907', 'name' => "Satuba"]);
        City::create(['state' => 2, 'ibge_code' => '2708956', 'name' => "Senador Rui Palmeira"]);
        City::create(['state' => 2, 'ibge_code' => '2709004', 'name' => "Tanque d'Arca"]);
        City::create(['state' => 2, 'ibge_code' => '2709103', 'name' => "Taquarana"]);
        City::create(['state' => 2, 'ibge_code' => '2709152', 'name' => "Teotônio Vilela"]);
        City::create(['state' => 2, 'ibge_code' => '2709202', 'name' => "Traipu"]);
        City::create(['state' => 2, 'ibge_code' => '2709301', 'name' => "União dos Palmares"]);
        City::create(['state' => 2, 'ibge_code' => '2709400', 'name' => "Viçosa"]);

        City::create(['state' => 3, 'ibge_code' => '1600105', 'name' => "Amapá"]);
        City::create(['state' => 3, 'ibge_code' => '1600204', 'name' => "Calçoene"]);
        City::create(['state' => 3, 'ibge_code' => '1600212', 'name' => "Cutias"]);
        City::create(['state' => 3, 'ibge_code' => '1600238', 'name' => "Ferreira Gomes"]);
        City::create(['state' => 3, 'ibge_code' => '1600253', 'name' => "Itaubal"]);
        City::create(['state' => 3, 'ibge_code' => '1600279', 'name' => "Laranjal do Jari"]);
        City::create(['state' => 3, 'ibge_code' => '1600303', 'name' => "Macapá"]);
        City::create(['state' => 3, 'ibge_code' => '1600402', 'name' => "Mazagão"]);
        City::create(['state' => 3, 'ibge_code' => '1600501', 'name' => "Oiapoque"]);
        City::create(['state' => 3, 'ibge_code' => '1600154', 'name' => "Pedra Branca do Amapari"]);
        City::create(['state' => 3, 'ibge_code' => '1600535', 'name' => "Porto Grande"]);
        City::create(['state' => 3, 'ibge_code' => '1600550', 'name' => "Pracuúba"]);
        City::create(['state' => 3, 'ibge_code' => '1600600', 'name' => "Santana"]);
        City::create(['state' => 3, 'ibge_code' => '1600055', 'name' => "Serra do Navio"]);
        City::create(['state' => 3, 'ibge_code' => '1600709', 'name' => "Tartarugalzinho"]);
        City::create(['state' => 3, 'ibge_code' => '1600808', 'name' => "Vitória do Jari"]);

        City::create(['state' => 4, 'ibge_code' => '1300029', 'name' => "Alvarães"]);
        City::create(['state' => 4, 'ibge_code' => '1300060', 'name' => "Amaturá"]);
        City::create(['state' => 4, 'ibge_code' => '1300086', 'name' => "Anamã"]);
        City::create(['state' => 4, 'ibge_code' => '1300102', 'name' => "Anori"]);
        City::create(['state' => 4, 'ibge_code' => '1300144', 'name' => "Apuí"]);
        City::create(['state' => 4, 'ibge_code' => '1300201', 'name' => "Atalaia do Norte"]);
        City::create(['state' => 4, 'ibge_code' => '1300300', 'name' => "Autazes"]);
        City::create(['state' => 4, 'ibge_code' => '1300409', 'name' => "Barcelos"]);
        City::create(['state' => 4, 'ibge_code' => '1300508', 'name' => "Barreirinha"]);
        City::create(['state' => 4, 'ibge_code' => '1300607', 'name' => "Benjamin Constant"]);
        City::create(['state' => 4, 'ibge_code' => '1300631', 'name' => "Beruri"]);
        City::create(['state' => 4, 'ibge_code' => '1300680', 'name' => "Boa Vista do Ramos"]);
        City::create(['state' => 4, 'ibge_code' => '1300706', 'name' => "Boca do Acre"]);
        City::create(['state' => 4, 'ibge_code' => '1300805', 'name' => "Borba"]);
        City::create(['state' => 4, 'ibge_code' => '1300839', 'name' => "Caapiranga"]);
        City::create(['state' => 4, 'ibge_code' => '1300904', 'name' => "Canutama"]);
        City::create(['state' => 4, 'ibge_code' => '1301001', 'name' => "Carauari"]);
        City::create(['state' => 4, 'ibge_code' => '1301100', 'name' => "Careiro"]);
        City::create(['state' => 4, 'ibge_code' => '1301159', 'name' => "Careiro da Várzea"]);
        City::create(['state' => 4, 'ibge_code' => '1301209', 'name' => "Coari"]);
        City::create(['state' => 4, 'ibge_code' => '1301308', 'name' => "Codajás"]);
        City::create(['state' => 4, 'ibge_code' => '1301407', 'name' => "Eirunepé"]);
        City::create(['state' => 4, 'ibge_code' => '1301506', 'name' => "Envira"]);
        City::create(['state' => 4, 'ibge_code' => '1301605', 'name' => "Fonte Boa"]);
        City::create(['state' => 4, 'ibge_code' => '1301654', 'name' => "Guajará"]);
        City::create(['state' => 4, 'ibge_code' => '1301704', 'name' => "Humaitá"]);
        City::create(['state' => 4, 'ibge_code' => '1301803', 'name' => "Ipixuna"]);
        City::create(['state' => 4, 'ibge_code' => '1301852', 'name' => "Iranduba"]);
        City::create(['state' => 4, 'ibge_code' => '1301902', 'name' => "Itacoatiara"]);
        City::create(['state' => 4, 'ibge_code' => '1301951', 'name' => "Itamarati"]);
        City::create(['state' => 4, 'ibge_code' => '1302009', 'name' => "Itapiranga"]);
        City::create(['state' => 4, 'ibge_code' => '1302108', 'name' => "Japurá"]);
        City::create(['state' => 4, 'ibge_code' => '1302207', 'name' => "Juruá"]);
        City::create(['state' => 4, 'ibge_code' => '1302306', 'name' => "Jutaí"]);
        City::create(['state' => 4, 'ibge_code' => '1302405', 'name' => "Lábrea"]);
        City::create(['state' => 4, 'ibge_code' => '1302504', 'name' => "Manacapuru"]);
        City::create(['state' => 4, 'ibge_code' => '1302553', 'name' => "Manaquiri"]);
        City::create(['state' => 4, 'ibge_code' => '1302603', 'name' => "Manaus"]);
        City::create(['state' => 4, 'ibge_code' => '1302702', 'name' => "Manicoré"]);
        City::create(['state' => 4, 'ibge_code' => '1302801', 'name' => "Maraã"]);
        City::create(['state' => 4, 'ibge_code' => '1302900', 'name' => "Maués"]);
        City::create(['state' => 4, 'ibge_code' => '1303007', 'name' => "Nhamundá"]);
        City::create(['state' => 4, 'ibge_code' => '1303106', 'name' => "Nova Olinda do Norte"]);
        City::create(['state' => 4, 'ibge_code' => '1303205', 'name' => "Novo Airão"]);
        City::create(['state' => 4, 'ibge_code' => '1303304', 'name' => "Novo Aripuanã"]);
        City::create(['state' => 4, 'ibge_code' => '1303403', 'name' => "Parintins"]);
        City::create(['state' => 4, 'ibge_code' => '1303502', 'name' => "Pauini"]);
        City::create(['state' => 4, 'ibge_code' => '1303536', 'name' => "Presidente Figueiredo"]);
        City::create(['state' => 4, 'ibge_code' => '1303569', 'name' => "Rio Preto da Eva"]);
        City::create(['state' => 4, 'ibge_code' => '1303601', 'name' => "Santa Isabel do Rio Negro"]);
        City::create(['state' => 4, 'ibge_code' => '1303700', 'name' => "Santo Antônio do Içá"]);
        City::create(['state' => 4, 'ibge_code' => '1303809', 'name' => "São Gabriel da Cachoeira"]);
        City::create(['state' => 4, 'ibge_code' => '1303908', 'name' => "São Paulo de Olivença"]);
        City::create(['state' => 4, 'ibge_code' => '1303957', 'name' => "São Sebastião do Uatumã"]);
        City::create(['state' => 4, 'ibge_code' => '1304005', 'name' => "Silves"]);
        City::create(['state' => 4, 'ibge_code' => '1304062', 'name' => "Tabatinga"]);
        City::create(['state' => 4, 'ibge_code' => '1304104', 'name' => "Tapauá"]);
        City::create(['state' => 4, 'ibge_code' => '1304203', 'name' => "Tefé"]);
        City::create(['state' => 4, 'ibge_code' => '1304237', 'name' => "Tonantins"]);
        City::create(['state' => 4, 'ibge_code' => '1304260', 'name' => "Uarini"]);
        City::create(['state' => 4, 'ibge_code' => '1304302', 'name' => "Urucará"]);
        City::create(['state' => 4, 'ibge_code' => '1304401', 'name' => "Urucurituba"]);

        City::create(['state' => 5, 'ibge_code' => '2900108', 'name' => "Abaíra"]);
        City::create(['state' => 5, 'ibge_code' => '2900207', 'name' => "Abaré"]);
        City::create(['state' => 5, 'ibge_code' => '2900306', 'name' => "Acajutiba"]);
        City::create(['state' => 5, 'ibge_code' => '2900355', 'name' => "Adustina"]);
        City::create(['state' => 5, 'ibge_code' => '2900405', 'name' => "Água Fria"]);
        City::create(['state' => 5, 'ibge_code' => '2900603', 'name' => "Aiquara"]);
        City::create(['state' => 5, 'ibge_code' => '2900702', 'name' => "Alagoinhas"]);
        City::create(['state' => 5, 'ibge_code' => '2900801', 'name' => "Alcobaça"]);
        City::create(['state' => 5, 'ibge_code' => '2900900', 'name' => "Almadina"]);
        City::create(['state' => 5, 'ibge_code' => '2901007', 'name' => "Amargosa"]);
        City::create(['state' => 5, 'ibge_code' => '2901106', 'name' => "Amélia Rodrigues"]);
        City::create(['state' => 5, 'ibge_code' => '2901155', 'name' => "América Dourada"]);
        City::create(['state' => 5, 'ibge_code' => '2901205', 'name' => "Anagé"]);
        City::create(['state' => 5, 'ibge_code' => '2901304', 'name' => "Andaraí"]);
        City::create(['state' => 5, 'ibge_code' => '2901353', 'name' => "Andorinha"]);
        City::create(['state' => 5, 'ibge_code' => '2901403', 'name' => "Angical"]);
        City::create(['state' => 5, 'ibge_code' => '2901502', 'name' => "Anguera"]);
        City::create(['state' => 5, 'ibge_code' => '2901601', 'name' => "Antas"]);
        City::create(['state' => 5, 'ibge_code' => '2901700', 'name' => "Antônio Cardoso"]);
        City::create(['state' => 5, 'ibge_code' => '2901809', 'name' => "Antônio Gonçalves"]);
        City::create(['state' => 5, 'ibge_code' => '2901908', 'name' => "Aporá"]);
        City::create(['state' => 5, 'ibge_code' => '2901957', 'name' => "Apuarema"]);
        City::create(['state' => 5, 'ibge_code' => '2902054', 'name' => "Araças"]);
        City::create(['state' => 5, 'ibge_code' => '2902005', 'name' => "Aracatu"]);
        City::create(['state' => 5, 'ibge_code' => '2902104', 'name' => "Araci"]);
        City::create(['state' => 5, 'ibge_code' => '2902203', 'name' => "Aramari"]);
        City::create(['state' => 5, 'ibge_code' => '2902252', 'name' => "Arataca"]);
        City::create(['state' => 5, 'ibge_code' => '2902302', 'name' => "Aratuípe"]);
        City::create(['state' => 5, 'ibge_code' => '2902401', 'name' => "Aurelino Leal"]);
        City::create(['state' => 5, 'ibge_code' => '2902500', 'name' => "Baianópolis"]);
        City::create(['state' => 5, 'ibge_code' => '2902609', 'name' => "Baixa Grande"]);
        City::create(['state' => 5, 'ibge_code' => '2902658', 'name' => "Banzaê"]);
        City::create(['state' => 5, 'ibge_code' => '2902708', 'name' => "Barra"]);
        City::create(['state' => 5, 'ibge_code' => '2902807', 'name' => "Barra da Estiva"]);
        City::create(['state' => 5, 'ibge_code' => '2902906', 'name' => "Barra do Choça"]);
        City::create(['state' => 5, 'ibge_code' => '2903003', 'name' => "Barra do Mendes"]);
        City::create(['state' => 5, 'ibge_code' => '2903102', 'name' => "Barra do Rocha"]);
        City::create(['state' => 5, 'ibge_code' => '2903201', 'name' => "Barreiras"]);
        City::create(['state' => 5, 'ibge_code' => '2903235', 'name' => "Barro Alto"]);
        City::create(['state' => 5, 'ibge_code' => '2903300', 'name' => "Barro Preto"]);
        City::create(['state' => 5, 'ibge_code' => '2903276', 'name' => "Barrocas"]);
        City::create(['state' => 5, 'ibge_code' => '2903409', 'name' => "Belmonte"]);
        City::create(['state' => 5, 'ibge_code' => '2903508', 'name' => "Belo Campo"]);
        City::create(['state' => 5, 'ibge_code' => '2903607', 'name' => "Biritinga"]);
        City::create(['state' => 5, 'ibge_code' => '2903706', 'name' => "Boa Nova"]);
        City::create(['state' => 5, 'ibge_code' => '2903805', 'name' => "Boa Vista do Tupim"]);
        City::create(['state' => 5, 'ibge_code' => '2903904', 'name' => "Bom Jesus da Lapa"]);
        City::create(['state' => 5, 'ibge_code' => '2903953', 'name' => "Bom Jesus da Serra"]);
        City::create(['state' => 5, 'ibge_code' => '2904001', 'name' => "Boninal"]);
        City::create(['state' => 5, 'ibge_code' => '2904050', 'name' => "Bonito"]);
        City::create(['state' => 5, 'ibge_code' => '2904100', 'name' => "Boquira"]);
        City::create(['state' => 5, 'ibge_code' => '2904209', 'name' => "Botuporã"]);
        City::create(['state' => 5, 'ibge_code' => '2904308', 'name' => "Brejões"]);
        City::create(['state' => 5, 'ibge_code' => '2904407', 'name' => "Brejolândia"]);
        City::create(['state' => 5, 'ibge_code' => '2904506', 'name' => "Brotas de Macaúbas"]);
        City::create(['state' => 5, 'ibge_code' => '2904605', 'name' => "Brumado"]);
        City::create(['state' => 5, 'ibge_code' => '2904704', 'name' => "Buerarema"]);
        City::create(['state' => 5, 'ibge_code' => '2904753', 'name' => "Buritirama"]);
        City::create(['state' => 5, 'ibge_code' => '2904803', 'name' => "Caatiba"]);
        City::create(['state' => 5, 'ibge_code' => '2904852', 'name' => "Cabaceiras do Paraguaçu"]);
        City::create(['state' => 5, 'ibge_code' => '2904902', 'name' => "Cachoeira"]);
        City::create(['state' => 5, 'ibge_code' => '2905008', 'name' => "Caculé"]);
        City::create(['state' => 5, 'ibge_code' => '2905107', 'name' => "Caém"]);
        City::create(['state' => 5, 'ibge_code' => '2905156', 'name' => "Caetanos"]);
        City::create(['state' => 5, 'ibge_code' => '2905206', 'name' => "Caetité"]);
        City::create(['state' => 5, 'ibge_code' => '2905305', 'name' => "Cafarnaum"]);
        City::create(['state' => 5, 'ibge_code' => '2905404', 'name' => "Cairu"]);
        City::create(['state' => 5, 'ibge_code' => '2905503', 'name' => "Caldeirão Grande"]);
        City::create(['state' => 5, 'ibge_code' => '2905602', 'name' => "Camacan"]);
        City::create(['state' => 5, 'ibge_code' => '2905701', 'name' => "Camaçari"]);
        City::create(['state' => 5, 'ibge_code' => '2905800', 'name' => "Camamu"]);
        City::create(['state' => 5, 'ibge_code' => '2905909', 'name' => "Campo Alegre de Lourdes"]);
        City::create(['state' => 5, 'ibge_code' => '2906006', 'name' => "Campo Formoso"]);
        City::create(['state' => 5, 'ibge_code' => '2906105', 'name' => "Canápolis"]);
        City::create(['state' => 5, 'ibge_code' => '2906204', 'name' => "Canarana"]);
        City::create(['state' => 5, 'ibge_code' => '2906303', 'name' => "Canavieiras"]);
        City::create(['state' => 5, 'ibge_code' => '2906402', 'name' => "Candeal"]);
        City::create(['state' => 5, 'ibge_code' => '2906501', 'name' => "Candeias"]);
        City::create(['state' => 5, 'ibge_code' => '2906600', 'name' => "Candiba"]);
        City::create(['state' => 5, 'ibge_code' => '2906709', 'name' => "Cândido Sales"]);
        City::create(['state' => 5, 'ibge_code' => '2906808', 'name' => "Cansanção"]);
        City::create(['state' => 5, 'ibge_code' => '2906824', 'name' => "Canudos"]);
        City::create(['state' => 5, 'ibge_code' => '2906857', 'name' => "Capela do Alto Alegre"]);
        City::create(['state' => 5, 'ibge_code' => '2906873', 'name' => "Capim Grosso"]);
        City::create(['state' => 5, 'ibge_code' => '2906899', 'name' => "Caraíbas"]);
        City::create(['state' => 5, 'ibge_code' => '2906907', 'name' => "Caravelas"]);
        City::create(['state' => 5, 'ibge_code' => '2907004', 'name' => "Cardeal da Silva"]);
        City::create(['state' => 5, 'ibge_code' => '2907103', 'name' => "Carinhanha"]);
        City::create(['state' => 5, 'ibge_code' => '2907202', 'name' => "Casa Nova"]);
        City::create(['state' => 5, 'ibge_code' => '2907301', 'name' => "Castro Alves"]);
        City::create(['state' => 5, 'ibge_code' => '2907400', 'name' => "Catolândia"]);
        City::create(['state' => 5, 'ibge_code' => '2907509', 'name' => "Catu"]);
        City::create(['state' => 5, 'ibge_code' => '2907558', 'name' => "Caturama"]);
        City::create(['state' => 5, 'ibge_code' => '2907608', 'name' => "Central"]);
        City::create(['state' => 5, 'ibge_code' => '2907707', 'name' => "Chorrochó"]);
        City::create(['state' => 5, 'ibge_code' => '2907806', 'name' => "Cícero Dantas"]);
        City::create(['state' => 5, 'ibge_code' => '2907905', 'name' => "Cipó"]);
        City::create(['state' => 5, 'ibge_code' => '2908002', 'name' => "Coaraci"]);
        City::create(['state' => 5, 'ibge_code' => '2908101', 'name' => "Cocos"]);
        City::create(['state' => 5, 'ibge_code' => '2908200', 'name' => "Conceição da Feira"]);
        City::create(['state' => 5, 'ibge_code' => '2908309', 'name' => "Conceição do Almeida"]);
        City::create(['state' => 5, 'ibge_code' => '2908408', 'name' => "Conceição do Coité"]);
        City::create(['state' => 5, 'ibge_code' => '2908507', 'name' => "Conceição do Jacuípe"]);
        City::create(['state' => 5, 'ibge_code' => '2908606', 'name' => "Conde"]);
        City::create(['state' => 5, 'ibge_code' => '2908705', 'name' => "Condeúba"]);
        City::create(['state' => 5, 'ibge_code' => '2908804', 'name' => "Contendas do Sincorá"]);
        City::create(['state' => 5, 'ibge_code' => '2908903', 'name' => "Coração de Maria"]);
        City::create(['state' => 5, 'ibge_code' => '2909000', 'name' => "Cordeiros"]);
        City::create(['state' => 5, 'ibge_code' => '2909109', 'name' => "Coribe"]);
        City::create(['state' => 5, 'ibge_code' => '2909208', 'name' => "Coronel João Sá"]);
        City::create(['state' => 5, 'ibge_code' => '2909307', 'name' => "Correntina"]);
        City::create(['state' => 5, 'ibge_code' => '2909406', 'name' => "Cotegipe"]);
        City::create(['state' => 5, 'ibge_code' => '2909505', 'name' => "Cravolândia"]);
        City::create(['state' => 5, 'ibge_code' => '2909604', 'name' => "Crisópolis"]);
        City::create(['state' => 5, 'ibge_code' => '2909703', 'name' => "Cristópolis"]);
        City::create(['state' => 5, 'ibge_code' => '2909802', 'name' => "Cruz das Almas"]);
        City::create(['state' => 5, 'ibge_code' => '2909901', 'name' => "Curaçá"]);
        City::create(['state' => 5, 'ibge_code' => '2910008', 'name' => "Dário Meira"]);
        City::create(['state' => 5, 'ibge_code' => '2910057', 'name' => "Dias d'Ávila"]);
        City::create(['state' => 5, 'ibge_code' => '2910107', 'name' => "Dom Basílio"]);
        City::create(['state' => 5, 'ibge_code' => '2910206', 'name' => "Dom Macedo Costa"]);
        City::create(['state' => 5, 'ibge_code' => '2910305', 'name' => "Elísio Medrado"]);
        City::create(['state' => 5, 'ibge_code' => '2910404', 'name' => "Encruzilhada"]);
        City::create(['state' => 5, 'ibge_code' => '2910503', 'name' => "Entre Rios"]);
        City::create(['state' => 5, 'ibge_code' => '2900504', 'name' => "Érico Cardoso"]);
        City::create(['state' => 5, 'ibge_code' => '2910602', 'name' => "Esplanada"]);
        City::create(['state' => 5, 'ibge_code' => '2910701', 'name' => "Euclides da Cunha"]);
        City::create(['state' => 5, 'ibge_code' => '2910727', 'name' => "Eunápolis"]);
        City::create(['state' => 5, 'ibge_code' => '2910750', 'name' => "Fátima"]);
        City::create(['state' => 5, 'ibge_code' => '2910776', 'name' => "Feira da Mata"]);
        City::create(['state' => 5, 'ibge_code' => '2910800', 'name' => "Feira de Santana"]);
        City::create(['state' => 5, 'ibge_code' => '2910859', 'name' => "Filadélfia"]);
        City::create(['state' => 5, 'ibge_code' => '2910909', 'name' => "Firmino Alves"]);
        City::create(['state' => 5, 'ibge_code' => '2911006', 'name' => "Floresta Azul"]);
        City::create(['state' => 5, 'ibge_code' => '2911105', 'name' => "Formosa do Rio Preto"]);
        City::create(['state' => 5, 'ibge_code' => '2911204', 'name' => "Gandu"]);
        City::create(['state' => 5, 'ibge_code' => '2911253', 'name' => "Gavião"]);
        City::create(['state' => 5, 'ibge_code' => '2911303', 'name' => "Gentio do Ouro"]);
        City::create(['state' => 5, 'ibge_code' => '2911402', 'name' => "Glória"]);
        City::create(['state' => 5, 'ibge_code' => '2911501', 'name' => "Gongogi"]);
        City::create(['state' => 5, 'ibge_code' => '2911600', 'name' => "Governador Mangabeira"]);
        City::create(['state' => 5, 'ibge_code' => '2911659', 'name' => "Guajeru"]);
        City::create(['state' => 5, 'ibge_code' => '2911709', 'name' => "Guanambi"]);
        City::create(['state' => 5, 'ibge_code' => '2911808', 'name' => "Guaratinga"]);
        City::create(['state' => 5, 'ibge_code' => '2911857', 'name' => "Heliópolis"]);
        City::create(['state' => 5, 'ibge_code' => '2911907', 'name' => "Iaçu"]);
        City::create(['state' => 5, 'ibge_code' => '2912004', 'name' => "Ibiassucê"]);
        City::create(['state' => 5, 'ibge_code' => '2912103', 'name' => "Ibicaraí"]);
        City::create(['state' => 5, 'ibge_code' => '2912202', 'name' => "Ibicoara"]);
        City::create(['state' => 5, 'ibge_code' => '2912301', 'name' => "Ibicuí"]);
        City::create(['state' => 5, 'ibge_code' => '2912400', 'name' => "Ibipeba"]);
        City::create(['state' => 5, 'ibge_code' => '2912509', 'name' => "Ibipitanga"]);
        City::create(['state' => 5, 'ibge_code' => '2912608', 'name' => "Ibiquera"]);
        City::create(['state' => 5, 'ibge_code' => '2912707', 'name' => "Ibirapitanga"]);
        City::create(['state' => 5, 'ibge_code' => '2912806', 'name' => "Ibirapuã"]);
        City::create(['state' => 5, 'ibge_code' => '2912905', 'name' => "Ibirataia"]);
        City::create(['state' => 5, 'ibge_code' => '2913002', 'name' => "Ibitiara"]);
        City::create(['state' => 5, 'ibge_code' => '2913101', 'name' => "Ibititá"]);
        City::create(['state' => 5, 'ibge_code' => '2913200', 'name' => "Ibotirama"]);
        City::create(['state' => 5, 'ibge_code' => '2913309', 'name' => "Ichu"]);
        City::create(['state' => 5, 'ibge_code' => '2913408', 'name' => "Igaporã"]);
        City::create(['state' => 5, 'ibge_code' => '2913457', 'name' => "Igrapiúna"]);
        City::create(['state' => 5, 'ibge_code' => '2913507', 'name' => "Iguaí"]);
        City::create(['state' => 5, 'ibge_code' => '2913606', 'name' => "Ilhéus"]);
        City::create(['state' => 5, 'ibge_code' => '2913705', 'name' => "Inhambupe"]);
        City::create(['state' => 5, 'ibge_code' => '2913804', 'name' => "Ipecaetá"]);
        City::create(['state' => 5, 'ibge_code' => '2913903', 'name' => "Ipiaú"]);
        City::create(['state' => 5, 'ibge_code' => '2914000', 'name' => "Ipirá"]);
        City::create(['state' => 5, 'ibge_code' => '2914109', 'name' => "Ipupiara"]);
        City::create(['state' => 5, 'ibge_code' => '2914208', 'name' => "Irajuba"]);
        City::create(['state' => 5, 'ibge_code' => '2914307', 'name' => "Iramaia"]);
        City::create(['state' => 5, 'ibge_code' => '2914406', 'name' => "Iraquara"]);
        City::create(['state' => 5, 'ibge_code' => '2914505', 'name' => "Irará"]);
        City::create(['state' => 5, 'ibge_code' => '2914604', 'name' => "Irecê"]);
        City::create(['state' => 5, 'ibge_code' => '2914653', 'name' => "Itabela"]);
        City::create(['state' => 5, 'ibge_code' => '2914703', 'name' => "Itaberaba"]);
        City::create(['state' => 5, 'ibge_code' => '2914802', 'name' => "Itabuna"]);
        City::create(['state' => 5, 'ibge_code' => '2914901', 'name' => "Itacaré"]);
        City::create(['state' => 5, 'ibge_code' => '2915007', 'name' => "Itaeté"]);
        City::create(['state' => 5, 'ibge_code' => '2915106', 'name' => "Itagi"]);
        City::create(['state' => 5, 'ibge_code' => '2915205', 'name' => "Itagibá"]);
        City::create(['state' => 5, 'ibge_code' => '2915304', 'name' => "Itagimirim"]);
        City::create(['state' => 5, 'ibge_code' => '2915353', 'name' => "Itaguaçu da Bahia"]);
        City::create(['state' => 5, 'ibge_code' => '2915403', 'name' => "Itaju do Colônia"]);
        City::create(['state' => 5, 'ibge_code' => '2915502', 'name' => "Itajuípe"]);
        City::create(['state' => 5, 'ibge_code' => '2915601', 'name' => "Itamaraju"]);
        City::create(['state' => 5, 'ibge_code' => '2915700', 'name' => "Itamari"]);
        City::create(['state' => 5, 'ibge_code' => '2915809', 'name' => "Itambé"]);
        City::create(['state' => 5, 'ibge_code' => '2915908', 'name' => "Itanagra"]);
        City::create(['state' => 5, 'ibge_code' => '2916005', 'name' => "Itanhém"]);
        City::create(['state' => 5, 'ibge_code' => '2916104', 'name' => "Itaparica"]);
        City::create(['state' => 5, 'ibge_code' => '2916203', 'name' => "Itapé"]);
        City::create(['state' => 5, 'ibge_code' => '2916302', 'name' => "Itapebi"]);
        City::create(['state' => 5, 'ibge_code' => '2916401', 'name' => "Itapetinga"]);
        City::create(['state' => 5, 'ibge_code' => '2916500', 'name' => "Itapicuru"]);
        City::create(['state' => 5, 'ibge_code' => '2916609', 'name' => "Itapitanga"]);
        City::create(['state' => 5, 'ibge_code' => '2916708', 'name' => "Itaquara"]);
        City::create(['state' => 5, 'ibge_code' => '2916807', 'name' => "Itarantim"]);
        City::create(['state' => 5, 'ibge_code' => '2916856', 'name' => "Itatim"]);
        City::create(['state' => 5, 'ibge_code' => '2916906', 'name' => "Itiruçu"]);
        City::create(['state' => 5, 'ibge_code' => '2917003', 'name' => "Itiúba"]);
        City::create(['state' => 5, 'ibge_code' => '2917102', 'name' => "Itororó"]);
        City::create(['state' => 5, 'ibge_code' => '2917201', 'name' => "Ituaçu"]);
        City::create(['state' => 5, 'ibge_code' => '2917300', 'name' => "Ituberá"]);
        City::create(['state' => 5, 'ibge_code' => '2917334', 'name' => "Iuiú"]);
        City::create(['state' => 5, 'ibge_code' => '2917359', 'name' => "Jaborandi"]);
        City::create(['state' => 5, 'ibge_code' => '2917409', 'name' => "Jacaraci"]);
        City::create(['state' => 5, 'ibge_code' => '2917508', 'name' => "Jacobina"]);
        City::create(['state' => 5, 'ibge_code' => '2917607', 'name' => "Jaguaquara"]);
        City::create(['state' => 5, 'ibge_code' => '2917706', 'name' => "Jaguarari"]);
        City::create(['state' => 5, 'ibge_code' => '2917805', 'name' => "Jaguaripe"]);
        City::create(['state' => 5, 'ibge_code' => '2917904', 'name' => "Jandaíra"]);
        City::create(['state' => 5, 'ibge_code' => '2918001', 'name' => "Jequié"]);
        City::create(['state' => 5, 'ibge_code' => '2918100', 'name' => "Jeremoabo"]);
        City::create(['state' => 5, 'ibge_code' => '2918209', 'name' => "Jiquiriçá"]);
        City::create(['state' => 5, 'ibge_code' => '2918308', 'name' => "Jitaúna"]);
        City::create(['state' => 5, 'ibge_code' => '2918357', 'name' => "João Dourado"]);
        City::create(['state' => 5, 'ibge_code' => '2918407', 'name' => "Juazeiro"]);
        City::create(['state' => 5, 'ibge_code' => '2918456', 'name' => "Jucuruçu"]);
        City::create(['state' => 5, 'ibge_code' => '2918506', 'name' => "Jussara"]);
        City::create(['state' => 5, 'ibge_code' => '2918555', 'name' => "Jussari"]);
        City::create(['state' => 5, 'ibge_code' => '2918605', 'name' => "Jussiape"]);
        City::create(['state' => 5, 'ibge_code' => '2918704', 'name' => "Lafaiete Coutinho"]);
        City::create(['state' => 5, 'ibge_code' => '2918753', 'name' => "Lagoa Real"]);
        City::create(['state' => 5, 'ibge_code' => '2918803', 'name' => "Laje"]);
        City::create(['state' => 5, 'ibge_code' => '2918902', 'name' => "Lajedão"]);
        City::create(['state' => 5, 'ibge_code' => '2919009', 'name' => "Lajedinho"]);
        City::create(['state' => 5, 'ibge_code' => '2919058', 'name' => "Lajedo do Tabocal"]);
        City::create(['state' => 5, 'ibge_code' => '2919108', 'name' => "Lamarão"]);
        City::create(['state' => 5, 'ibge_code' => '2919157', 'name' => "Lapão"]);
        City::create(['state' => 5, 'ibge_code' => '2919207', 'name' => "Lauro de Freitas"]);
        City::create(['state' => 5, 'ibge_code' => '2919306', 'name' => "Lençóis"]);
        City::create(['state' => 5, 'ibge_code' => '2919405', 'name' => "Licínio de Almeida"]);
        City::create(['state' => 5, 'ibge_code' => '2919504', 'name' => "Livramento de Nossa Senhora"]);
        City::create(['state' => 5, 'ibge_code' => '2919553', 'name' => "Luís Eduardo Magalhães"]);
        City::create(['state' => 5, 'ibge_code' => '2919603', 'name' => "Macajuba"]);
        City::create(['state' => 5, 'ibge_code' => '2919702', 'name' => "Macarani"]);
        City::create(['state' => 5, 'ibge_code' => '2919801', 'name' => "Macaúbas"]);
        City::create(['state' => 5, 'ibge_code' => '2919900', 'name' => "Macururé"]);
        City::create(['state' => 5, 'ibge_code' => '2919926', 'name' => "Madre de Deus"]);
        City::create(['state' => 5, 'ibge_code' => '2919959', 'name' => "Maetinga"]);
        City::create(['state' => 5, 'ibge_code' => '2920007', 'name' => "Maiquinique"]);
        City::create(['state' => 5, 'ibge_code' => '2920106', 'name' => "Mairi"]);
        City::create(['state' => 5, 'ibge_code' => '2920205', 'name' => "Malhada"]);
        City::create(['state' => 5, 'ibge_code' => '2920304', 'name' => "Malhada de Pedras"]);
        City::create(['state' => 5, 'ibge_code' => '2920403', 'name' => "Manoel Vitorino"]);
        City::create(['state' => 5, 'ibge_code' => '2920452', 'name' => "Mansidão"]);
        City::create(['state' => 5, 'ibge_code' => '2920502', 'name' => "Maracás"]);
        City::create(['state' => 5, 'ibge_code' => '2920601', 'name' => "Maragogipe"]);
        City::create(['state' => 5, 'ibge_code' => '2920700', 'name' => "Maraú"]);
        City::create(['state' => 5, 'ibge_code' => '2920809', 'name' => "Marcionílio Souza"]);
        City::create(['state' => 5, 'ibge_code' => '2920908', 'name' => "Mascote"]);
        City::create(['state' => 5, 'ibge_code' => '2921005', 'name' => "Mata de São João"]);
        City::create(['state' => 5, 'ibge_code' => '2921054', 'name' => "Matina"]);
        City::create(['state' => 5, 'ibge_code' => '2921104', 'name' => "Medeiros Neto"]);
        City::create(['state' => 5, 'ibge_code' => '2921203', 'name' => "Miguel Calmon"]);
        City::create(['state' => 5, 'ibge_code' => '2921302', 'name' => "Milagres"]);
        City::create(['state' => 5, 'ibge_code' => '2921401', 'name' => "Mirangaba"]);
        City::create(['state' => 5, 'ibge_code' => '2921450', 'name' => "Mirante"]);
        City::create(['state' => 5, 'ibge_code' => '2921500', 'name' => "Monte Santo"]);
        City::create(['state' => 5, 'ibge_code' => '2921609', 'name' => "Morpará"]);
        City::create(['state' => 5, 'ibge_code' => '2921708', 'name' => "Morro do Chapéu"]);
        City::create(['state' => 5, 'ibge_code' => '2921807', 'name' => "Mortugaba"]);
        City::create(['state' => 5, 'ibge_code' => '2921906', 'name' => "Mucugê"]);
        City::create(['state' => 5, 'ibge_code' => '2922003', 'name' => "Mucuri"]);
        City::create(['state' => 5, 'ibge_code' => '2922052', 'name' => "Mulungu do Morro"]);
        City::create(['state' => 5, 'ibge_code' => '2922102', 'name' => "Mundo Novo"]);
        City::create(['state' => 5, 'ibge_code' => '2922201', 'name' => "Muniz Ferreira"]);
        City::create(['state' => 5, 'ibge_code' => '2922250', 'name' => "Muquém de São Francisco"]);
        City::create(['state' => 5, 'ibge_code' => '2922300', 'name' => "Muritiba"]);
        City::create(['state' => 5, 'ibge_code' => '2922409', 'name' => "Mutuípe"]);
        City::create(['state' => 5, 'ibge_code' => '2922508', 'name' => "Nazaré"]);
        City::create(['state' => 5, 'ibge_code' => '2922607', 'name' => "Nilo Peçanha"]);
        City::create(['state' => 5, 'ibge_code' => '2922656', 'name' => "Nordestina"]);
        City::create(['state' => 5, 'ibge_code' => '2922706', 'name' => "Nova Canaã"]);
        City::create(['state' => 5, 'ibge_code' => '2922730', 'name' => "Nova Fátima"]);
        City::create(['state' => 5, 'ibge_code' => '2922755', 'name' => "Nova Ibiá"]);
        City::create(['state' => 5, 'ibge_code' => '2922805', 'name' => "Nova Itarana"]);
        City::create(['state' => 5, 'ibge_code' => '2922854', 'name' => "Nova Redenção"]);
        City::create(['state' => 5, 'ibge_code' => '2922904', 'name' => "Nova Soure"]);
        City::create(['state' => 5, 'ibge_code' => '2923001', 'name' => "Nova Viçosa"]);
        City::create(['state' => 5, 'ibge_code' => '2923035', 'name' => "Novo Horizonte"]);
        City::create(['state' => 5, 'ibge_code' => '2923050', 'name' => "Novo Triunfo"]);
        City::create(['state' => 5, 'ibge_code' => '2923100', 'name' => "Olindina"]);
        City::create(['state' => 5, 'ibge_code' => '2923209', 'name' => "Oliveira dos Brejinhos"]);
        City::create(['state' => 5, 'ibge_code' => '2923308', 'name' => "Ouriçangas"]);
        City::create(['state' => 5, 'ibge_code' => '2923357', 'name' => "Ourolândia"]);
        City::create(['state' => 5, 'ibge_code' => '2923407', 'name' => "Palmas de Monte Alto"]);
        City::create(['state' => 5, 'ibge_code' => '2923506', 'name' => "Palmeiras"]);
        City::create(['state' => 5, 'ibge_code' => '2923605', 'name' => "Paramirim"]);
        City::create(['state' => 5, 'ibge_code' => '2923704', 'name' => "Paratinga"]);
        City::create(['state' => 5, 'ibge_code' => '2923803', 'name' => "Paripiranga"]);
        City::create(['state' => 5, 'ibge_code' => '2923902', 'name' => "Pau Brasil"]);
        City::create(['state' => 5, 'ibge_code' => '2924009', 'name' => "Paulo Afonso"]);
        City::create(['state' => 5, 'ibge_code' => '2924058', 'name' => "Pé de Serra"]);
        City::create(['state' => 5, 'ibge_code' => '2924108', 'name' => "Pedrão"]);
        City::create(['state' => 5, 'ibge_code' => '2924207', 'name' => "Pedro Alexandre"]);
        City::create(['state' => 5, 'ibge_code' => '2924306', 'name' => "Piatã"]);
        City::create(['state' => 5, 'ibge_code' => '2924405', 'name' => "Pilão Arcado"]);
        City::create(['state' => 5, 'ibge_code' => '2924504', 'name' => "Pindaí"]);
        City::create(['state' => 5, 'ibge_code' => '2924603', 'name' => "Pindobaçu"]);
        City::create(['state' => 5, 'ibge_code' => '2924652', 'name' => "Pintadas"]);
        City::create(['state' => 5, 'ibge_code' => '2924678', 'name' => "Piraí do Norte"]);
        City::create(['state' => 5, 'ibge_code' => '2924702', 'name' => "Piripá"]);
        City::create(['state' => 5, 'ibge_code' => '2924801', 'name' => "Piritiba"]);
        City::create(['state' => 5, 'ibge_code' => '2924900', 'name' => "Planaltino"]);
        City::create(['state' => 5, 'ibge_code' => '2925006', 'name' => "Planalto"]);
        City::create(['state' => 5, 'ibge_code' => '2925105', 'name' => "Poções"]);
        City::create(['state' => 5, 'ibge_code' => '2925204', 'name' => "Pojuca"]);
        City::create(['state' => 5, 'ibge_code' => '2925253', 'name' => "Ponto Novo"]);
        City::create(['state' => 5, 'ibge_code' => '2925303', 'name' => "Porto Seguro"]);
        City::create(['state' => 5, 'ibge_code' => '2925402', 'name' => "Potiraguá"]);
        City::create(['state' => 5, 'ibge_code' => '2925501', 'name' => "Prado"]);
        City::create(['state' => 5, 'ibge_code' => '2925600', 'name' => "Presidente Dutra"]);
        City::create(['state' => 5, 'ibge_code' => '2925709', 'name' => "Presidente Jânio Quadros"]);
        City::create(['state' => 5, 'ibge_code' => '2925758', 'name' => "Presidente Tancredo Neves"]);
        City::create(['state' => 5, 'ibge_code' => '2925808', 'name' => "Queimadas"]);
        City::create(['state' => 5, 'ibge_code' => '2925907', 'name' => "Quijingue"]);
        City::create(['state' => 5, 'ibge_code' => '2925931', 'name' => "Quixabeira"]);
        City::create(['state' => 5, 'ibge_code' => '2925956', 'name' => "Rafael Jambeiro"]);
        City::create(['state' => 5, 'ibge_code' => '2926004', 'name' => "Remanso"]);
        City::create(['state' => 5, 'ibge_code' => '2926103', 'name' => "Retirolândia"]);
        City::create(['state' => 5, 'ibge_code' => '2926202', 'name' => "Riachão das Neves"]);
        City::create(['state' => 5, 'ibge_code' => '2926301', 'name' => "Riachão do Jacuípe"]);
        City::create(['state' => 5, 'ibge_code' => '2926400', 'name' => "Riacho de Santana"]);
        City::create(['state' => 5, 'ibge_code' => '2926509', 'name' => "Ribeira do Amparo"]);
        City::create(['state' => 5, 'ibge_code' => '2926608', 'name' => "Ribeira do Pombal"]);
        City::create(['state' => 5, 'ibge_code' => '2926657', 'name' => "Ribeirão do Largo"]);
        City::create(['state' => 5, 'ibge_code' => '2926707', 'name' => "Rio de Contas"]);
        City::create(['state' => 5, 'ibge_code' => '2926806', 'name' => "Rio do Antônio"]);
        City::create(['state' => 5, 'ibge_code' => '2926905', 'name' => "Rio do Pires"]);
        City::create(['state' => 5, 'ibge_code' => '2927002', 'name' => "Rio Real"]);
        City::create(['state' => 5, 'ibge_code' => '2927101', 'name' => "Rodelas"]);
        City::create(['state' => 5, 'ibge_code' => '2927200', 'name' => "Ruy Barbosa"]);
        City::create(['state' => 5, 'ibge_code' => '2927309', 'name' => "Salinas da Margarida"]);
        City::create(['state' => 5, 'ibge_code' => '2927408', 'name' => "Salvador"]);
        City::create(['state' => 5, 'ibge_code' => '2927507', 'name' => "Santa Bárbara"]);
        City::create(['state' => 5, 'ibge_code' => '2927606', 'name' => "Santa Brígida"]);
        City::create(['state' => 5, 'ibge_code' => '2927705', 'name' => "Santa Cruz Cabrália"]);
        City::create(['state' => 5, 'ibge_code' => '2927804', 'name' => "Santa Cruz da Vitória"]);
        City::create(['state' => 5, 'ibge_code' => '2927903', 'name' => "Santa Inês"]);
        City::create(['state' => 5, 'ibge_code' => '2928059', 'name' => "Santa Luzia"]);
        City::create(['state' => 5, 'ibge_code' => '2928109', 'name' => "Santa Maria da Vitória"]);
        City::create(['state' => 5, 'ibge_code' => '2928406', 'name' => "Santa Rita de Cássia"]);
        City::create(['state' => 5, 'ibge_code' => '2928505', 'name' => "Santa Teresinha"]);
        City::create(['state' => 5, 'ibge_code' => '2928000', 'name' => "Santaluz"]);
        City::create(['state' => 5, 'ibge_code' => '2928208', 'name' => "Santana"]);
        City::create(['state' => 5, 'ibge_code' => '2928307', 'name' => "Santanópolis"]);
        City::create(['state' => 5, 'ibge_code' => '2928604', 'name' => "Santo Amaro"]);
        City::create(['state' => 5, 'ibge_code' => '2928703', 'name' => "Santo Antônio de Jesus"]);
        City::create(['state' => 5, 'ibge_code' => '2928802', 'name' => "Santo Estêvão"]);
        City::create(['state' => 5, 'ibge_code' => '2928901', 'name' => "São Desidério"]);
        City::create(['state' => 5, 'ibge_code' => '2928950', 'name' => "São Domingos"]);
        City::create(['state' => 5, 'ibge_code' => '2929107', 'name' => "São Felipe"]);
        City::create(['state' => 5, 'ibge_code' => '2929008', 'name' => "São Félix"]);
        City::create(['state' => 5, 'ibge_code' => '2929057', 'name' => "São Félix do Coribe"]);
        City::create(['state' => 5, 'ibge_code' => '2929206', 'name' => "São Francisco do Conde"]);
        City::create(['state' => 5, 'ibge_code' => '2929255', 'name' => "São Gabriel"]);
        City::create(['state' => 5, 'ibge_code' => '2929305', 'name' => "São Gonçalo dos Campos"]);
        City::create(['state' => 5, 'ibge_code' => '2929354', 'name' => "São José da Vitória"]);
        City::create(['state' => 5, 'ibge_code' => '2929370', 'name' => "São José do Jacuípe"]);
        City::create(['state' => 5, 'ibge_code' => '2929404', 'name' => "São Miguel das Matas"]);
        City::create(['state' => 5, 'ibge_code' => '2929503', 'name' => "São Sebastião do Passé"]);
        City::create(['state' => 5, 'ibge_code' => '2929602', 'name' => "Sapeaçu"]);
        City::create(['state' => 5, 'ibge_code' => '2929701', 'name' => "Sátiro Dias"]);
        City::create(['state' => 5, 'ibge_code' => '2929750', 'name' => "Saubara"]);
        City::create(['state' => 5, 'ibge_code' => '2929800', 'name' => "Saúde"]);
        City::create(['state' => 5, 'ibge_code' => '2929909', 'name' => "Seabra"]);
        City::create(['state' => 5, 'ibge_code' => '2930006', 'name' => "Sebastião Laranjeiras"]);
        City::create(['state' => 5, 'ibge_code' => '2930105', 'name' => "Senhor do Bonfim"]);
        City::create(['state' => 5, 'ibge_code' => '2930204', 'name' => "Sento Sé"]);
        City::create(['state' => 5, 'ibge_code' => '2930154', 'name' => "Serra do Ramalho"]);
        City::create(['state' => 5, 'ibge_code' => '2930303', 'name' => "Serra Dourada"]);
        City::create(['state' => 5, 'ibge_code' => '2930402', 'name' => "Serra Preta"]);
        City::create(['state' => 5, 'ibge_code' => '2930501', 'name' => "Serrinha"]);
        City::create(['state' => 5, 'ibge_code' => '2930600', 'name' => "Serrolândia"]);
        City::create(['state' => 5, 'ibge_code' => '2930709', 'name' => "Simões Filho"]);
        City::create(['state' => 5, 'ibge_code' => '2930758', 'name' => "Sítio do Mato"]);
        City::create(['state' => 5, 'ibge_code' => '2930766', 'name' => "Sítio do Quinto"]);
        City::create(['state' => 5, 'ibge_code' => '2930774', 'name' => "Sobradinho"]);
        City::create(['state' => 5, 'ibge_code' => '2930808', 'name' => "Souto Soares"]);
        City::create(['state' => 5, 'ibge_code' => '2930907', 'name' => "Tabocas do Brejo Velho"]);
        City::create(['state' => 5, 'ibge_code' => '2931004', 'name' => "Tanhaçu"]);
        City::create(['state' => 5, 'ibge_code' => '2931053', 'name' => "Tanque Novo"]);
        City::create(['state' => 5, 'ibge_code' => '2931103', 'name' => "Tanquinho"]);
        City::create(['state' => 5, 'ibge_code' => '2931202', 'name' => "Taperoá"]);
        City::create(['state' => 5, 'ibge_code' => '2931301', 'name' => "Tapiramutá"]);
        City::create(['state' => 5, 'ibge_code' => '2931350', 'name' => "Teixeira de Freitas"]);
        City::create(['state' => 5, 'ibge_code' => '2931400', 'name' => "Teodoro Sampaio"]);
        City::create(['state' => 5, 'ibge_code' => '2931509', 'name' => "Teofilândia"]);
        City::create(['state' => 5, 'ibge_code' => '2931608', 'name' => "Teolândia"]);
        City::create(['state' => 5, 'ibge_code' => '2931707', 'name' => "Terra Nova"]);
        City::create(['state' => 5, 'ibge_code' => '2931806', 'name' => "Tremedal"]);
        City::create(['state' => 5, 'ibge_code' => '2931905', 'name' => "Tucano"]);
        City::create(['state' => 5, 'ibge_code' => '2932002', 'name' => "Uauá"]);
        City::create(['state' => 5, 'ibge_code' => '2932101', 'name' => "Ubaíra"]);
        City::create(['state' => 5, 'ibge_code' => '2932200', 'name' => "Ubaitaba"]);
        City::create(['state' => 5, 'ibge_code' => '2932309', 'name' => "Ubatã"]);
        City::create(['state' => 5, 'ibge_code' => '2932408', 'name' => "Uibaí"]);
        City::create(['state' => 5, 'ibge_code' => '2932457', 'name' => "Umburanas"]);
        City::create(['state' => 5, 'ibge_code' => '2932507', 'name' => "Una"]);
        City::create(['state' => 5, 'ibge_code' => '2932606', 'name' => "Urandi"]);
        City::create(['state' => 5, 'ibge_code' => '2932705', 'name' => "Uruçuca"]);
        City::create(['state' => 5, 'ibge_code' => '2932804', 'name' => "Utinga"]);
        City::create(['state' => 5, 'ibge_code' => '2932903', 'name' => "Valença"]);
        City::create(['state' => 5, 'ibge_code' => '2933000', 'name' => "Valente"]);
        City::create(['state' => 5, 'ibge_code' => '2933059', 'name' => "Várzea da Roça"]);
        City::create(['state' => 5, 'ibge_code' => '2933109', 'name' => "Várzea do Poço"]);
        City::create(['state' => 5, 'ibge_code' => '2933158', 'name' => "Várzea Nova"]);
        City::create(['state' => 5, 'ibge_code' => '2933174', 'name' => "Varzedo"]);
        City::create(['state' => 5, 'ibge_code' => '2933208', 'name' => "Vera Cruz"]);
        City::create(['state' => 5, 'ibge_code' => '2933257', 'name' => "Vereda"]);
        City::create(['state' => 5, 'ibge_code' => '2933307', 'name' => "Vitória da Conquista"]);
        City::create(['state' => 5, 'ibge_code' => '2933406', 'name' => "Wagner"]);
        City::create(['state' => 5, 'ibge_code' => '2933455', 'name' => "Wanderley"]);
        City::create(['state' => 5, 'ibge_code' => '2933505', 'name' => "Wenceslau Guimarães"]);
        City::create(['state' => 5, 'ibge_code' => '2933604', 'name' => "Xique-Xique"]);

        City::create(['state' => 6, 'ibge_code' => '2300101', 'name' => "Abaiara"]);
        City::create(['state' => 6, 'ibge_code' => '2300150', 'name' => "Acarape"]);
        City::create(['state' => 6, 'ibge_code' => '2300200', 'name' => "Acaraú"]);
        City::create(['state' => 6, 'ibge_code' => '2300309', 'name' => "Acopiara"]);
        City::create(['state' => 6, 'ibge_code' => '2300408', 'name' => "Aiuaba"]);
        City::create(['state' => 6, 'ibge_code' => '2300507', 'name' => "Alcântaras"]);
        City::create(['state' => 6, 'ibge_code' => '2300606', 'name' => "Altaneira"]);
        City::create(['state' => 6, 'ibge_code' => '2300705', 'name' => "Alto Santo"]);
        City::create(['state' => 6, 'ibge_code' => '2300754', 'name' => "Amontada"]);
        City::create(['state' => 6, 'ibge_code' => '2300804', 'name' => "Antonina do Norte"]);
        City::create(['state' => 6, 'ibge_code' => '2300903', 'name' => "Apuiarés"]);
        City::create(['state' => 6, 'ibge_code' => '2301000', 'name' => "Aquiraz"]);
        City::create(['state' => 6, 'ibge_code' => '2301109', 'name' => "Aracati"]);
        City::create(['state' => 6, 'ibge_code' => '2301208', 'name' => "Aracoiaba"]);
        City::create(['state' => 6, 'ibge_code' => '2301257', 'name' => "Ararendá"]);
        City::create(['state' => 6, 'ibge_code' => '2301307', 'name' => "Araripe"]);
        City::create(['state' => 6, 'ibge_code' => '2301406', 'name' => "Aratuba"]);
        City::create(['state' => 6, 'ibge_code' => '2301505', 'name' => "Arneiroz"]);
        City::create(['state' => 6, 'ibge_code' => '2301604', 'name' => "Assaré"]);
        City::create(['state' => 6, 'ibge_code' => '2301703', 'name' => "Aurora"]);
        City::create(['state' => 6, 'ibge_code' => '2301802', 'name' => "Baixio"]);
        City::create(['state' => 6, 'ibge_code' => '2301851', 'name' => "Banabuiú"]);
        City::create(['state' => 6, 'ibge_code' => '2301901', 'name' => "Barbalha"]);
        City::create(['state' => 6, 'ibge_code' => '2301950', 'name' => "Barreira"]);
        City::create(['state' => 6, 'ibge_code' => '2302008', 'name' => "Barro"]);
        City::create(['state' => 6, 'ibge_code' => '2302057', 'name' => "Barroquinha"]);
        City::create(['state' => 6, 'ibge_code' => '2302107', 'name' => "Baturité"]);
        City::create(['state' => 6, 'ibge_code' => '2302206', 'name' => "Beberibe"]);
        City::create(['state' => 6, 'ibge_code' => '2302305', 'name' => "Bela Cruz"]);
        City::create(['state' => 6, 'ibge_code' => '2302404', 'name' => "Boa Viagem"]);
        City::create(['state' => 6, 'ibge_code' => '2302503', 'name' => "Brejo Santo"]);
        City::create(['state' => 6, 'ibge_code' => '2302602', 'name' => "Camocim"]);
        City::create(['state' => 6, 'ibge_code' => '2302701', 'name' => "Campos Sales"]);
        City::create(['state' => 6, 'ibge_code' => '2302800', 'name' => "Canindé"]);
        City::create(['state' => 6, 'ibge_code' => '2302909', 'name' => "Capistrano"]);
        City::create(['state' => 6, 'ibge_code' => '2303006', 'name' => "Caridade"]);
        City::create(['state' => 6, 'ibge_code' => '2303105', 'name' => "Cariré"]);
        City::create(['state' => 6, 'ibge_code' => '2303204', 'name' => "Caririaçu"]);
        City::create(['state' => 6, 'ibge_code' => '2303303', 'name' => "Cariús"]);
        City::create(['state' => 6, 'ibge_code' => '2303402', 'name' => "Carnaubal"]);
        City::create(['state' => 6, 'ibge_code' => '2303501', 'name' => "Cascavel"]);
        City::create(['state' => 6, 'ibge_code' => '2303600', 'name' => "Catarina"]);
        City::create(['state' => 6, 'ibge_code' => '2303659', 'name' => "Catunda"]);
        City::create(['state' => 6, 'ibge_code' => '2303709', 'name' => "Caucaia"]);
        City::create(['state' => 6, 'ibge_code' => '2303808', 'name' => "Cedro"]);
        City::create(['state' => 6, 'ibge_code' => '2303907', 'name' => "Chaval"]);
        City::create(['state' => 6, 'ibge_code' => '2303931', 'name' => "Choró"]);
        City::create(['state' => 6, 'ibge_code' => '2303956', 'name' => "Chorozinho"]);
        City::create(['state' => 6, 'ibge_code' => '2304004', 'name' => "Coreaú"]);
        City::create(['state' => 6, 'ibge_code' => '2304103', 'name' => "Crateús"]);
        City::create(['state' => 6, 'ibge_code' => '2304202', 'name' => "Crato"]);
        City::create(['state' => 6, 'ibge_code' => '2304236', 'name' => "Croatá"]);
        City::create(['state' => 6, 'ibge_code' => '2304251', 'name' => "Cruz"]);
        City::create(['state' => 6, 'ibge_code' => '2304269', 'name' => "Deputado Irapuan Pinheiro"]);
        City::create(['state' => 6, 'ibge_code' => '2304277', 'name' => "Ererê"]);
        City::create(['state' => 6, 'ibge_code' => '2304285', 'name' => "Eusébio"]);
        City::create(['state' => 6, 'ibge_code' => '2304301', 'name' => "Farias Brito"]);
        City::create(['state' => 6, 'ibge_code' => '2304350', 'name' => "Forquilha"]);
        City::create(['state' => 6, 'ibge_code' => '2304400', 'name' => "Fortaleza"]);
        City::create(['state' => 6, 'ibge_code' => '2304459', 'name' => "Fortim"]);
        City::create(['state' => 6, 'ibge_code' => '2304509', 'name' => "Frecheirinha"]);
        City::create(['state' => 6, 'ibge_code' => '2304608', 'name' => "General Sampaio"]);
        City::create(['state' => 6, 'ibge_code' => '2304657', 'name' => "Graça"]);
        City::create(['state' => 6, 'ibge_code' => '2304707', 'name' => "Granja"]);
        City::create(['state' => 6, 'ibge_code' => '2304806', 'name' => "Granjeiro"]);
        City::create(['state' => 6, 'ibge_code' => '2304905', 'name' => "Groaíras"]);
        City::create(['state' => 6, 'ibge_code' => '2304954', 'name' => "Guaiúba"]);
        City::create(['state' => 6, 'ibge_code' => '2305001', 'name' => "Guaraciaba do Norte"]);
        City::create(['state' => 6, 'ibge_code' => '2305100', 'name' => "Guaramiranga"]);
        City::create(['state' => 6, 'ibge_code' => '2305209', 'name' => "Hidrolândia"]);
        City::create(['state' => 6, 'ibge_code' => '2305233', 'name' => "Horizonte"]);
        City::create(['state' => 6, 'ibge_code' => '2305266', 'name' => "Ibaretama"]);
        City::create(['state' => 6, 'ibge_code' => '2305308', 'name' => "Ibiapina"]);
        City::create(['state' => 6, 'ibge_code' => '2305332', 'name' => "Ibicuitinga"]);
        City::create(['state' => 6, 'ibge_code' => '2305357', 'name' => "Icapuí"]);
        City::create(['state' => 6, 'ibge_code' => '2305407', 'name' => "Icó"]);
        City::create(['state' => 6, 'ibge_code' => '2305506', 'name' => "Iguatu"]);
        City::create(['state' => 6, 'ibge_code' => '2305605', 'name' => "Independência"]);
        City::create(['state' => 6, 'ibge_code' => '2305654', 'name' => "Ipaporanga"]);
        City::create(['state' => 6, 'ibge_code' => '2305704', 'name' => "Ipaumirim"]);
        City::create(['state' => 6, 'ibge_code' => '2305803', 'name' => "Ipu"]);
        City::create(['state' => 6, 'ibge_code' => '2305902', 'name' => "Ipueiras"]);
        City::create(['state' => 6, 'ibge_code' => '2306009', 'name' => "Iracema"]);
        City::create(['state' => 6, 'ibge_code' => '2306108', 'name' => "Irauçuba"]);
        City::create(['state' => 6, 'ibge_code' => '2306207', 'name' => "Itaiçaba"]);
        City::create(['state' => 6, 'ibge_code' => '2306256', 'name' => "Itaitinga"]);
        City::create(['state' => 6, 'ibge_code' => '2306306', 'name' => "Itapagé"]);
        City::create(['state' => 6, 'ibge_code' => '2306405', 'name' => "Itapipoca"]);
        City::create(['state' => 6, 'ibge_code' => '2306504', 'name' => "Itapiúna"]);
        City::create(['state' => 6, 'ibge_code' => '2306553', 'name' => "Itarema"]);
        City::create(['state' => 6, 'ibge_code' => '2306603', 'name' => "Itatira"]);
        City::create(['state' => 6, 'ibge_code' => '2306702', 'name' => "Jaguaretama"]);
        City::create(['state' => 6, 'ibge_code' => '2306801', 'name' => "Jaguaribara"]);
        City::create(['state' => 6, 'ibge_code' => '2306900', 'name' => "Jaguaribe"]);
        City::create(['state' => 6, 'ibge_code' => '2307007', 'name' => "Jaguaruana"]);
        City::create(['state' => 6, 'ibge_code' => '2307106', 'name' => "Jardim"]);
        City::create(['state' => 6, 'ibge_code' => '2307205', 'name' => "Jati"]);
        City::create(['state' => 6, 'ibge_code' => '2307254', 'name' => "Jijoca de Jericoacoara"]);
        City::create(['state' => 6, 'ibge_code' => '2307304', 'name' => "Juazeiro do Norte"]);
        City::create(['state' => 6, 'ibge_code' => '2307403', 'name' => "Jucás"]);
        City::create(['state' => 6, 'ibge_code' => '2307502', 'name' => "Lavras da Mangabeira"]);
        City::create(['state' => 6, 'ibge_code' => '2307601', 'name' => "Limoeiro do Norte"]);
        City::create(['state' => 6, 'ibge_code' => '2307635', 'name' => "Madalena"]);
        City::create(['state' => 6, 'ibge_code' => '2307650', 'name' => "Maracanaú"]);
        City::create(['state' => 6, 'ibge_code' => '2307700', 'name' => "Maranguape"]);
        City::create(['state' => 6, 'ibge_code' => '2307809', 'name' => "Marco"]);
        City::create(['state' => 6, 'ibge_code' => '2307908', 'name' => "Martinópole"]);
        City::create(['state' => 6, 'ibge_code' => '2308005', 'name' => "Massapê"]);
        City::create(['state' => 6, 'ibge_code' => '2308104', 'name' => "Mauriti"]);
        City::create(['state' => 6, 'ibge_code' => '2308203', 'name' => "Meruoca"]);
        City::create(['state' => 6, 'ibge_code' => '2308302', 'name' => "Milagres"]);
        City::create(['state' => 6, 'ibge_code' => '2308351', 'name' => "Milhã"]);
        City::create(['state' => 6, 'ibge_code' => '2308377', 'name' => "Miraíma"]);
        City::create(['state' => 6, 'ibge_code' => '2308401', 'name' => "Missão Velha"]);
        City::create(['state' => 6, 'ibge_code' => '2308500', 'name' => "Mombaça"]);
        City::create(['state' => 6, 'ibge_code' => '2308609', 'name' => "Monsenhor Tabosa"]);
        City::create(['state' => 6, 'ibge_code' => '2308708', 'name' => "Morada Nova"]);
        City::create(['state' => 6, 'ibge_code' => '2308807', 'name' => "Moraújo"]);
        City::create(['state' => 6, 'ibge_code' => '2308906', 'name' => "Morrinhos"]);
        City::create(['state' => 6, 'ibge_code' => '2309003', 'name' => "Mucambo"]);
        City::create(['state' => 6, 'ibge_code' => '2309102', 'name' => "Mulungu"]);
        City::create(['state' => 6, 'ibge_code' => '2309201', 'name' => "Nova Olinda"]);
        City::create(['state' => 6, 'ibge_code' => '2309300', 'name' => "Nova Russas"]);
        City::create(['state' => 6, 'ibge_code' => '2309409', 'name' => "Novo Oriente"]);
        City::create(['state' => 6, 'ibge_code' => '2309458', 'name' => "Ocara"]);
        City::create(['state' => 6, 'ibge_code' => '2309508', 'name' => "Orós"]);
        City::create(['state' => 6, 'ibge_code' => '2309607', 'name' => "Pacajus"]);
        City::create(['state' => 6, 'ibge_code' => '2309706', 'name' => "Pacatuba"]);
        City::create(['state' => 6, 'ibge_code' => '2309805', 'name' => "Pacoti"]);
        City::create(['state' => 6, 'ibge_code' => '2309904', 'name' => "Pacujá"]);
        City::create(['state' => 6, 'ibge_code' => '2310001', 'name' => "Palhano"]);
        City::create(['state' => 6, 'ibge_code' => '2310100', 'name' => "Palmácia"]);
        City::create(['state' => 6, 'ibge_code' => '2310209', 'name' => "Paracuru"]);
        City::create(['state' => 6, 'ibge_code' => '2310258', 'name' => "Paraipaba"]);
        City::create(['state' => 6, 'ibge_code' => '2310308', 'name' => "Parambu"]);
        City::create(['state' => 6, 'ibge_code' => '2310407', 'name' => "Paramoti"]);
        City::create(['state' => 6, 'ibge_code' => '2310506', 'name' => "Pedra Branca"]);
        City::create(['state' => 6, 'ibge_code' => '2310605', 'name' => "Penaforte"]);
        City::create(['state' => 6, 'ibge_code' => '2310704', 'name' => "Pentecoste"]);
        City::create(['state' => 6, 'ibge_code' => '2310803', 'name' => "Pereiro"]);
        City::create(['state' => 6, 'ibge_code' => '2310852', 'name' => "Pindoretama"]);
        City::create(['state' => 6, 'ibge_code' => '2310902', 'name' => "Piquet Carneiro"]);
        City::create(['state' => 6, 'ibge_code' => '2310951', 'name' => "Pires Ferreira"]);
        City::create(['state' => 6, 'ibge_code' => '2311009', 'name' => "Poranga"]);
        City::create(['state' => 6, 'ibge_code' => '2311108', 'name' => "Porteiras"]);
        City::create(['state' => 6, 'ibge_code' => '2311207', 'name' => "Potengi"]);
        City::create(['state' => 6, 'ibge_code' => '2311231', 'name' => "Potiretama"]);
        City::create(['state' => 6, 'ibge_code' => '2311264', 'name' => "Quiterianópolis"]);
        City::create(['state' => 6, 'ibge_code' => '2311306', 'name' => "Quixadá"]);
        City::create(['state' => 6, 'ibge_code' => '2311355', 'name' => "Quixelô"]);
        City::create(['state' => 6, 'ibge_code' => '2311405', 'name' => "Quixeramobim"]);
        City::create(['state' => 6, 'ibge_code' => '2311504', 'name' => "Quixeré"]);
        City::create(['state' => 6, 'ibge_code' => '2311603', 'name' => "Redenção"]);
        City::create(['state' => 6, 'ibge_code' => '2311702', 'name' => "Reriutaba"]);
        City::create(['state' => 6, 'ibge_code' => '2311801', 'name' => "Russas"]);
        City::create(['state' => 6, 'ibge_code' => '2311900', 'name' => "Saboeiro"]);
        City::create(['state' => 6, 'ibge_code' => '2311959', 'name' => "Salitre"]);
        City::create(['state' => 6, 'ibge_code' => '2312205', 'name' => "Santa Quitéria"]);
        City::create(['state' => 6, 'ibge_code' => '2312007', 'name' => "Santana do Acaraú"]);
        City::create(['state' => 6, 'ibge_code' => '2312106', 'name' => "Santana do Cariri"]);
        City::create(['state' => 6, 'ibge_code' => '2312304', 'name' => "São Benedito"]);
        City::create(['state' => 6, 'ibge_code' => '2312403', 'name' => "São Gonçalo do Amarante"]);
        City::create(['state' => 6, 'ibge_code' => '2312502', 'name' => "São João do Jaguaribe"]);
        City::create(['state' => 6, 'ibge_code' => '2312601', 'name' => "São Luís do Curu"]);
        City::create(['state' => 6, 'ibge_code' => '2312700', 'name' => "Senador Pompeu"]);
        City::create(['state' => 6, 'ibge_code' => '2312809', 'name' => "Senador Sá"]);
        City::create(['state' => 6, 'ibge_code' => '2312908', 'name' => "Sobral"]);
        City::create(['state' => 6, 'ibge_code' => '2313005', 'name' => "Solonópole"]);
        City::create(['state' => 6, 'ibge_code' => '2313104', 'name' => "Tabuleiro do Norte"]);
        City::create(['state' => 6, 'ibge_code' => '2313203', 'name' => "Tamboril"]);
        City::create(['state' => 6, 'ibge_code' => '2313252', 'name' => "Tarrafas"]);
        City::create(['state' => 6, 'ibge_code' => '2313302', 'name' => "Tauá"]);
        City::create(['state' => 6, 'ibge_code' => '2313351', 'name' => "Tejuçuoca"]);
        City::create(['state' => 6, 'ibge_code' => '2313401', 'name' => "Tianguá"]);
        City::create(['state' => 6, 'ibge_code' => '2313500', 'name' => "Trairi"]);
        City::create(['state' => 6, 'ibge_code' => '2313559', 'name' => "Tururu"]);
        City::create(['state' => 6, 'ibge_code' => '2313609', 'name' => "Ubajara"]);
        City::create(['state' => 6, 'ibge_code' => '2313708', 'name' => "Umari"]);
        City::create(['state' => 6, 'ibge_code' => '2313757', 'name' => "Umirim"]);
        City::create(['state' => 6, 'ibge_code' => '2313807', 'name' => "Uruburetama"]);
        City::create(['state' => 6, 'ibge_code' => '2313906', 'name' => "Uruoca"]);
        City::create(['state' => 6, 'ibge_code' => '2313955', 'name' => "Varjota"]);
        City::create(['state' => 6, 'ibge_code' => '2314003', 'name' => "Várzea Alegre"]);
        City::create(['state' => 6, 'ibge_code' => '2314102', 'name' => "Viçosa do Ceará"]);

        City::create(['state' => 7, 'name' => 'Brasília', 'ibge_code' => '5300108']);

        City::create(['state' => 8, 'ibge_code' => '3200102', 'name' => "Afonso Cláudio"]);
        City::create(['state' => 8, 'ibge_code' => '3200169', 'name' => "Água Doce do Norte"]);
        City::create(['state' => 8, 'ibge_code' => '3200136', 'name' => "Águia Branca"]);
        City::create(['state' => 8, 'ibge_code' => '3200201', 'name' => "Alegre"]);
        City::create(['state' => 8, 'ibge_code' => '3200300', 'name' => "Alfredo Chaves"]);
        City::create(['state' => 8, 'ibge_code' => '3200359', 'name' => "Alto Rio Novo"]);
        City::create(['state' => 8, 'ibge_code' => '3200409', 'name' => "Anchieta"]);
        City::create(['state' => 8, 'ibge_code' => '3200508', 'name' => "Apiacá"]);
        City::create(['state' => 8, 'ibge_code' => '3200607', 'name' => "Aracruz"]);
        City::create(['state' => 8, 'ibge_code' => '3200706', 'name' => "Atilio Vivacqua"]);
        City::create(['state' => 8, 'ibge_code' => '3200805', 'name' => "Baixo Guandu"]);
        City::create(['state' => 8, 'ibge_code' => '3200904', 'name' => "Barra de São Francisco"]);
        City::create(['state' => 8, 'ibge_code' => '3201001', 'name' => "Boa Esperança"]);
        City::create(['state' => 8, 'ibge_code' => '3201100', 'name' => "Bom Jesus do Norte"]);
        City::create(['state' => 8, 'ibge_code' => '3201159', 'name' => "Brejetuba"]);
        City::create(['state' => 8, 'ibge_code' => '3201209', 'name' => "Cachoeiro de Itapemirim"]);
        City::create(['state' => 8, 'ibge_code' => '3201308', 'name' => "Cariacica"]);
        City::create(['state' => 8, 'ibge_code' => '3201407', 'name' => "Castelo"]);
        City::create(['state' => 8, 'ibge_code' => '3201506', 'name' => "Colatina"]);
        City::create(['state' => 8, 'ibge_code' => '3201605', 'name' => "Conceição da Barra"]);
        City::create(['state' => 8, 'ibge_code' => '3201704', 'name' => "Conceição do Castelo"]);
        City::create(['state' => 8, 'ibge_code' => '3201803', 'name' => "Divino de São Lourenço"]);
        City::create(['state' => 8, 'ibge_code' => '3201902', 'name' => "Domingos Martins"]);
        City::create(['state' => 8, 'ibge_code' => '3202009', 'name' => "Dores do Rio Preto"]);
        City::create(['state' => 8, 'ibge_code' => '3202108', 'name' => "Ecoporanga"]);
        City::create(['state' => 8, 'ibge_code' => '3202207', 'name' => "Fundão"]);
        City::create(['state' => 8, 'ibge_code' => '3202256', 'name' => "Governador Lindenberg"]);
        City::create(['state' => 8, 'ibge_code' => '3202306', 'name' => "Guaçuí"]);
        City::create(['state' => 8, 'ibge_code' => '3202405', 'name' => "Guarapari"]);
        City::create(['state' => 8, 'ibge_code' => '3202454', 'name' => "Ibatiba"]);
        City::create(['state' => 8, 'ibge_code' => '3202504', 'name' => "Ibiraçu"]);
        City::create(['state' => 8, 'ibge_code' => '3202553', 'name' => "Ibitirama"]);
        City::create(['state' => 8, 'ibge_code' => '3202603', 'name' => "Iconha"]);
        City::create(['state' => 8, 'ibge_code' => '3202652', 'name' => "Irupi"]);
        City::create(['state' => 8, 'ibge_code' => '3202702', 'name' => "Itaguaçu"]);
        City::create(['state' => 8, 'ibge_code' => '3202801', 'name' => "Itapemirim"]);
        City::create(['state' => 8, 'ibge_code' => '3202900', 'name' => "Itarana"]);
        City::create(['state' => 8, 'ibge_code' => '3203007', 'name' => "Iúna"]);
        City::create(['state' => 8, 'ibge_code' => '3203056', 'name' => "Jaguaré"]);
        City::create(['state' => 8, 'ibge_code' => '3203106', 'name' => "Jerônimo Monteiro"]);
        City::create(['state' => 8, 'ibge_code' => '3203130', 'name' => "João Neiva"]);
        City::create(['state' => 8, 'ibge_code' => '3203163', 'name' => "Laranja da Terra"]);
        City::create(['state' => 8, 'ibge_code' => '3203205', 'name' => "Linhares"]);
        City::create(['state' => 8, 'ibge_code' => '3203304', 'name' => "Mantenópolis"]);
        City::create(['state' => 8, 'ibge_code' => '3203320', 'name' => "Marataízes"]);
        City::create(['state' => 8, 'ibge_code' => '3203346', 'name' => "Marechal Floriano"]);
        City::create(['state' => 8, 'ibge_code' => '3203353', 'name' => "Marilândia"]);
        City::create(['state' => 8, 'ibge_code' => '3203403', 'name' => "Mimoso do Sul"]);
        City::create(['state' => 8, 'ibge_code' => '3203502', 'name' => "Montanha"]);
        City::create(['state' => 8, 'ibge_code' => '3203601', 'name' => "Mucurici"]);
        City::create(['state' => 8, 'ibge_code' => '3203700', 'name' => "Muniz Freire"]);
        City::create(['state' => 8, 'ibge_code' => '3203809', 'name' => "Muqui"]);
        City::create(['state' => 8, 'ibge_code' => '3203908', 'name' => "Nova Venécia"]);
        City::create(['state' => 8, 'ibge_code' => '3204005', 'name' => "Pancas"]);
        City::create(['state' => 8, 'ibge_code' => '3204054', 'name' => "Pedro Canário"]);
        City::create(['state' => 8, 'ibge_code' => '3204104', 'name' => "Pinheiros"]);
        City::create(['state' => 8, 'ibge_code' => '3204203', 'name' => "Piúma"]);
        City::create(['state' => 8, 'ibge_code' => '3204252', 'name' => "Ponto Belo"]);
        City::create(['state' => 8, 'ibge_code' => '3204302', 'name' => "Presidente Kennedy"]);
        City::create(['state' => 8, 'ibge_code' => '3204351', 'name' => "Rio Bananal"]);
        City::create(['state' => 8, 'ibge_code' => '3204401', 'name' => "Rio Novo do Sul"]);
        City::create(['state' => 8, 'ibge_code' => '3204500', 'name' => "Santa Leopoldina"]);
        City::create(['state' => 8, 'ibge_code' => '3204559', 'name' => "Santa Maria de Jetibá"]);
        City::create(['state' => 8, 'ibge_code' => '3204609', 'name' => "Santa Teresa"]);
        City::create(['state' => 8, 'ibge_code' => '3204658', 'name' => "São Domingos do Norte"]);
        City::create(['state' => 8, 'ibge_code' => '3204708', 'name' => "São Gabriel da Palha"]);
        City::create(['state' => 8, 'ibge_code' => '3204807', 'name' => "São José do Calçado"]);
        City::create(['state' => 8, 'ibge_code' => '3204906', 'name' => "São Mateus"]);
        City::create(['state' => 8, 'ibge_code' => '3204955', 'name' => "São Roque do Canaã"]);
        City::create(['state' => 8, 'ibge_code' => '3205002', 'name' => "Serra"]);
        City::create(['state' => 8, 'ibge_code' => '3205010', 'name' => "Sooretama"]);
        City::create(['state' => 8, 'ibge_code' => '3205036', 'name' => "Vargem Alta"]);
        City::create(['state' => 8, 'ibge_code' => '3205069', 'name' => "Venda Nova do Imigrante"]);
        City::create(['state' => 8, 'ibge_code' => '3205101', 'name' => "Viana"]);
        City::create(['state' => 8, 'ibge_code' => '3205150', 'name' => "Vila Pavão"]);
        City::create(['state' => 8, 'ibge_code' => '3205176', 'name' => "Vila Valério"]);
        City::create(['state' => 8, 'ibge_code' => '3205200', 'name' => "Vila Velha"]);
        City::create(['state' => 8, 'ibge_code' => '3205309', 'name' => "Vitória"]);

        City::create(['state' => 9, 'ibge_code' => '5200050', 'name' => "Abadia de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5200100', 'name' => "Abadiânia"]);
        City::create(['state' => 9, 'ibge_code' => '5200134', 'name' => "Acreúna"]);
        City::create(['state' => 9, 'ibge_code' => '5200159', 'name' => "Adelândia"]);
        City::create(['state' => 9, 'ibge_code' => '5200175', 'name' => "Água Fria de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5200209', 'name' => "Água Limpa"]);
        City::create(['state' => 9, 'ibge_code' => '5200258', 'name' => "Águas Lindas de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5200308', 'name' => "Alexânia"]);
        City::create(['state' => 9, 'ibge_code' => '5200506', 'name' => "Aloândia"]);
        City::create(['state' => 9, 'ibge_code' => '5200555', 'name' => "Alto Horizonte"]);
        City::create(['state' => 9, 'ibge_code' => '5200605', 'name' => "Alto Paraíso de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5200803', 'name' => "Alvorada do Norte"]);
        City::create(['state' => 9, 'ibge_code' => '5200829', 'name' => "Amaralina"]);
        City::create(['state' => 9, 'ibge_code' => '5200852', 'name' => "Americano do Brasil"]);
        City::create(['state' => 9, 'ibge_code' => '5200902', 'name' => "Amorinópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5201108', 'name' => "Anápolis"]);
        City::create(['state' => 9, 'ibge_code' => '5201207', 'name' => "Anhanguera"]);
        City::create(['state' => 9, 'ibge_code' => '5201306', 'name' => "Anicuns"]);
        City::create(['state' => 9, 'ibge_code' => '5201405', 'name' => "Aparecida de Goiânia"]);
        City::create(['state' => 9, 'ibge_code' => '5201454', 'name' => "Aparecida do Rio Doce"]);
        City::create(['state' => 9, 'ibge_code' => '5201504', 'name' => "Aporé"]);
        City::create(['state' => 9, 'ibge_code' => '5201603', 'name' => "Araçu"]);
        City::create(['state' => 9, 'ibge_code' => '5201702', 'name' => "Aragarças"]);
        City::create(['state' => 9, 'ibge_code' => '5201801', 'name' => "Aragoiânia"]);
        City::create(['state' => 9, 'ibge_code' => '5202155', 'name' => "Araguapaz"]);
        City::create(['state' => 9, 'ibge_code' => '5202353', 'name' => "Arenópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5202502', 'name' => "Aruanã"]);
        City::create(['state' => 9, 'ibge_code' => '5202601', 'name' => "Aurilândia"]);
        City::create(['state' => 9, 'ibge_code' => '5202809', 'name' => "Avelinópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5203104', 'name' => "Baliza"]);
        City::create(['state' => 9, 'ibge_code' => '5203203', 'name' => "Barro Alto"]);
        City::create(['state' => 9, 'ibge_code' => '5203302', 'name' => "Bela Vista de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5203401', 'name' => "Bom Jardim de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5203500', 'name' => "Bom Jesus de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5203559', 'name' => "Bonfinópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5203575', 'name' => "Bonópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5203609', 'name' => "Brazabrantes"]);
        City::create(['state' => 9, 'ibge_code' => '5203807', 'name' => "Britânia"]);
        City::create(['state' => 9, 'ibge_code' => '5203906', 'name' => "Buriti Alegre"]);
        City::create(['state' => 9, 'ibge_code' => '5203939', 'name' => "Buriti de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5203962', 'name' => "Buritinópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5204003', 'name' => "Cabeceiras"]);
        City::create(['state' => 9, 'ibge_code' => '5204102', 'name' => "Cachoeira Alta"]);
        City::create(['state' => 9, 'ibge_code' => '5204201', 'name' => "Cachoeira de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5204250', 'name' => "Cachoeira Dourada"]);
        City::create(['state' => 9, 'ibge_code' => '5204300', 'name' => "Caçu"]);
        City::create(['state' => 9, 'ibge_code' => '5204409', 'name' => "Caiapônia"]);
        City::create(['state' => 9, 'ibge_code' => '5204508', 'name' => "Caldas Novas"]);
        City::create(['state' => 9, 'ibge_code' => '5204557', 'name' => "Caldazinha"]);
        City::create(['state' => 9, 'ibge_code' => '5204607', 'name' => "Campestre de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5204656', 'name' => "Campinaçu"]);
        City::create(['state' => 9, 'ibge_code' => '5204706', 'name' => "Campinorte"]);
        City::create(['state' => 9, 'ibge_code' => '5204805', 'name' => "Campo Alegre de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5204854', 'name' => "Campo Limpo de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5204904', 'name' => "Campos Belos"]);
        City::create(['state' => 9, 'ibge_code' => '5204953', 'name' => "Campos Verdes"]);
        City::create(['state' => 9, 'ibge_code' => '5205000', 'name' => "Carmo do Rio Verde"]);
        City::create(['state' => 9, 'ibge_code' => '5205059', 'name' => "Castelândia"]);
        City::create(['state' => 9, 'ibge_code' => '5205109', 'name' => "Catalão"]);
        City::create(['state' => 9, 'ibge_code' => '5205208', 'name' => "Caturaí"]);
        City::create(['state' => 9, 'ibge_code' => '5205307', 'name' => "Cavalcante"]);
        City::create(['state' => 9, 'ibge_code' => '5205406', 'name' => "Ceres"]);
        City::create(['state' => 9, 'ibge_code' => '5205455', 'name' => "Cezarina"]);
        City::create(['state' => 9, 'ibge_code' => '5205471', 'name' => "Chapadão do Céu"]);
        City::create(['state' => 9, 'ibge_code' => '5205497', 'name' => "Cidade Ocidental"]);
        City::create(['state' => 9, 'ibge_code' => '5205513', 'name' => "Cocalzinho de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5205521', 'name' => "Colinas do Sul"]);
        City::create(['state' => 9, 'ibge_code' => '5205703', 'name' => "Córrego do Ouro"]);
        City::create(['state' => 9, 'ibge_code' => '5205802', 'name' => "Corumbá de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5205901', 'name' => "Corumbaíba"]);
        City::create(['state' => 9, 'ibge_code' => '5206206', 'name' => "Cristalina"]);
        City::create(['state' => 9, 'ibge_code' => '5206305', 'name' => "Cristianópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5206404', 'name' => "Crixás"]);
        City::create(['state' => 9, 'ibge_code' => '5206503', 'name' => "Cromínia"]);
        City::create(['state' => 9, 'ibge_code' => '5206602', 'name' => "Cumari"]);
        City::create(['state' => 9, 'ibge_code' => '5206701', 'name' => "Damianópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5206800', 'name' => "Damolândia"]);
        City::create(['state' => 9, 'ibge_code' => '5206909', 'name' => "Davinópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5207105', 'name' => "Diorama"]);
        City::create(['state' => 9, 'ibge_code' => '5208301', 'name' => "Divinópolis de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5207253', 'name' => "Doverlândia"]);
        City::create(['state' => 9, 'ibge_code' => '5207352', 'name' => "Edealina"]);
        City::create(['state' => 9, 'ibge_code' => '5207402', 'name' => "Edéia"]);
        City::create(['state' => 9, 'ibge_code' => '5207501', 'name' => "Estrela do Norte"]);
        City::create(['state' => 9, 'ibge_code' => '5207535', 'name' => "Faina"]);
        City::create(['state' => 9, 'ibge_code' => '5207600', 'name' => "Fazenda Nova"]);
        City::create(['state' => 9, 'ibge_code' => '5207808', 'name' => "Firminópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5207907', 'name' => "Flores de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5208004', 'name' => "Formosa"]);
        City::create(['state' => 9, 'ibge_code' => '5208103', 'name' => "Formoso"]);
        City::create(['state' => 9, 'ibge_code' => '5208152', 'name' => "Gameleira de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5208400', 'name' => "Goianápolis"]);
        City::create(['state' => 9, 'ibge_code' => '5208509', 'name' => "Goiandira"]);
        City::create(['state' => 9, 'ibge_code' => '5208608', 'name' => "Goianésia"]);
        City::create(['state' => 9, 'ibge_code' => '5208707', 'name' => "Goiânia"]);
        City::create(['state' => 9, 'ibge_code' => '5208806', 'name' => "Goianira"]);
        City::create(['state' => 9, 'ibge_code' => '5208905', 'name' => "Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5209101', 'name' => "Goiatuba"]);
        City::create(['state' => 9, 'ibge_code' => '5209150', 'name' => "Gouvelândia"]);
        City::create(['state' => 9, 'ibge_code' => '5209200', 'name' => "Guapó"]);
        City::create(['state' => 9, 'ibge_code' => '5209291', 'name' => "Guaraíta"]);
        City::create(['state' => 9, 'ibge_code' => '5209408', 'name' => "Guarani de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5209457', 'name' => "Guarinos"]);
        City::create(['state' => 9, 'ibge_code' => '5209606', 'name' => "Heitoraí"]);
        City::create(['state' => 9, 'ibge_code' => '5209705', 'name' => "Hidrolândia"]);
        City::create(['state' => 9, 'ibge_code' => '5209804', 'name' => "Hidrolina"]);
        City::create(['state' => 9, 'ibge_code' => '5209903', 'name' => "Iaciara"]);
        City::create(['state' => 9, 'ibge_code' => '5209937', 'name' => "Inaciolândia"]);
        City::create(['state' => 9, 'ibge_code' => '5209952', 'name' => "Indiara"]);
        City::create(['state' => 9, 'ibge_code' => '5210000', 'name' => "Inhumas"]);
        City::create(['state' => 9, 'ibge_code' => '5210109', 'name' => "Ipameri"]);
        City::create(['state' => 9, 'ibge_code' => '5210158', 'name' => "Ipiranga de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5210208', 'name' => "Iporá"]);
        City::create(['state' => 9, 'ibge_code' => '5210307', 'name' => "Israelândia"]);
        City::create(['state' => 9, 'ibge_code' => '5210406', 'name' => "Itaberaí"]);
        City::create(['state' => 9, 'ibge_code' => '5210562', 'name' => "Itaguari"]);
        City::create(['state' => 9, 'ibge_code' => '5210604', 'name' => "Itaguaru"]);
        City::create(['state' => 9, 'ibge_code' => '5210802', 'name' => "Itajá"]);
        City::create(['state' => 9, 'ibge_code' => '5210901', 'name' => "Itapaci"]);
        City::create(['state' => 9, 'ibge_code' => '5211008', 'name' => "Itapirapuã"]);
        City::create(['state' => 9, 'ibge_code' => '5211206', 'name' => "Itapuranga"]);
        City::create(['state' => 9, 'ibge_code' => '5211305', 'name' => "Itarumã"]);
        City::create(['state' => 9, 'ibge_code' => '5211404', 'name' => "Itauçu"]);
        City::create(['state' => 9, 'ibge_code' => '5211503', 'name' => "Itumbiara"]);
        City::create(['state' => 9, 'ibge_code' => '5211602', 'name' => "Ivolândia"]);
        City::create(['state' => 9, 'ibge_code' => '5211701', 'name' => "Jandaia"]);
        City::create(['state' => 9, 'ibge_code' => '5211800', 'name' => "Jaraguá"]);
        City::create(['state' => 9, 'ibge_code' => '5211909', 'name' => "Jataí"]);
        City::create(['state' => 9, 'ibge_code' => '5212006', 'name' => "Jaupaci"]);
        City::create(['state' => 9, 'ibge_code' => '5212055', 'name' => "Jesúpolis"]);
        City::create(['state' => 9, 'ibge_code' => '5212105', 'name' => "Joviânia"]);
        City::create(['state' => 9, 'ibge_code' => '5212204', 'name' => "Jussara"]);
        City::create(['state' => 9, 'ibge_code' => '5212253', 'name' => "Lagoa Santa"]);
        City::create(['state' => 9, 'ibge_code' => '5212303', 'name' => "Leopoldo de Bulhões"]);
        City::create(['state' => 9, 'ibge_code' => '5212501', 'name' => "Luziânia"]);
        City::create(['state' => 9, 'ibge_code' => '5212600', 'name' => "Mairipotaba"]);
        City::create(['state' => 9, 'ibge_code' => '5212709', 'name' => "Mambaí"]);
        City::create(['state' => 9, 'ibge_code' => '5212808', 'name' => "Mara Rosa"]);
        City::create(['state' => 9, 'ibge_code' => '5212907', 'name' => "Marzagão"]);
        City::create(['state' => 9, 'ibge_code' => '5212956', 'name' => "Matrinchã"]);
        City::create(['state' => 9, 'ibge_code' => '5213004', 'name' => "Maurilândia"]);
        City::create(['state' => 9, 'ibge_code' => '5213053', 'name' => "Mimoso de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5213087', 'name' => "Minaçu"]);
        City::create(['state' => 9, 'ibge_code' => '5213103', 'name' => "Mineiros"]);
        City::create(['state' => 9, 'ibge_code' => '5213400', 'name' => "Moiporá"]);
        City::create(['state' => 9, 'ibge_code' => '5213509', 'name' => "Monte Alegre de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5213707', 'name' => "Montes Claros de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5213756', 'name' => "Montividiu"]);
        City::create(['state' => 9, 'ibge_code' => '5213772', 'name' => "Montividiu do Norte"]);
        City::create(['state' => 9, 'ibge_code' => '5213806', 'name' => "Morrinhos"]);
        City::create(['state' => 9, 'ibge_code' => '5213855', 'name' => "Morro Agudo de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5213905', 'name' => "Mossâmedes"]);
        City::create(['state' => 9, 'ibge_code' => '5214002', 'name' => "Mozarlândia"]);
        City::create(['state' => 9, 'ibge_code' => '5214051', 'name' => "Mundo Novo"]);
        City::create(['state' => 9, 'ibge_code' => '5214101', 'name' => "Mutunópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5214408', 'name' => "Nazário"]);
        City::create(['state' => 9, 'ibge_code' => '5214507', 'name' => "Nerópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5214606', 'name' => "Niquelândia"]);
        City::create(['state' => 9, 'ibge_code' => '5214705', 'name' => "Nova América"]);
        City::create(['state' => 9, 'ibge_code' => '5214804', 'name' => "Nova Aurora"]);
        City::create(['state' => 9, 'ibge_code' => '5214838', 'name' => "Nova Crixás"]);
        City::create(['state' => 9, 'ibge_code' => '5214861', 'name' => "Nova Glória"]);
        City::create(['state' => 9, 'ibge_code' => '5214879', 'name' => "Nova Iguaçu de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5214903', 'name' => "Nova Roma"]);
        City::create(['state' => 9, 'ibge_code' => '5215009', 'name' => "Nova Veneza"]);
        City::create(['state' => 9, 'ibge_code' => '5215207', 'name' => "Novo Brasil"]);
        City::create(['state' => 9, 'ibge_code' => '5215231', 'name' => "Novo Gama"]);
        City::create(['state' => 9, 'ibge_code' => '5215256', 'name' => "Novo Planalto"]);
        City::create(['state' => 9, 'ibge_code' => '5215306', 'name' => "Orizona"]);
        City::create(['state' => 9, 'ibge_code' => '5215405', 'name' => "Ouro Verde de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5215504', 'name' => "Ouvidor"]);
        City::create(['state' => 9, 'ibge_code' => '5215603', 'name' => "Padre Bernardo"]);
        City::create(['state' => 9, 'ibge_code' => '5215652', 'name' => "Palestina de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5215702', 'name' => "Palmeiras de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5215801', 'name' => "Palmelo"]);
        City::create(['state' => 9, 'ibge_code' => '5215900', 'name' => "Palminópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5216007', 'name' => "Panamá"]);
        City::create(['state' => 9, 'ibge_code' => '5216304', 'name' => "Paranaiguara"]);
        City::create(['state' => 9, 'ibge_code' => '5216403', 'name' => "Paraúna"]);
        City::create(['state' => 9, 'ibge_code' => '5216452', 'name' => "Perolândia"]);
        City::create(['state' => 9, 'ibge_code' => '5216809', 'name' => "Petrolina de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5216908', 'name' => "Pilar de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5217104', 'name' => "Piracanjuba"]);
        City::create(['state' => 9, 'ibge_code' => '5217203', 'name' => "Piranhas"]);
        City::create(['state' => 9, 'ibge_code' => '5217302', 'name' => "Pirenópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5217401', 'name' => "Pires do Rio"]);
        City::create(['state' => 9, 'ibge_code' => '5217609', 'name' => "Planaltina"]);
        City::create(['state' => 9, 'ibge_code' => '5217708', 'name' => "Pontalina"]);
        City::create(['state' => 9, 'ibge_code' => '5218003', 'name' => "Porangatu"]);
        City::create(['state' => 9, 'ibge_code' => '5218052', 'name' => "Porteirão"]);
        City::create(['state' => 9, 'ibge_code' => '5218102', 'name' => "Portelândia"]);
        City::create(['state' => 9, 'ibge_code' => '5218300', 'name' => "Posse"]);
        City::create(['state' => 9, 'ibge_code' => '5218391', 'name' => "Professor Jamil"]);
        City::create(['state' => 9, 'ibge_code' => '5218508', 'name' => "Quirinópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5218607', 'name' => "Rialma"]);
        City::create(['state' => 9, 'ibge_code' => '5218706', 'name' => "Rianápolis"]);
        City::create(['state' => 9, 'ibge_code' => '5218789', 'name' => "Rio Quente"]);
        City::create(['state' => 9, 'ibge_code' => '5218805', 'name' => "Rio Verde"]);
        City::create(['state' => 9, 'ibge_code' => '5218904', 'name' => "Rubiataba"]);
        City::create(['state' => 9, 'ibge_code' => '5219001', 'name' => "Sanclerlândia"]);
        City::create(['state' => 9, 'ibge_code' => '5219100', 'name' => "Santa Bárbara de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219209', 'name' => "Santa Cruz de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219258', 'name' => "Santa Fé de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219308', 'name' => "Santa Helena de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219357', 'name' => "Santa Isabel"]);
        City::create(['state' => 9, 'ibge_code' => '5219407', 'name' => "Santa Rita do Araguaia"]);
        City::create(['state' => 9, 'ibge_code' => '5219456', 'name' => "Santa Rita do Novo Destino"]);
        City::create(['state' => 9, 'ibge_code' => '5219506', 'name' => "Santa Rosa de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219605', 'name' => "Santa Tereza de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219704', 'name' => "Santa Terezinha de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219712', 'name' => "Santo Antônio da Barra"]);
        City::create(['state' => 9, 'ibge_code' => '5219738', 'name' => "Santo Antônio de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5219753', 'name' => "Santo Antônio do Descoberto"]);
        City::create(['state' => 9, 'ibge_code' => '5219803', 'name' => "São Domingos"]);
        City::create(['state' => 9, 'ibge_code' => '5219902', 'name' => "São Francisco de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5220058', 'name' => "São João da Paraúna"]);
        City::create(['state' => 9, 'ibge_code' => '5220009', 'name' => "São João d'Aliança"]);
        City::create(['state' => 9, 'ibge_code' => '5220108', 'name' => "São Luís de Montes Belos"]);
        City::create(['state' => 9, 'ibge_code' => '5220157', 'name' => "São Luíz do Norte"]);
        City::create(['state' => 9, 'ibge_code' => '5220207', 'name' => "São Miguel do Araguaia"]);
        City::create(['state' => 9, 'ibge_code' => '5220264', 'name' => "São Miguel do Passa Quatro"]);
        City::create(['state' => 9, 'ibge_code' => '5220280', 'name' => "São Patrício"]);
        City::create(['state' => 9, 'ibge_code' => '5220405', 'name' => "São Simão"]);
        City::create(['state' => 9, 'ibge_code' => '5220454', 'name' => "Senador Canedo"]);
        City::create(['state' => 9, 'ibge_code' => '5220504', 'name' => "Serranópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5220603', 'name' => "Silvânia"]);
        City::create(['state' => 9, 'ibge_code' => '5220686', 'name' => "Simolândia"]);
        City::create(['state' => 9, 'ibge_code' => '5220702', 'name' => "Sítio d'Abadia"]);
        City::create(['state' => 9, 'ibge_code' => '5221007', 'name' => "Taquaral de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5221080', 'name' => "Teresina de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5221197', 'name' => "Terezópolis de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5221304', 'name' => "Três Ranchos"]);
        City::create(['state' => 9, 'ibge_code' => '5221403', 'name' => "Trindade"]);
        City::create(['state' => 9, 'ibge_code' => '5221452', 'name' => "Trombas"]);
        City::create(['state' => 9, 'ibge_code' => '5221502', 'name' => "Turvânia"]);
        City::create(['state' => 9, 'ibge_code' => '5221551', 'name' => "Turvelândia"]);
        City::create(['state' => 9, 'ibge_code' => '5221577', 'name' => "Uirapuru"]);
        City::create(['state' => 9, 'ibge_code' => '5221601', 'name' => "Uruaçu"]);
        City::create(['state' => 9, 'ibge_code' => '5221700', 'name' => "Uruana"]);
        City::create(['state' => 9, 'ibge_code' => '5221809', 'name' => "Urutaí"]);
        City::create(['state' => 9, 'ibge_code' => '5221858', 'name' => "Valparaíso de Goiás"]);
        City::create(['state' => 9, 'ibge_code' => '5221908', 'name' => "Varjão"]);
        City::create(['state' => 9, 'ibge_code' => '5222005', 'name' => "Vianópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5222054', 'name' => "Vicentinópolis"]);
        City::create(['state' => 9, 'ibge_code' => '5222203', 'name' => "Vila Boa"]);
        City::create(['state' => 9, 'ibge_code' => '5222302', 'name' => "Vila Propício"]);

        City::create(['state' => 10, 'ibge_code' => '2100055', 'name' => "Açailândia"]);
        City::create(['state' => 10, 'ibge_code' => '2100105', 'name' => "Afonso Cunha"]);
        City::create(['state' => 10, 'ibge_code' => '2100154', 'name' => "Água Doce do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2100204', 'name' => "Alcântara"]);
        City::create(['state' => 10, 'ibge_code' => '2100303', 'name' => "Aldeias Altas"]);
        City::create(['state' => 10, 'ibge_code' => '2100402', 'name' => "Altamira do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2100436', 'name' => "Alto Alegre do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2100477', 'name' => "Alto Alegre do Pindaré"]);
        City::create(['state' => 10, 'ibge_code' => '2100501', 'name' => "Alto Parnaíba"]);
        City::create(['state' => 10, 'ibge_code' => '2100550', 'name' => "Amapá do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2100600', 'name' => "Amarante do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2100709', 'name' => "Anajatuba"]);
        City::create(['state' => 10, 'ibge_code' => '2100808', 'name' => "Anapurus"]);
        City::create(['state' => 10, 'ibge_code' => '2100832', 'name' => "Apicum-Açu"]);
        City::create(['state' => 10, 'ibge_code' => '2100873', 'name' => "Araguanã"]);
        City::create(['state' => 10, 'ibge_code' => '2100907', 'name' => "Araioses"]);
        City::create(['state' => 10, 'ibge_code' => '2100956', 'name' => "Arame"]);
        City::create(['state' => 10, 'ibge_code' => '2101004', 'name' => "Arari"]);
        City::create(['state' => 10, 'ibge_code' => '2101103', 'name' => "Axixá"]);
        City::create(['state' => 10, 'ibge_code' => '2101202', 'name' => "Bacabal"]);
        City::create(['state' => 10, 'ibge_code' => '2101251', 'name' => "Bacabeira"]);
        City::create(['state' => 10, 'ibge_code' => '2101301', 'name' => "Bacuri"]);
        City::create(['state' => 10, 'ibge_code' => '2101350', 'name' => "Bacurituba"]);
        City::create(['state' => 10, 'ibge_code' => '2101400', 'name' => "Balsas"]);
        City::create(['state' => 10, 'ibge_code' => '2101509', 'name' => "Barão de Grajaú"]);
        City::create(['state' => 10, 'ibge_code' => '2101608', 'name' => "Barra do Corda"]);
        City::create(['state' => 10, 'ibge_code' => '2101707', 'name' => "Barreirinhas"]);
        City::create(['state' => 10, 'ibge_code' => '2101772', 'name' => "Bela Vista do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2101731', 'name' => "Belágua"]);
        City::create(['state' => 10, 'ibge_code' => '2101806', 'name' => "Benedito Leite"]);
        City::create(['state' => 10, 'ibge_code' => '2101905', 'name' => "Bequimão"]);
        City::create(['state' => 10, 'ibge_code' => '2101939', 'name' => "Bernardo do Mearim"]);
        City::create(['state' => 10, 'ibge_code' => '2101970', 'name' => "Boa Vista do Gurupi"]);
        City::create(['state' => 10, 'ibge_code' => '2102002', 'name' => "Bom Jardim"]);
        City::create(['state' => 10, 'ibge_code' => '2102036', 'name' => "Bom Jesus das Selvas"]);
        City::create(['state' => 10, 'ibge_code' => '2102077', 'name' => "Bom Lugar"]);
        City::create(['state' => 10, 'ibge_code' => '2102101', 'name' => "Brejo"]);
        City::create(['state' => 10, 'ibge_code' => '2102150', 'name' => "Brejo de Areia"]);
        City::create(['state' => 10, 'ibge_code' => '2102200', 'name' => "Buriti"]);
        City::create(['state' => 10, 'ibge_code' => '2102309', 'name' => "Buriti Bravo"]);
        City::create(['state' => 10, 'ibge_code' => '2102325', 'name' => "Buriticupu"]);
        City::create(['state' => 10, 'ibge_code' => '2102358', 'name' => "Buritirana"]);
        City::create(['state' => 10, 'ibge_code' => '2102374', 'name' => "Cachoeira Grande"]);
        City::create(['state' => 10, 'ibge_code' => '2102408', 'name' => "Cajapió"]);
        City::create(['state' => 10, 'ibge_code' => '2102507', 'name' => "Cajari"]);
        City::create(['state' => 10, 'ibge_code' => '2102556', 'name' => "Campestre do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2102606', 'name' => "Cândido Mendes"]);
        City::create(['state' => 10, 'ibge_code' => '2102705', 'name' => "Cantanhede"]);
        City::create(['state' => 10, 'ibge_code' => '2102754', 'name' => "Capinzal do Norte"]);
        City::create(['state' => 10, 'ibge_code' => '2102804', 'name' => "Carolina"]);
        City::create(['state' => 10, 'ibge_code' => '2102903', 'name' => "Carutapera"]);
        City::create(['state' => 10, 'ibge_code' => '2103000', 'name' => "Caxias"]);
        City::create(['state' => 10, 'ibge_code' => '2103109', 'name' => "Cedral"]);
        City::create(['state' => 10, 'ibge_code' => '2103125', 'name' => "Central do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2103158', 'name' => "Centro do Guilherme"]);
        City::create(['state' => 10, 'ibge_code' => '2103174', 'name' => "Centro Novo do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2103208', 'name' => "Chapadinha"]);
        City::create(['state' => 10, 'ibge_code' => '2103257', 'name' => "Cidelândia"]);
        City::create(['state' => 10, 'ibge_code' => '2103307', 'name' => "Codó"]);
        City::create(['state' => 10, 'ibge_code' => '2103406', 'name' => "Coelho Neto"]);
        City::create(['state' => 10, 'ibge_code' => '2103505', 'name' => "Colinas"]);
        City::create(['state' => 10, 'ibge_code' => '2103554', 'name' => "Conceição do Lago-Açu"]);
        City::create(['state' => 10, 'ibge_code' => '2103604', 'name' => "Coroatá"]);
        City::create(['state' => 10, 'ibge_code' => '2103703', 'name' => "Cururupu"]);
        City::create(['state' => 10, 'ibge_code' => '2103752', 'name' => "Davinópolis"]);
        City::create(['state' => 10, 'ibge_code' => '2103802', 'name' => "Dom Pedro"]);
        City::create(['state' => 10, 'ibge_code' => '2103901', 'name' => "Duque Bacelar"]);
        City::create(['state' => 10, 'ibge_code' => '2104008', 'name' => "Esperantinópolis"]);
        City::create(['state' => 10, 'ibge_code' => '2104057', 'name' => "Estreito"]);
        City::create(['state' => 10, 'ibge_code' => '2104073', 'name' => "Feira Nova do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2104081', 'name' => "Fernando Falcão"]);
        City::create(['state' => 10, 'ibge_code' => '2104099', 'name' => "Formosa da Serra Negra"]);
        City::create(['state' => 10, 'ibge_code' => '2104107', 'name' => "Fortaleza dos Nogueiras"]);
        City::create(['state' => 10, 'ibge_code' => '2104206', 'name' => "Fortuna"]);
        City::create(['state' => 10, 'ibge_code' => '2104305', 'name' => "Godofredo Viana"]);
        City::create(['state' => 10, 'ibge_code' => '2104404', 'name' => "Gonçalves Dias"]);
        City::create(['state' => 10, 'ibge_code' => '2104503', 'name' => "Governador Archer"]);
        City::create(['state' => 10, 'ibge_code' => '2104552', 'name' => "Governador Edison Lobão"]);
        City::create(['state' => 10, 'ibge_code' => '2104602', 'name' => "Governador Eugênio Barros"]);
        City::create(['state' => 10, 'ibge_code' => '2104628', 'name' => "Governador Luiz Rocha"]);
        City::create(['state' => 10, 'ibge_code' => '2104651', 'name' => "Governador Newton Bello"]);
        City::create(['state' => 10, 'ibge_code' => '2104677', 'name' => "Governador Nunes Freire"]);
        City::create(['state' => 10, 'ibge_code' => '2104701', 'name' => "Graça Aranha"]);
        City::create(['state' => 10, 'ibge_code' => '2104800', 'name' => "Grajaú"]);
        City::create(['state' => 10, 'ibge_code' => '2104909', 'name' => "Guimarães"]);
        City::create(['state' => 10, 'ibge_code' => '2105005', 'name' => "Humberto de Campos"]);
        City::create(['state' => 10, 'ibge_code' => '2105104', 'name' => "Icatu"]);
        City::create(['state' => 10, 'ibge_code' => '2105153', 'name' => "Igarapé do Meio"]);
        City::create(['state' => 10, 'ibge_code' => '2105203', 'name' => "Igarapé Grande"]);
        City::create(['state' => 10, 'ibge_code' => '2105302', 'name' => "Imperatriz"]);
        City::create(['state' => 10, 'ibge_code' => '2105351', 'name' => "Itaipava do Grajaú"]);
        City::create(['state' => 10, 'ibge_code' => '2105401', 'name' => "Itapecuru Mirim"]);
        City::create(['state' => 10, 'ibge_code' => '2105427', 'name' => "Itinga do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2105450', 'name' => "Jatobá"]);
        City::create(['state' => 10, 'ibge_code' => '2105476', 'name' => "Jenipapo dos Vieiras"]);
        City::create(['state' => 10, 'ibge_code' => '2105500', 'name' => "João Lisboa"]);
        City::create(['state' => 10, 'ibge_code' => '2105609', 'name' => "Joselândia"]);
        City::create(['state' => 10, 'ibge_code' => '2105658', 'name' => "Junco do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2105708', 'name' => "Lago da Pedra"]);
        City::create(['state' => 10, 'ibge_code' => '2105807', 'name' => "Lago do Junco"]);
        City::create(['state' => 10, 'ibge_code' => '2105948', 'name' => "Lago dos Rodrigues"]);
        City::create(['state' => 10, 'ibge_code' => '2105906', 'name' => "Lago Verde"]);
        City::create(['state' => 10, 'ibge_code' => '2105922', 'name' => "Lagoa do Mato"]);
        City::create(['state' => 10, 'ibge_code' => '2105963', 'name' => "Lagoa Grande do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2105989', 'name' => "Lajeado Novo"]);
        City::create(['state' => 10, 'ibge_code' => '2106003', 'name' => "Lima Campos"]);
        City::create(['state' => 10, 'ibge_code' => '2106102', 'name' => "Loreto"]);
        City::create(['state' => 10, 'ibge_code' => '2106201', 'name' => "Luís Domingues"]);
        City::create(['state' => 10, 'ibge_code' => '2106300', 'name' => "Magalhães de Almeida"]);
        City::create(['state' => 10, 'ibge_code' => '2106326', 'name' => "Maracaçumé"]);
        City::create(['state' => 10, 'ibge_code' => '2106359', 'name' => "Marajá do Sena"]);
        City::create(['state' => 10, 'ibge_code' => '2106375', 'name' => "Maranhãozinho"]);
        City::create(['state' => 10, 'ibge_code' => '2106409', 'name' => "Mata Roma"]);
        City::create(['state' => 10, 'ibge_code' => '2106508', 'name' => "Matinha"]);
        City::create(['state' => 10, 'ibge_code' => '2106607', 'name' => "Matões"]);
        City::create(['state' => 10, 'ibge_code' => '2106631', 'name' => "Matões do Norte"]);
        City::create(['state' => 10, 'ibge_code' => '2106672', 'name' => "Milagres do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2106706', 'name' => "Mirador"]);
        City::create(['state' => 10, 'ibge_code' => '2106755', 'name' => "Miranda do Norte"]);
        City::create(['state' => 10, 'ibge_code' => '2106805', 'name' => "Mirinzal"]);
        City::create(['state' => 10, 'ibge_code' => '2106904', 'name' => "Monção"]);
        City::create(['state' => 10, 'ibge_code' => '2107001', 'name' => "Montes Altos"]);
        City::create(['state' => 10, 'ibge_code' => '2107100', 'name' => "Morros"]);
        City::create(['state' => 10, 'ibge_code' => '2107209', 'name' => "Nina Rodrigues"]);
        City::create(['state' => 10, 'ibge_code' => '2107258', 'name' => "Nova Colinas"]);
        City::create(['state' => 10, 'ibge_code' => '2107308', 'name' => "Nova Iorque"]);
        City::create(['state' => 10, 'ibge_code' => '2107357', 'name' => "Nova Olinda do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2107407', 'name' => "Olho d'Água das Cunhãs"]);
        City::create(['state' => 10, 'ibge_code' => '2107456', 'name' => "Olinda Nova do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2107506', 'name' => "Paço do Lumiar"]);
        City::create(['state' => 10, 'ibge_code' => '2107605', 'name' => "Palmeirândia"]);
        City::create(['state' => 10, 'ibge_code' => '2107704', 'name' => "Paraibano"]);
        City::create(['state' => 10, 'ibge_code' => '2107803', 'name' => "Parnarama"]);
        City::create(['state' => 10, 'ibge_code' => '2107902', 'name' => "Passagem Franca"]);
        City::create(['state' => 10, 'ibge_code' => '2108009', 'name' => "Pastos Bons"]);
        City::create(['state' => 10, 'ibge_code' => '2108058', 'name' => "Paulino Neves"]);
        City::create(['state' => 10, 'ibge_code' => '2108108', 'name' => "Paulo Ramos"]);
        City::create(['state' => 10, 'ibge_code' => '2108207', 'name' => "Pedreiras"]);
        City::create(['state' => 10, 'ibge_code' => '2108256', 'name' => "Pedro do Rosário"]);
        City::create(['state' => 10, 'ibge_code' => '2108306', 'name' => "Penalva"]);
        City::create(['state' => 10, 'ibge_code' => '2108405', 'name' => "Peri Mirim"]);
        City::create(['state' => 10, 'ibge_code' => '2108454', 'name' => "Peritoró"]);
        City::create(['state' => 10, 'ibge_code' => '2108504', 'name' => "Pindaré-Mirim"]);
        City::create(['state' => 10, 'ibge_code' => '2108603', 'name' => "Pinheiro"]);
        City::create(['state' => 10, 'ibge_code' => '2108702', 'name' => "Pio XII"]);
        City::create(['state' => 10, 'ibge_code' => '2108801', 'name' => "Pirapemas"]);
        City::create(['state' => 10, 'ibge_code' => '2108900', 'name' => "Poção de Pedras"]);
        City::create(['state' => 10, 'ibge_code' => '2109007', 'name' => "Porto Franco"]);
        City::create(['state' => 10, 'ibge_code' => '2109056', 'name' => "Porto Rico do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2109106', 'name' => "Presidente Dutra"]);
        City::create(['state' => 10, 'ibge_code' => '2109205', 'name' => "Presidente Juscelino"]);
        City::create(['state' => 10, 'ibge_code' => '2109239', 'name' => "Presidente Médici"]);
        City::create(['state' => 10, 'ibge_code' => '2109270', 'name' => "Presidente Sarney"]);
        City::create(['state' => 10, 'ibge_code' => '2109304', 'name' => "Presidente Vargas"]);
        City::create(['state' => 10, 'ibge_code' => '2109403', 'name' => "Primeira Cruz"]);
        City::create(['state' => 10, 'ibge_code' => '2109452', 'name' => "Raposa"]);
        City::create(['state' => 10, 'ibge_code' => '2109502', 'name' => "Riachão"]);
        City::create(['state' => 10, 'ibge_code' => '2109551', 'name' => "Ribamar Fiquene"]);
        City::create(['state' => 10, 'ibge_code' => '2109601', 'name' => "Rosário"]);
        City::create(['state' => 10, 'ibge_code' => '2109700', 'name' => "Sambaíba"]);
        City::create(['state' => 10, 'ibge_code' => '2109759', 'name' => "Santa Filomena do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2109809', 'name' => "Santa Helena"]);
        City::create(['state' => 10, 'ibge_code' => '2109908', 'name' => "Santa Inês"]);
        City::create(['state' => 10, 'ibge_code' => '2110005', 'name' => "Santa Luzia"]);
        City::create(['state' => 10, 'ibge_code' => '2110039', 'name' => "Santa Luzia do Paruá"]);
        City::create(['state' => 10, 'ibge_code' => '2110104', 'name' => "Santa Quitéria do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2110203', 'name' => "Santa Rita"]);
        City::create(['state' => 10, 'ibge_code' => '2110237', 'name' => "Santana do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2110278', 'name' => "Santo Amaro do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2110302', 'name' => "Santo Antônio dos Lopes"]);
        City::create(['state' => 10, 'ibge_code' => '2110401', 'name' => "São Benedito do Rio Preto"]);
        City::create(['state' => 10, 'ibge_code' => '2110500', 'name' => "São Bento"]);
        City::create(['state' => 10, 'ibge_code' => '2110609', 'name' => "São Bernardo"]);
        City::create(['state' => 10, 'ibge_code' => '2110658', 'name' => "São Domingos do Azeitão"]);
        City::create(['state' => 10, 'ibge_code' => '2110708', 'name' => "São Domingos do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2110807', 'name' => "São Félix de Balsas"]);
        City::create(['state' => 10, 'ibge_code' => '2110856', 'name' => "São Francisco do Brejão"]);
        City::create(['state' => 10, 'ibge_code' => '2110906', 'name' => "São Francisco do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2111003', 'name' => "São João Batista"]);
        City::create(['state' => 10, 'ibge_code' => '2111029', 'name' => "São João do Carú"]);
        City::create(['state' => 10, 'ibge_code' => '2111052', 'name' => "São João do Paraíso"]);
        City::create(['state' => 10, 'ibge_code' => '2111078', 'name' => "São João do Soter"]);
        City::create(['state' => 10, 'ibge_code' => '2111102', 'name' => "São João dos Patos"]);
        City::create(['state' => 10, 'ibge_code' => '2111201', 'name' => "São José de Ribamar"]);
        City::create(['state' => 10, 'ibge_code' => '2111250', 'name' => "São José dos Basílios"]);
        City::create(['state' => 10, 'ibge_code' => '2111300', 'name' => "São Luís"]);
        City::create(['state' => 10, 'ibge_code' => '2111409', 'name' => "São Luís Gonzaga do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2111508', 'name' => "São Mateus do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2111532', 'name' => "São Pedro da Água Branca"]);
        City::create(['state' => 10, 'ibge_code' => '2111573', 'name' => "São Pedro dos Crentes"]);
        City::create(['state' => 10, 'ibge_code' => '2111607', 'name' => "São Raimundo das Mangabeiras"]);
        City::create(['state' => 10, 'ibge_code' => '2111631', 'name' => "São Raimundo do Doca Bezerra"]);
        City::create(['state' => 10, 'ibge_code' => '2111672', 'name' => "São Roberto"]);
        City::create(['state' => 10, 'ibge_code' => '2111706', 'name' => "São Vicente Ferrer"]);
        City::create(['state' => 10, 'ibge_code' => '2111722', 'name' => "Satubinha"]);
        City::create(['state' => 10, 'ibge_code' => '2111748', 'name' => "Senador Alexandre Costa"]);
        City::create(['state' => 10, 'ibge_code' => '2111763', 'name' => "Senador La Rocque"]);
        City::create(['state' => 10, 'ibge_code' => '2111789', 'name' => "Serrano do Maranhão"]);
        City::create(['state' => 10, 'ibge_code' => '2111805', 'name' => "Sítio Novo"]);
        City::create(['state' => 10, 'ibge_code' => '2111904', 'name' => "Sucupira do Norte"]);
        City::create(['state' => 10, 'ibge_code' => '2111953', 'name' => "Sucupira do Riachão"]);
        City::create(['state' => 10, 'ibge_code' => '2112001', 'name' => "Tasso Fragoso"]);
        City::create(['state' => 10, 'ibge_code' => '2112100', 'name' => "Timbiras"]);
        City::create(['state' => 10, 'ibge_code' => '2112209', 'name' => "Timon"]);
        City::create(['state' => 10, 'ibge_code' => '2112233', 'name' => "Trizidela do Vale"]);
        City::create(['state' => 10, 'ibge_code' => '2112274', 'name' => "Tufilândia"]);
        City::create(['state' => 10, 'ibge_code' => '2112308', 'name' => "Tuntum"]);
        City::create(['state' => 10, 'ibge_code' => '2112407', 'name' => "Turiaçu"]);
        City::create(['state' => 10, 'ibge_code' => '2112456', 'name' => "Turilândia"]);
        City::create(['state' => 10, 'ibge_code' => '2112506', 'name' => "Tutóia"]);
        City::create(['state' => 10, 'ibge_code' => '2112605', 'name' => "Urbano Santos"]);
        City::create(['state' => 10, 'ibge_code' => '2112704', 'name' => "Vargem Grande"]);
        City::create(['state' => 10, 'ibge_code' => '2112803', 'name' => "Viana"]);
        City::create(['state' => 10, 'ibge_code' => '2112852', 'name' => "Vila Nova dos Martírios"]);
        City::create(['state' => 10, 'ibge_code' => '2112902', 'name' => "Vitória do Mearim"]);
        City::create(['state' => 10, 'ibge_code' => '2113009', 'name' => "Vitorino Freire"]);
        City::create(['state' => 10, 'ibge_code' => '2114007', 'name' => "Zé Doca"]);

        City::create(['state' => 11, 'ibge_code' => '5100102', 'name' => "Acorizal"]);
        City::create(['state' => 11, 'ibge_code' => '5100201', 'name' => "Água Boa"]);
        City::create(['state' => 11, 'ibge_code' => '5100250', 'name' => "Alta Floresta"]);
        City::create(['state' => 11, 'ibge_code' => '5100300', 'name' => "Alto Araguaia"]);
        City::create(['state' => 11, 'ibge_code' => '5100359', 'name' => "Alto Boa Vista"]);
        City::create(['state' => 11, 'ibge_code' => '5100409', 'name' => "Alto Garças"]);
        City::create(['state' => 11, 'ibge_code' => '5100508', 'name' => "Alto Paraguai"]);
        City::create(['state' => 11, 'ibge_code' => '5100607', 'name' => "Alto Taquari"]);
        City::create(['state' => 11, 'ibge_code' => '5100805', 'name' => "Apiacás"]);
        City::create(['state' => 11, 'ibge_code' => '5101001', 'name' => "Araguaiana"]);
        City::create(['state' => 11, 'ibge_code' => '5101209', 'name' => "Araguainha"]);
        City::create(['state' => 11, 'ibge_code' => '5101258', 'name' => "Araputanga"]);
        City::create(['state' => 11, 'ibge_code' => '5101308', 'name' => "Arenápolis"]);
        City::create(['state' => 11, 'ibge_code' => '5101407', 'name' => "Aripuanã"]);
        City::create(['state' => 11, 'ibge_code' => '5101605', 'name' => "Barão de Melgaço"]);
        City::create(['state' => 11, 'ibge_code' => '5101704', 'name' => "Barra do Bugres"]);
        City::create(['state' => 11, 'ibge_code' => '5101803', 'name' => "Barra do Garças"]);
        City::create(['state' => 11, 'ibge_code' => '5101852', 'name' => "Bom Jesus do Araguaia"]);
        City::create(['state' => 11, 'ibge_code' => '5101902', 'name' => "Brasnorte"]);
        City::create(['state' => 11, 'ibge_code' => '5102504', 'name' => "Cáceres"]);
        City::create(['state' => 11, 'ibge_code' => '5102603', 'name' => "Campinápolis"]);
        City::create(['state' => 11, 'ibge_code' => '5102637', 'name' => "Campo Novo do Parecis"]);
        City::create(['state' => 11, 'ibge_code' => '5102678', 'name' => "Campo Verde"]);
        City::create(['state' => 11, 'ibge_code' => '5102686', 'name' => "Campos de Júlio"]);
        City::create(['state' => 11, 'ibge_code' => '5102694', 'name' => "Canabrava do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5102702', 'name' => "Canarana"]);
        City::create(['state' => 11, 'ibge_code' => '5102793', 'name' => "Carlinda"]);
        City::create(['state' => 11, 'ibge_code' => '5102850', 'name' => "Castanheira"]);
        City::create(['state' => 11, 'ibge_code' => '5103007', 'name' => "Chapada dos Guimarães"]);
        City::create(['state' => 11, 'ibge_code' => '5103056', 'name' => "Cláudia"]);
        City::create(['state' => 11, 'ibge_code' => '5103106', 'name' => "Cocalinho"]);
        City::create(['state' => 11, 'ibge_code' => '5103205', 'name' => "Colíder"]);
        City::create(['state' => 11, 'ibge_code' => '5103254', 'name' => "Colniza"]);
        City::create(['state' => 11, 'ibge_code' => '5103304', 'name' => "Comodoro"]);
        City::create(['state' => 11, 'ibge_code' => '5103353', 'name' => "Confresa"]);
        City::create(['state' => 11, 'ibge_code' => '5103361', 'name' => "Conquista D'Oeste"]);
        City::create(['state' => 11, 'ibge_code' => '5103379', 'name' => "Cotriguaçu"]);
        City::create(['state' => 11, 'ibge_code' => '5103403', 'name' => "Cuiabá"]);
        City::create(['state' => 11, 'ibge_code' => '5103437', 'name' => "Curvelândia"]);
        City::create(['state' => 11, 'ibge_code' => '5103452', 'name' => "Denise"]);
        City::create(['state' => 11, 'ibge_code' => '5103502', 'name' => "Diamantino"]);
        City::create(['state' => 11, 'ibge_code' => '5103601', 'name' => "Dom Aquino"]);
        City::create(['state' => 11, 'ibge_code' => '5103700', 'name' => "Feliz Natal"]);
        City::create(['state' => 11, 'ibge_code' => '5103809', 'name' => "Figueirópolis D'Oeste"]);
        City::create(['state' => 11, 'ibge_code' => '5103858', 'name' => "Gaúcha do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5103908', 'name' => "General Carneiro"]);
        City::create(['state' => 11, 'ibge_code' => '5103957', 'name' => "Glória D'Oeste"]);
        City::create(['state' => 11, 'ibge_code' => '5104104', 'name' => "Guarantã do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5104203', 'name' => "Guiratinga"]);
        City::create(['state' => 11, 'ibge_code' => '5104500', 'name' => "Indiavaí"]);
        City::create(['state' => 11, 'ibge_code' => '5104526', 'name' => "Ipiranga do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5104542', 'name' => "Itanhangá"]);
        City::create(['state' => 11, 'ibge_code' => '5104559', 'name' => "Itaúba"]);
        City::create(['state' => 11, 'ibge_code' => '5104609', 'name' => "Itiquira"]);
        City::create(['state' => 11, 'ibge_code' => '5104807', 'name' => "Jaciara"]);
        City::create(['state' => 11, 'ibge_code' => '5104906', 'name' => "Jangada"]);
        City::create(['state' => 11, 'ibge_code' => '5105002', 'name' => "Jauru"]);
        City::create(['state' => 11, 'ibge_code' => '5105101', 'name' => "Juara"]);
        City::create(['state' => 11, 'ibge_code' => '5105150', 'name' => "Juína"]);
        City::create(['state' => 11, 'ibge_code' => '5105176', 'name' => "Juruena"]);
        City::create(['state' => 11, 'ibge_code' => '5105200', 'name' => "Juscimeira"]);
        City::create(['state' => 11, 'ibge_code' => '5105234', 'name' => "Lambari D'Oeste"]);
        City::create(['state' => 11, 'ibge_code' => '5105259', 'name' => "Lucas do Rio Verde"]);
        City::create(['state' => 11, 'ibge_code' => '5105309', 'name' => "Luciara"]);
        City::create(['state' => 11, 'ibge_code' => '5105580', 'name' => "Marcelândia"]);
        City::create(['state' => 11, 'ibge_code' => '5105606', 'name' => "Matupá"]);
        City::create(['state' => 11, 'ibge_code' => '5105622', 'name' => "Mirassol d'Oeste"]);
        City::create(['state' => 11, 'ibge_code' => '5105903', 'name' => "Nobres"]);
        City::create(['state' => 11, 'ibge_code' => '5106000', 'name' => "Nortelândia"]);
        City::create(['state' => 11, 'ibge_code' => '5106109', 'name' => "Nossa Senhora do Livramento"]);
        City::create(['state' => 11, 'ibge_code' => '5106158', 'name' => "Nova Bandeirantes"]);
        City::create(['state' => 11, 'ibge_code' => '5106208', 'name' => "Nova Brasilândia"]);
        City::create(['state' => 11, 'ibge_code' => '5106216', 'name' => "Nova Canaã do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5108808', 'name' => "Nova Guarita"]);
        City::create(['state' => 11, 'ibge_code' => '5106182', 'name' => "Nova Lacerda"]);
        City::create(['state' => 11, 'ibge_code' => '5108857', 'name' => "Nova Marilândia"]);
        City::create(['state' => 11, 'ibge_code' => '5108907', 'name' => "Nova Maringá"]);
        City::create(['state' => 11, 'ibge_code' => '5108956', 'name' => "Nova Monte Verde"]);
        City::create(['state' => 11, 'ibge_code' => '5106224', 'name' => "Nova Mutum"]);
        City::create(['state' => 11, 'ibge_code' => '5106174', 'name' => "Nova Nazaré"]);
        City::create(['state' => 11, 'ibge_code' => '5106232', 'name' => "Nova Olímpia"]);
        City::create(['state' => 11, 'ibge_code' => '5106190', 'name' => "Nova Santa Helena"]);
        City::create(['state' => 11, 'ibge_code' => '5106240', 'name' => "Nova Ubiratã"]);
        City::create(['state' => 11, 'ibge_code' => '5106257', 'name' => "Nova Xavantina"]);
        City::create(['state' => 11, 'ibge_code' => '5106273', 'name' => "Novo Horizonte do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5106265', 'name' => "Novo Mundo"]);
        City::create(['state' => 11, 'ibge_code' => '5106315', 'name' => "Novo Santo Antônio"]);
        City::create(['state' => 11, 'ibge_code' => '5106281', 'name' => "Novo São Joaquim"]);
        City::create(['state' => 11, 'ibge_code' => '5106299', 'name' => "Paranaíta"]);
        City::create(['state' => 11, 'ibge_code' => '5106307', 'name' => "Paranatinga"]);
        City::create(['state' => 11, 'ibge_code' => '5106372', 'name' => "Pedra Preta"]);
        City::create(['state' => 11, 'ibge_code' => '5106422', 'name' => "Peixoto de Azevedo"]);
        City::create(['state' => 11, 'ibge_code' => '5106455', 'name' => "Planalto da Serra"]);
        City::create(['state' => 11, 'ibge_code' => '5106505', 'name' => "Poconé"]);
        City::create(['state' => 11, 'ibge_code' => '5106653', 'name' => "Pontal do Araguaia"]);
        City::create(['state' => 11, 'ibge_code' => '5106703', 'name' => "Ponte Branca"]);
        City::create(['state' => 11, 'ibge_code' => '5106752', 'name' => "Pontes e Lacerda"]);
        City::create(['state' => 11, 'ibge_code' => '5106778', 'name' => "Porto Alegre do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5106802', 'name' => "Porto dos Gaúchos"]);
        City::create(['state' => 11, 'ibge_code' => '5106828', 'name' => "Porto Esperidião"]);
        City::create(['state' => 11, 'ibge_code' => '5106851', 'name' => "Porto Estrela"]);
        City::create(['state' => 11, 'ibge_code' => '5107008', 'name' => "Poxoréo"]);
        City::create(['state' => 11, 'ibge_code' => '5107040', 'name' => "Primavera do Leste"]);
        City::create(['state' => 11, 'ibge_code' => '5107065', 'name' => "Querência"]);
        City::create(['state' => 11, 'ibge_code' => '5107156', 'name' => "Reserva do Cabaçal"]);
        City::create(['state' => 11, 'ibge_code' => '5107180', 'name' => "Ribeirão Cascalheira"]);
        City::create(['state' => 11, 'ibge_code' => '5107198', 'name' => "Ribeirãozinho"]);
        City::create(['state' => 11, 'ibge_code' => '5107206', 'name' => "Rio Branco"]);
        City::create(['state' => 11, 'ibge_code' => '5107578', 'name' => "Rondolândia"]);
        City::create(['state' => 11, 'ibge_code' => '5107602', 'name' => "Rondonópolis"]);
        City::create(['state' => 11, 'ibge_code' => '5107701', 'name' => "Rosário Oeste"]);
        City::create(['state' => 11, 'ibge_code' => '5107750', 'name' => "Salto do Céu"]);
        City::create(['state' => 11, 'ibge_code' => '5107248', 'name' => "Santa Carmem"]);
        City::create(['state' => 11, 'ibge_code' => '5107743', 'name' => "Santa Cruz do Xingu"]);
        City::create(['state' => 11, 'ibge_code' => '5107768', 'name' => "Santa Rita do Trivelato"]);
        City::create(['state' => 11, 'ibge_code' => '5107776', 'name' => "Santa Terezinha"]);
        City::create(['state' => 11, 'ibge_code' => '5107263', 'name' => "Santo Afonso"]);
        City::create(['state' => 11, 'ibge_code' => '5107792', 'name' => "Santo Antônio do Leste"]);
        City::create(['state' => 11, 'ibge_code' => '5107800', 'name' => "Santo Antônio do Leverger"]);
        City::create(['state' => 11, 'ibge_code' => '5107859', 'name' => "São Félix do Araguaia"]);
        City::create(['state' => 11, 'ibge_code' => '5107297', 'name' => "São José do Povo"]);
        City::create(['state' => 11, 'ibge_code' => '5107305', 'name' => "São José do Rio Claro"]);
        City::create(['state' => 11, 'ibge_code' => '5107354', 'name' => "São José do Xingu"]);
        City::create(['state' => 11, 'ibge_code' => '5107107', 'name' => "São José dos Quatro Marcos"]);
        City::create(['state' => 11, 'ibge_code' => '5107404', 'name' => "São Pedro da Cipa"]);
        City::create(['state' => 11, 'ibge_code' => '5107875', 'name' => "Sapezal"]);
        City::create(['state' => 11, 'ibge_code' => '5107883', 'name' => "Serra Nova Dourada"]);
        City::create(['state' => 11, 'ibge_code' => '5107909', 'name' => "Sinop"]);
        City::create(['state' => 11, 'ibge_code' => '5107925', 'name' => "Sorriso"]);
        City::create(['state' => 11, 'ibge_code' => '5107941', 'name' => "Tabaporã"]);
        City::create(['state' => 11, 'ibge_code' => '5107958', 'name' => "Tangará da Serra"]);
        City::create(['state' => 11, 'ibge_code' => '5108006', 'name' => "Tapurah"]);
        City::create(['state' => 11, 'ibge_code' => '5108055', 'name' => "Terra Nova do Norte"]);
        City::create(['state' => 11, 'ibge_code' => '5108105', 'name' => "Tesouro"]);
        City::create(['state' => 11, 'ibge_code' => '5108204', 'name' => "Torixoréu"]);
        City::create(['state' => 11, 'ibge_code' => '5108303', 'name' => "União do Sul"]);
        City::create(['state' => 11, 'ibge_code' => '5108352', 'name' => "Vale de São Domingos"]);
        City::create(['state' => 11, 'ibge_code' => '5108402', 'name' => "Várzea Grande"]);
        City::create(['state' => 11, 'ibge_code' => '5108501', 'name' => "Vera"]);
        City::create(['state' => 11, 'ibge_code' => '5105507', 'name' => "Vila Bela da Santíssima Trindade"]);
        City::create(['state' => 11, 'ibge_code' => '5108600', 'name' => "Vila Rica"]);

        City::create(['state' => 12, 'ibge_code' => '5000203', 'name' => "Água Clara"]);
        City::create(['state' => 12, 'ibge_code' => '5000252', 'name' => "Alcinópolis"]);
        City::create(['state' => 12, 'ibge_code' => '5000609', 'name' => "Amambai"]);
        City::create(['state' => 12, 'ibge_code' => '5000708', 'name' => "Anastácio"]);
        City::create(['state' => 12, 'ibge_code' => '5000807', 'name' => "Anaurilândia"]);
        City::create(['state' => 12, 'ibge_code' => '5000856', 'name' => "Angélica"]);
        City::create(['state' => 12, 'ibge_code' => '5000906', 'name' => "Antônio João"]);
        City::create(['state' => 12, 'ibge_code' => '5001003', 'name' => "Aparecida do Taboado"]);
        City::create(['state' => 12, 'ibge_code' => '5001102', 'name' => "Aquidauana"]);
        City::create(['state' => 12, 'ibge_code' => '5001243', 'name' => "Aral Moreira"]);
        City::create(['state' => 12, 'ibge_code' => '5001508', 'name' => "Bandeirantes"]);
        City::create(['state' => 12, 'ibge_code' => '5001904', 'name' => "Bataguassu"]);
        City::create(['state' => 12, 'ibge_code' => '5002001', 'name' => "Batayporã"]);
        City::create(['state' => 12, 'ibge_code' => '5002100', 'name' => "Bela Vista"]);
        City::create(['state' => 12, 'ibge_code' => '5002159', 'name' => "Bodoquena"]);
        City::create(['state' => 12, 'ibge_code' => '5002209', 'name' => "Bonito"]);
        City::create(['state' => 12, 'ibge_code' => '5002308', 'name' => "Brasilândia"]);
        City::create(['state' => 12, 'ibge_code' => '5002407', 'name' => "Caarapó"]);
        City::create(['state' => 12, 'ibge_code' => '5002605', 'name' => "Camapuã"]);
        City::create(['state' => 12, 'ibge_code' => '5002704', 'name' => "Campo Grande"]);
        City::create(['state' => 12, 'ibge_code' => '5002803', 'name' => "Caracol"]);
        City::create(['state' => 12, 'ibge_code' => '5002902', 'name' => "Cassilândia"]);
        City::create(['state' => 12, 'ibge_code' => '5002951', 'name' => "Chapadão do Sul"]);
        City::create(['state' => 12, 'ibge_code' => '5003108', 'name' => "Corguinho"]);
        City::create(['state' => 12, 'ibge_code' => '5003157', 'name' => "Coronel Sapucaia"]);
        City::create(['state' => 12, 'ibge_code' => '5003207', 'name' => "Corumbá"]);
        City::create(['state' => 12, 'ibge_code' => '5003256', 'name' => "Costa Rica"]);
        City::create(['state' => 12, 'ibge_code' => '5003306', 'name' => "Coxim"]);
        City::create(['state' => 12, 'ibge_code' => '5003454', 'name' => "Deodápolis"]);
        City::create(['state' => 12, 'ibge_code' => '5003488', 'name' => "Dois Irmãos do Buriti"]);
        City::create(['state' => 12, 'ibge_code' => '5003504', 'name' => "Douradina"]);
        City::create(['state' => 12, 'ibge_code' => '5003702', 'name' => "Dourados"]);
        City::create(['state' => 12, 'ibge_code' => '5003751', 'name' => "Eldorado"]);
        City::create(['state' => 12, 'ibge_code' => '5003801', 'name' => "Fátima do Sul"]);
        City::create(['state' => 12, 'ibge_code' => '5003900', 'name' => "Figueirão"]);
        City::create(['state' => 12, 'ibge_code' => '5004007', 'name' => "Glória de Dourados"]);
        City::create(['state' => 12, 'ibge_code' => '5004106', 'name' => "Guia Lopes da Laguna"]);
        City::create(['state' => 12, 'ibge_code' => '5004304', 'name' => "Iguatemi"]);
        City::create(['state' => 12, 'ibge_code' => '5004403', 'name' => "Inocência"]);
        City::create(['state' => 12, 'ibge_code' => '5004502', 'name' => "Itaporã"]);
        City::create(['state' => 12, 'ibge_code' => '5004601', 'name' => "Itaquiraí"]);
        City::create(['state' => 12, 'ibge_code' => '5004700', 'name' => "Ivinhema"]);
        City::create(['state' => 12, 'ibge_code' => '5004809', 'name' => "Japorã"]);
        City::create(['state' => 12, 'ibge_code' => '5004908', 'name' => "Jaraguari"]);
        City::create(['state' => 12, 'ibge_code' => '5005004', 'name' => "Jardim"]);
        City::create(['state' => 12, 'ibge_code' => '5005103', 'name' => "Jateí"]);
        City::create(['state' => 12, 'ibge_code' => '5005152', 'name' => "Juti"]);
        City::create(['state' => 12, 'ibge_code' => '5005202', 'name' => "Ladário"]);
        City::create(['state' => 12, 'ibge_code' => '5005251', 'name' => "Laguna Carapã"]);
        City::create(['state' => 12, 'ibge_code' => '5005400', 'name' => "Maracaju"]);
        City::create(['state' => 12, 'ibge_code' => '5005608', 'name' => "Miranda"]);
        City::create(['state' => 12, 'ibge_code' => '5005681', 'name' => "Mundo Novo"]);
        City::create(['state' => 12, 'ibge_code' => '5005707', 'name' => "Naviraí"]);
        City::create(['state' => 12, 'ibge_code' => '5005806', 'name' => "Nioaque"]);
        City::create(['state' => 12, 'ibge_code' => '5006002', 'name' => "Nova Alvorada do Sul"]);
        City::create(['state' => 12, 'ibge_code' => '5006200', 'name' => "Nova Andradina"]);
        City::create(['state' => 12, 'ibge_code' => '5006259', 'name' => "Novo Horizonte do Sul"]);
        City::create(['state' => 12, 'ibge_code' => '5006309', 'name' => "Paranaíba"]);
        City::create(['state' => 12, 'ibge_code' => '5006358', 'name' => "Paranhos"]);
        City::create(['state' => 12, 'ibge_code' => '5006408', 'name' => "Pedro Gomes"]);
        City::create(['state' => 12, 'ibge_code' => '5006606', 'name' => "Ponta Porã"]);
        City::create(['state' => 12, 'ibge_code' => '5006903', 'name' => "Porto Murtinho"]);
        City::create(['state' => 12, 'ibge_code' => '5007109', 'name' => "Ribas do Rio Pardo"]);
        City::create(['state' => 12, 'ibge_code' => '5007208', 'name' => "Rio Brilhante"]);
        City::create(['state' => 12, 'ibge_code' => '5007307', 'name' => "Rio Negro"]);
        City::create(['state' => 12, 'ibge_code' => '5007406', 'name' => "Rio Verde de Mato Grosso"]);
        City::create(['state' => 12, 'ibge_code' => '5007505', 'name' => "Rochedo"]);
        City::create(['state' => 12, 'ibge_code' => '5007554', 'name' => "Santa Rita do Pardo"]);
        City::create(['state' => 12, 'ibge_code' => '5007695', 'name' => "São Gabriel do Oeste"]);
        City::create(['state' => 12, 'ibge_code' => '5007802', 'name' => "Selvíria"]);
        City::create(['state' => 12, 'ibge_code' => '5007703', 'name' => "Sete Quedas"]);
        City::create(['state' => 12, 'ibge_code' => '5007901', 'name' => "Sidrolândia"]);
        City::create(['state' => 12, 'ibge_code' => '5007935', 'name' => "Sonora"]);
        City::create(['state' => 12, 'ibge_code' => '5007950', 'name' => "Tacuru"]);
        City::create(['state' => 12, 'ibge_code' => '5007976', 'name' => "Taquarussu"]);
        City::create(['state' => 12, 'ibge_code' => '5008008', 'name' => "Terenos"]);
        City::create(['state' => 12, 'ibge_code' => '5008305', 'name' => "Três Lagoas"]);
        City::create(['state' => 12, 'ibge_code' => '5008404', 'name' => "Vicentina"]);

        City::create(['state' => 13, 'ibge_code' => '3100104', 'name' => "Abadia dos Dourados"]);
        City::create(['state' => 13, 'ibge_code' => '3100203', 'name' => "Abaeté"]);
        City::create(['state' => 13, 'ibge_code' => '3100302', 'name' => "Abre Campo"]);
        City::create(['state' => 13, 'ibge_code' => '3100401', 'name' => "Acaiaca"]);
        City::create(['state' => 13, 'ibge_code' => '3100500', 'name' => "Açucena"]);
        City::create(['state' => 13, 'ibge_code' => '3100609', 'name' => "Água Boa"]);
        City::create(['state' => 13, 'ibge_code' => '3100708', 'name' => "Água Comprida"]);
        City::create(['state' => 13, 'ibge_code' => '3100807', 'name' => "Aguanil"]);
        City::create(['state' => 13, 'ibge_code' => '3100906', 'name' => "Águas Formosas"]);
        City::create(['state' => 13, 'ibge_code' => '3101003', 'name' => "Águas Vermelhas"]);
        City::create(['state' => 13, 'ibge_code' => '3101102', 'name' => "Aimorés"]);
        City::create(['state' => 13, 'ibge_code' => '3101201', 'name' => "Aiuruoca"]);
        City::create(['state' => 13, 'ibge_code' => '3101300', 'name' => "Alagoa"]);
        City::create(['state' => 13, 'ibge_code' => '3101409', 'name' => "Albertina"]);
        City::create(['state' => 13, 'ibge_code' => '3101508', 'name' => "Além Paraíba"]);
        City::create(['state' => 13, 'ibge_code' => '3101607', 'name' => "Alfenas"]);
        City::create(['state' => 13, 'ibge_code' => '3101631', 'name' => "Alfredo Vasconcelos"]);
        City::create(['state' => 13, 'ibge_code' => '3101706', 'name' => "Almenara"]);
        City::create(['state' => 13, 'ibge_code' => '3101805', 'name' => "Alpercata"]);
        City::create(['state' => 13, 'ibge_code' => '3101904', 'name' => "Alpinópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3102001', 'name' => "Alterosa"]);
        City::create(['state' => 13, 'ibge_code' => '3102050', 'name' => "Alto Caparaó"]);
        City::create(['state' => 13, 'ibge_code' => '3153509', 'name' => "Alto Jequitibá"]);
        City::create(['state' => 13, 'ibge_code' => '3102100', 'name' => "Alto Rio Doce"]);
        City::create(['state' => 13, 'ibge_code' => '3102209', 'name' => "Alvarenga"]);
        City::create(['state' => 13, 'ibge_code' => '3102308', 'name' => "Alvinópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3102407', 'name' => "Alvorada de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3102506', 'name' => "Amparo do Serra"]);
        City::create(['state' => 13, 'ibge_code' => '3102605', 'name' => "Andradas"]);
        City::create(['state' => 13, 'ibge_code' => '3102803', 'name' => "Andrelândia"]);
        City::create(['state' => 13, 'ibge_code' => '3102852', 'name' => "Angelândia"]);
        City::create(['state' => 13, 'ibge_code' => '3102902', 'name' => "Antônio Carlos"]);
        City::create(['state' => 13, 'ibge_code' => '3103009', 'name' => "Antônio Dias"]);
        City::create(['state' => 13, 'ibge_code' => '3103108', 'name' => "Antônio Prado de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3103207', 'name' => "Araçaí"]);
        City::create(['state' => 13, 'ibge_code' => '3103306', 'name' => "Aracitaba"]);
        City::create(['state' => 13, 'ibge_code' => '3103405', 'name' => "Araçuaí"]);
        City::create(['state' => 13, 'ibge_code' => '3103504', 'name' => "Araguari"]);
        City::create(['state' => 13, 'ibge_code' => '3103603', 'name' => "Arantina"]);
        City::create(['state' => 13, 'ibge_code' => '3103702', 'name' => "Araponga"]);
        City::create(['state' => 13, 'ibge_code' => '3103751', 'name' => "Araporã"]);
        City::create(['state' => 13, 'ibge_code' => '3103801', 'name' => "Arapuá"]);
        City::create(['state' => 13, 'ibge_code' => '3103900', 'name' => "Araújos"]);
        City::create(['state' => 13, 'ibge_code' => '3104007', 'name' => "Araxá"]);
        City::create(['state' => 13, 'ibge_code' => '3104106', 'name' => "Arceburgo"]);
        City::create(['state' => 13, 'ibge_code' => '3104205', 'name' => "Arcos"]);
        City::create(['state' => 13, 'ibge_code' => '3104304', 'name' => "Areado"]);
        City::create(['state' => 13, 'ibge_code' => '3104403', 'name' => "Argirita"]);
        City::create(['state' => 13, 'ibge_code' => '3104452', 'name' => "Aricanduva"]);
        City::create(['state' => 13, 'ibge_code' => '3104502', 'name' => "Arinos"]);
        City::create(['state' => 13, 'ibge_code' => '3104601', 'name' => "Astolfo Dutra"]);
        City::create(['state' => 13, 'ibge_code' => '3104700', 'name' => "Ataléia"]);
        City::create(['state' => 13, 'ibge_code' => '3104809', 'name' => "Augusto de Lima"]);
        City::create(['state' => 13, 'ibge_code' => '3104908', 'name' => "Baependi"]);
        City::create(['state' => 13, 'ibge_code' => '3105004', 'name' => "Baldim"]);
        City::create(['state' => 13, 'ibge_code' => '3105103', 'name' => "Bambuí"]);
        City::create(['state' => 13, 'ibge_code' => '3105202', 'name' => "Bandeira"]);
        City::create(['state' => 13, 'ibge_code' => '3105301', 'name' => "Bandeira do Sul"]);
        City::create(['state' => 13, 'ibge_code' => '3105400', 'name' => "Barão de Cocais"]);
        City::create(['state' => 13, 'ibge_code' => '3105509', 'name' => "Barão de Monte Alto"]);
        City::create(['state' => 13, 'ibge_code' => '3105608', 'name' => "Barbacena"]);
        City::create(['state' => 13, 'ibge_code' => '3105707', 'name' => "Barra Longa"]);
        City::create(['state' => 13, 'ibge_code' => '3105905', 'name' => "Barroso"]);
        City::create(['state' => 13, 'ibge_code' => '3106002', 'name' => "Bela Vista de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3106101', 'name' => "Belmiro Braga"]);
        City::create(['state' => 13, 'ibge_code' => '3106200', 'name' => "Belo Horizonte"]);
        City::create(['state' => 13, 'ibge_code' => '3106309', 'name' => "Belo Oriente"]);
        City::create(['state' => 13, 'ibge_code' => '3106408', 'name' => "Belo Vale"]);
        City::create(['state' => 13, 'ibge_code' => '3106507', 'name' => "Berilo"]);
        City::create(['state' => 13, 'ibge_code' => '3106655', 'name' => "Berizal"]);
        City::create(['state' => 13, 'ibge_code' => '3106606', 'name' => "Bertópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3106705', 'name' => "Betim"]);
        City::create(['state' => 13, 'ibge_code' => '3106804', 'name' => "Bias Fortes"]);
        City::create(['state' => 13, 'ibge_code' => '3106903', 'name' => "Bicas"]);
        City::create(['state' => 13, 'ibge_code' => '3107000', 'name' => "Biquinhas"]);
        City::create(['state' => 13, 'ibge_code' => '3107109', 'name' => "Boa Esperança"]);
        City::create(['state' => 13, 'ibge_code' => '3107208', 'name' => "Bocaina de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3107307', 'name' => "Bocaiúva"]);
        City::create(['state' => 13, 'ibge_code' => '3107406', 'name' => "Bom Despacho"]);
        City::create(['state' => 13, 'ibge_code' => '3107505', 'name' => "Bom Jardim de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3107604', 'name' => "Bom Jesus da Penha"]);
        City::create(['state' => 13, 'ibge_code' => '3107703', 'name' => "Bom Jesus do Amparo"]);
        City::create(['state' => 13, 'ibge_code' => '3107802', 'name' => "Bom Jesus do Galho"]);
        City::create(['state' => 13, 'ibge_code' => '3107901', 'name' => "Bom Repouso"]);
        City::create(['state' => 13, 'ibge_code' => '3108008', 'name' => "Bom Sucesso"]);
        City::create(['state' => 13, 'ibge_code' => '3108107', 'name' => "Bonfim"]);
        City::create(['state' => 13, 'ibge_code' => '3108206', 'name' => "Bonfinópolis de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3108255', 'name' => "Bonito de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3108305', 'name' => "Borda da Mata"]);
        City::create(['state' => 13, 'ibge_code' => '3108404', 'name' => "Botelhos"]);
        City::create(['state' => 13, 'ibge_code' => '3108503', 'name' => "Botumirim"]);
        City::create(['state' => 13, 'ibge_code' => '3108701', 'name' => "Brás Pires"]);
        City::create(['state' => 13, 'ibge_code' => '3108552', 'name' => "Brasilândia de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3108602', 'name' => "Brasília de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3108909', 'name' => "Brasópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3108800', 'name' => "Braúnas"]);
        City::create(['state' => 13, 'ibge_code' => '3109006', 'name' => "Brumadinho"]);
        City::create(['state' => 13, 'ibge_code' => '3109105', 'name' => "Bueno Brandão"]);
        City::create(['state' => 13, 'ibge_code' => '3109204', 'name' => "Buenópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3109253', 'name' => "Bugre"]);
        City::create(['state' => 13, 'ibge_code' => '3109303', 'name' => "Buritis"]);
        City::create(['state' => 13, 'ibge_code' => '3109402', 'name' => "Buritizeiro"]);
        City::create(['state' => 13, 'ibge_code' => '3109451', 'name' => "Cabeceira Grande"]);
        City::create(['state' => 13, 'ibge_code' => '3109501', 'name' => "Cabo Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3109600', 'name' => "Cachoeira da Prata"]);
        City::create(['state' => 13, 'ibge_code' => '3109709', 'name' => "Cachoeira de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3102704', 'name' => "Cachoeira de Pajeú"]);
        City::create(['state' => 13, 'ibge_code' => '3109808', 'name' => "Cachoeira Dourada"]);
        City::create(['state' => 13, 'ibge_code' => '3109907', 'name' => "Caetanópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3110004', 'name' => "Caeté"]);
        City::create(['state' => 13, 'ibge_code' => '3110103', 'name' => "Caiana"]);
        City::create(['state' => 13, 'ibge_code' => '3110202', 'name' => "Cajuri"]);
        City::create(['state' => 13, 'ibge_code' => '3110301', 'name' => "Caldas"]);
        City::create(['state' => 13, 'ibge_code' => '3110400', 'name' => "Camacho"]);
        City::create(['state' => 13, 'ibge_code' => '3110509', 'name' => "Camanducaia"]);
        City::create(['state' => 13, 'ibge_code' => '3110608', 'name' => "Cambuí"]);
        City::create(['state' => 13, 'ibge_code' => '3110707', 'name' => "Cambuquira"]);
        City::create(['state' => 13, 'ibge_code' => '3110806', 'name' => "Campanário"]);
        City::create(['state' => 13, 'ibge_code' => '3110905', 'name' => "Campanha"]);
        City::create(['state' => 13, 'ibge_code' => '3111002', 'name' => "Campestre"]);
        City::create(['state' => 13, 'ibge_code' => '3111101', 'name' => "Campina Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3111150', 'name' => "Campo Azul"]);
        City::create(['state' => 13, 'ibge_code' => '3111200', 'name' => "Campo Belo"]);
        City::create(['state' => 13, 'ibge_code' => '3111309', 'name' => "Campo do Meio"]);
        City::create(['state' => 13, 'ibge_code' => '3111408', 'name' => "Campo Florido"]);
        City::create(['state' => 13, 'ibge_code' => '3111507', 'name' => "Campos Altos"]);
        City::create(['state' => 13, 'ibge_code' => '3111606', 'name' => "Campos Gerais"]);
        City::create(['state' => 13, 'ibge_code' => '3111903', 'name' => "Cana Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3111705', 'name' => "Canaã"]);
        City::create(['state' => 13, 'ibge_code' => '3111804', 'name' => "Canápolis"]);
        City::create(['state' => 13, 'ibge_code' => '3112000', 'name' => "Candeias"]);
        City::create(['state' => 13, 'ibge_code' => '3112059', 'name' => "Cantagalo"]);
        City::create(['state' => 13, 'ibge_code' => '3112109', 'name' => "Caparaó"]);
        City::create(['state' => 13, 'ibge_code' => '3112208', 'name' => "Capela Nova"]);
        City::create(['state' => 13, 'ibge_code' => '3112307', 'name' => "Capelinha"]);
        City::create(['state' => 13, 'ibge_code' => '3112406', 'name' => "Capetinga"]);
        City::create(['state' => 13, 'ibge_code' => '3112505', 'name' => "Capim Branco"]);
        City::create(['state' => 13, 'ibge_code' => '3112604', 'name' => "Capinópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3112653', 'name' => "Capitão Andrade"]);
        City::create(['state' => 13, 'ibge_code' => '3112703', 'name' => "Capitão Enéas"]);
        City::create(['state' => 13, 'ibge_code' => '3112802', 'name' => "Capitólio"]);
        City::create(['state' => 13, 'ibge_code' => '3112901', 'name' => "Caputira"]);
        City::create(['state' => 13, 'ibge_code' => '3113008', 'name' => "Caraí"]);
        City::create(['state' => 13, 'ibge_code' => '3113107', 'name' => "Caranaíba"]);
        City::create(['state' => 13, 'ibge_code' => '3113206', 'name' => "Carandaí"]);
        City::create(['state' => 13, 'ibge_code' => '3113305', 'name' => "Carangola"]);
        City::create(['state' => 13, 'ibge_code' => '3113404', 'name' => "Caratinga"]);
        City::create(['state' => 13, 'ibge_code' => '3113503', 'name' => "Carbonita"]);
        City::create(['state' => 13, 'ibge_code' => '3113602', 'name' => "Careaçu"]);
        City::create(['state' => 13, 'ibge_code' => '3113701', 'name' => "Carlos Chagas"]);
        City::create(['state' => 13, 'ibge_code' => '3113800', 'name' => "Carmésia"]);
        City::create(['state' => 13, 'ibge_code' => '3113909', 'name' => "Carmo da Cachoeira"]);
        City::create(['state' => 13, 'ibge_code' => '3114006', 'name' => "Carmo da Mata"]);
        City::create(['state' => 13, 'ibge_code' => '3114105', 'name' => "Carmo de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3114204', 'name' => "Carmo do Cajuru"]);
        City::create(['state' => 13, 'ibge_code' => '3114303', 'name' => "Carmo do Paranaíba"]);
        City::create(['state' => 13, 'ibge_code' => '3114402', 'name' => "Carmo do Rio Claro"]);
        City::create(['state' => 13, 'ibge_code' => '3114501', 'name' => "Carmópolis de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3114550', 'name' => "Carneirinho"]);
        City::create(['state' => 13, 'ibge_code' => '3114600', 'name' => "Carrancas"]);
        City::create(['state' => 13, 'ibge_code' => '3114709', 'name' => "Carvalhópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3114808', 'name' => "Carvalhos"]);
        City::create(['state' => 13, 'ibge_code' => '3114907', 'name' => "Casa Grande"]);
        City::create(['state' => 13, 'ibge_code' => '3115003', 'name' => "Cascalho Rico"]);
        City::create(['state' => 13, 'ibge_code' => '3115102', 'name' => "Cássia"]);
        City::create(['state' => 13, 'ibge_code' => '3115300', 'name' => "Cataguases"]);
        City::create(['state' => 13, 'ibge_code' => '3115359', 'name' => "Catas Altas"]);
        City::create(['state' => 13, 'ibge_code' => '3115409', 'name' => "Catas Altas da Noruega"]);
        City::create(['state' => 13, 'ibge_code' => '3115458', 'name' => "Catuji"]);
        City::create(['state' => 13, 'ibge_code' => '3115474', 'name' => "Catuti"]);
        City::create(['state' => 13, 'ibge_code' => '3115508', 'name' => "Caxambu"]);
        City::create(['state' => 13, 'ibge_code' => '3115607', 'name' => "Cedro do Abaeté"]);
        City::create(['state' => 13, 'ibge_code' => '3115706', 'name' => "Central de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3115805', 'name' => "Centralina"]);
        City::create(['state' => 13, 'ibge_code' => '3115904', 'name' => "Chácara"]);
        City::create(['state' => 13, 'ibge_code' => '3116001', 'name' => "Chalé"]);
        City::create(['state' => 13, 'ibge_code' => '3116100', 'name' => "Chapada do Norte"]);
        City::create(['state' => 13, 'ibge_code' => '3116159', 'name' => "Chapada Gaúcha"]);
        City::create(['state' => 13, 'ibge_code' => '3116209', 'name' => "Chiador"]);
        City::create(['state' => 13, 'ibge_code' => '3116308', 'name' => "Cipotânea"]);
        City::create(['state' => 13, 'ibge_code' => '3116407', 'name' => "Claraval"]);
        City::create(['state' => 13, 'ibge_code' => '3116506', 'name' => "Claro dos Poções"]);
        City::create(['state' => 13, 'ibge_code' => '3116605', 'name' => "Cláudio"]);
        City::create(['state' => 13, 'ibge_code' => '3116704', 'name' => "Coimbra"]);
        City::create(['state' => 13, 'ibge_code' => '3116803', 'name' => "Coluna"]);
        City::create(['state' => 13, 'ibge_code' => '3116902', 'name' => "Comendador Gomes"]);
        City::create(['state' => 13, 'ibge_code' => '3117009', 'name' => "Comercinho"]);
        City::create(['state' => 13, 'ibge_code' => '3117108', 'name' => "Conceição da Aparecida"]);
        City::create(['state' => 13, 'ibge_code' => '3115201', 'name' => "Conceição da Barra de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3117306', 'name' => "Conceição das Alagoas"]);
        City::create(['state' => 13, 'ibge_code' => '3117207', 'name' => "Conceição das Pedras"]);
        City::create(['state' => 13, 'ibge_code' => '3117405', 'name' => "Conceição de Ipanema"]);
        City::create(['state' => 13, 'ibge_code' => '3117504', 'name' => "Conceição do Mato Dentro"]);
        City::create(['state' => 13, 'ibge_code' => '3117603', 'name' => "Conceição do Pará"]);
        City::create(['state' => 13, 'ibge_code' => '3117702', 'name' => "Conceição do Rio Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3117801', 'name' => "Conceição dos Ouros"]);
        City::create(['state' => 13, 'ibge_code' => '3117836', 'name' => "Cônego Marinho"]);
        City::create(['state' => 13, 'ibge_code' => '3117876', 'name' => "Confins"]);
        City::create(['state' => 13, 'ibge_code' => '3117900', 'name' => "Congonhal"]);
        City::create(['state' => 13, 'ibge_code' => '3118007', 'name' => "Congonhas"]);
        City::create(['state' => 13, 'ibge_code' => '3118106', 'name' => "Congonhas do Norte"]);
        City::create(['state' => 13, 'ibge_code' => '3118205', 'name' => "Conquista"]);
        City::create(['state' => 13, 'ibge_code' => '3118304', 'name' => "Conselheiro Lafaiete"]);
        City::create(['state' => 13, 'ibge_code' => '3118403', 'name' => "Conselheiro Pena"]);
        City::create(['state' => 13, 'ibge_code' => '3118502', 'name' => "Consolação"]);
        City::create(['state' => 13, 'ibge_code' => '3118601', 'name' => "Contagem"]);
        City::create(['state' => 13, 'ibge_code' => '3118700', 'name' => "Coqueiral"]);
        City::create(['state' => 13, 'ibge_code' => '3118809', 'name' => "Coração de Jesus"]);
        City::create(['state' => 13, 'ibge_code' => '3118908', 'name' => "Cordisburgo"]);
        City::create(['state' => 13, 'ibge_code' => '3119005', 'name' => "Cordislândia"]);
        City::create(['state' => 13, 'ibge_code' => '3119104', 'name' => "Corinto"]);
        City::create(['state' => 13, 'ibge_code' => '3119203', 'name' => "Coroaci"]);
        City::create(['state' => 13, 'ibge_code' => '3119302', 'name' => "Coromandel"]);
        City::create(['state' => 13, 'ibge_code' => '3119401', 'name' => "Coronel Fabriciano"]);
        City::create(['state' => 13, 'ibge_code' => '3119500', 'name' => "Coronel Murta"]);
        City::create(['state' => 13, 'ibge_code' => '3119609', 'name' => "Coronel Pacheco"]);
        City::create(['state' => 13, 'ibge_code' => '3119708', 'name' => "Coronel Xavier Chaves"]);
        City::create(['state' => 13, 'ibge_code' => '3119807', 'name' => "Córrego Danta"]);
        City::create(['state' => 13, 'ibge_code' => '3119906', 'name' => "Córrego do Bom Jesus"]);
        City::create(['state' => 13, 'ibge_code' => '3119955', 'name' => "Córrego Fundo"]);
        City::create(['state' => 13, 'ibge_code' => '3120003', 'name' => "Córrego Novo"]);
        City::create(['state' => 13, 'ibge_code' => '3120102', 'name' => "Couto de Magalhães de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3120151', 'name' => "Crisólita"]);
        City::create(['state' => 13, 'ibge_code' => '3120201', 'name' => "Cristais"]);
        City::create(['state' => 13, 'ibge_code' => '3120300', 'name' => "Cristália"]);
        City::create(['state' => 13, 'ibge_code' => '3120409', 'name' => "Cristiano Otoni"]);
        City::create(['state' => 13, 'ibge_code' => '3120508', 'name' => "Cristina"]);
        City::create(['state' => 13, 'ibge_code' => '3120607', 'name' => "Crucilândia"]);
        City::create(['state' => 13, 'ibge_code' => '3120706', 'name' => "Cruzeiro da Fortaleza"]);
        City::create(['state' => 13, 'ibge_code' => '3120805', 'name' => "Cruzília"]);
        City::create(['state' => 13, 'ibge_code' => '3120839', 'name' => "Cuparaque"]);
        City::create(['state' => 13, 'ibge_code' => '3120870', 'name' => "Curral de Dentro"]);
        City::create(['state' => 13, 'ibge_code' => '3120904', 'name' => "Curvelo"]);
        City::create(['state' => 13, 'ibge_code' => '3121001', 'name' => "Datas"]);
        City::create(['state' => 13, 'ibge_code' => '3121100', 'name' => "Delfim Moreira"]);
        City::create(['state' => 13, 'ibge_code' => '3121209', 'name' => "Delfinópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3121258', 'name' => "Delta"]);
        City::create(['state' => 13, 'ibge_code' => '3121308', 'name' => "Descoberto"]);
        City::create(['state' => 13, 'ibge_code' => '3121407', 'name' => "Desterro de Entre Rios"]);
        City::create(['state' => 13, 'ibge_code' => '3121506', 'name' => "Desterro do Melo"]);
        City::create(['state' => 13, 'ibge_code' => '3121605', 'name' => "Diamantina"]);
        City::create(['state' => 13, 'ibge_code' => '3121704', 'name' => "Diogo de Vasconcelos"]);
        City::create(['state' => 13, 'ibge_code' => '3121803', 'name' => "Dionísio"]);
        City::create(['state' => 13, 'ibge_code' => '3121902', 'name' => "Divinésia"]);
        City::create(['state' => 13, 'ibge_code' => '3122009', 'name' => "Divino"]);
        City::create(['state' => 13, 'ibge_code' => '3122108', 'name' => "Divino das Laranjeiras"]);
        City::create(['state' => 13, 'ibge_code' => '3122207', 'name' => "Divinolândia de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3122306', 'name' => "Divinópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3122355', 'name' => "Divisa Alegre"]);
        City::create(['state' => 13, 'ibge_code' => '3122405', 'name' => "Divisa Nova"]);
        City::create(['state' => 13, 'ibge_code' => '3122454', 'name' => "Divisópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3122470', 'name' => "Dom Bosco"]);
        City::create(['state' => 13, 'ibge_code' => '3122504', 'name' => "Dom Cavati"]);
        City::create(['state' => 13, 'ibge_code' => '3122603', 'name' => "Dom Joaquim"]);
        City::create(['state' => 13, 'ibge_code' => '3122702', 'name' => "Dom Silvério"]);
        City::create(['state' => 13, 'ibge_code' => '3122801', 'name' => "Dom Viçoso"]);
        City::create(['state' => 13, 'ibge_code' => '3122900', 'name' => "Dona Eusébia"]);
        City::create(['state' => 13, 'ibge_code' => '3123007', 'name' => "Dores de Campos"]);
        City::create(['state' => 13, 'ibge_code' => '3123106', 'name' => "Dores de Guanhães"]);
        City::create(['state' => 13, 'ibge_code' => '3123205', 'name' => "Dores do Indaiá"]);
        City::create(['state' => 13, 'ibge_code' => '3123304', 'name' => "Dores do Turvo"]);
        City::create(['state' => 13, 'ibge_code' => '3123403', 'name' => "Doresópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3123502', 'name' => "Douradoquara"]);
        City::create(['state' => 13, 'ibge_code' => '3123528', 'name' => "Durandé"]);
        City::create(['state' => 13, 'ibge_code' => '3123601', 'name' => "Elói Mendes"]);
        City::create(['state' => 13, 'ibge_code' => '3123700', 'name' => "Engenheiro Caldas"]);
        City::create(['state' => 13, 'ibge_code' => '3123809', 'name' => "Engenheiro Navarro"]);
        City::create(['state' => 13, 'ibge_code' => '3123858', 'name' => "Entre Folhas"]);
        City::create(['state' => 13, 'ibge_code' => '3123908', 'name' => "Entre Rios de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3124005', 'name' => "Ervália"]);
        City::create(['state' => 13, 'ibge_code' => '3124104', 'name' => "Esmeraldas"]);
        City::create(['state' => 13, 'ibge_code' => '3124203', 'name' => "Espera Feliz"]);
        City::create(['state' => 13, 'ibge_code' => '3124302', 'name' => "Espinosa"]);
        City::create(['state' => 13, 'ibge_code' => '3124401', 'name' => "Espírito Santo do Dourado"]);
        City::create(['state' => 13, 'ibge_code' => '3124500', 'name' => "Estiva"]);
        City::create(['state' => 13, 'ibge_code' => '3124609', 'name' => "Estrela Dalva"]);
        City::create(['state' => 13, 'ibge_code' => '3124708', 'name' => "Estrela do Indaiá"]);
        City::create(['state' => 13, 'ibge_code' => '3124807', 'name' => "Estrela do Sul"]);
        City::create(['state' => 13, 'ibge_code' => '3124906', 'name' => "Eugenópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3125002', 'name' => "Ewbank da Câmara"]);
        City::create(['state' => 13, 'ibge_code' => '3125101', 'name' => "Extrema"]);
        City::create(['state' => 13, 'ibge_code' => '3125200', 'name' => "Fama"]);
        City::create(['state' => 13, 'ibge_code' => '3125309', 'name' => "Faria Lemos"]);
        City::create(['state' => 13, 'ibge_code' => '3125408', 'name' => "Felício dos Santos"]);
        City::create(['state' => 13, 'ibge_code' => '3125606', 'name' => "Felisburgo"]);
        City::create(['state' => 13, 'ibge_code' => '3125705', 'name' => "Felixlândia"]);
        City::create(['state' => 13, 'ibge_code' => '3125804', 'name' => "Fernandes Tourinho"]);
        City::create(['state' => 13, 'ibge_code' => '3125903', 'name' => "Ferros"]);
        City::create(['state' => 13, 'ibge_code' => '3125952', 'name' => "Fervedouro"]);
        City::create(['state' => 13, 'ibge_code' => '3126000', 'name' => "Florestal"]);
        City::create(['state' => 13, 'ibge_code' => '3126109', 'name' => "Formiga"]);
        City::create(['state' => 13, 'ibge_code' => '3126208', 'name' => "Formoso"]);
        City::create(['state' => 13, 'ibge_code' => '3126307', 'name' => "Fortaleza de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3126406', 'name' => "Fortuna de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3126505', 'name' => "Francisco Badaró"]);
        City::create(['state' => 13, 'ibge_code' => '3126604', 'name' => "Francisco Dumont"]);
        City::create(['state' => 13, 'ibge_code' => '3126703', 'name' => "Francisco Sá"]);
        City::create(['state' => 13, 'ibge_code' => '3126752', 'name' => "Franciscópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3126802', 'name' => "Frei Gaspar"]);
        City::create(['state' => 13, 'ibge_code' => '3126901', 'name' => "Frei Inocêncio"]);
        City::create(['state' => 13, 'ibge_code' => '3126950', 'name' => "Frei Lagonegro"]);
        City::create(['state' => 13, 'ibge_code' => '3127008', 'name' => "Fronteira"]);
        City::create(['state' => 13, 'ibge_code' => '3127057', 'name' => "Fronteira dos Vales"]);
        City::create(['state' => 13, 'ibge_code' => '3127073', 'name' => "Fruta de Leite"]);
        City::create(['state' => 13, 'ibge_code' => '3127107', 'name' => "Frutal"]);
        City::create(['state' => 13, 'ibge_code' => '3127206', 'name' => "Funilândia"]);
        City::create(['state' => 13, 'ibge_code' => '3127305', 'name' => "Galiléia"]);
        City::create(['state' => 13, 'ibge_code' => '3127339', 'name' => "Gameleiras"]);
        City::create(['state' => 13, 'ibge_code' => '3127354', 'name' => "Glaucilândia"]);
        City::create(['state' => 13, 'ibge_code' => '3127370', 'name' => "Goiabeira"]);
        City::create(['state' => 13, 'ibge_code' => '3127388', 'name' => "Goianá"]);
        City::create(['state' => 13, 'ibge_code' => '3127404', 'name' => "Gonçalves"]);
        City::create(['state' => 13, 'ibge_code' => '3127503', 'name' => "Gonzaga"]);
        City::create(['state' => 13, 'ibge_code' => '3127602', 'name' => "Gouveia"]);
        City::create(['state' => 13, 'ibge_code' => '3127701', 'name' => "Governador Valadares"]);
        City::create(['state' => 13, 'ibge_code' => '3127800', 'name' => "Grão Mogol"]);
        City::create(['state' => 13, 'ibge_code' => '3127909', 'name' => "Grupiara"]);
        City::create(['state' => 13, 'ibge_code' => '3128006', 'name' => "Guanhães"]);
        City::create(['state' => 13, 'ibge_code' => '3128105', 'name' => "Guapé"]);
        City::create(['state' => 13, 'ibge_code' => '3128204', 'name' => "Guaraciaba"]);
        City::create(['state' => 13, 'ibge_code' => '3128253', 'name' => "Guaraciama"]);
        City::create(['state' => 13, 'ibge_code' => '3128303', 'name' => "Guaranésia"]);
        City::create(['state' => 13, 'ibge_code' => '3128402', 'name' => "Guarani"]);
        City::create(['state' => 13, 'ibge_code' => '3128501', 'name' => "Guarará"]);
        City::create(['state' => 13, 'ibge_code' => '3128600', 'name' => "Guarda-Mor"]);
        City::create(['state' => 13, 'ibge_code' => '3128709', 'name' => "Guaxupé"]);
        City::create(['state' => 13, 'ibge_code' => '3128808', 'name' => "Guidoval"]);
        City::create(['state' => 13, 'ibge_code' => '3128907', 'name' => "Guimarânia"]);
        City::create(['state' => 13, 'ibge_code' => '3129004', 'name' => "Guiricema"]);
        City::create(['state' => 13, 'ibge_code' => '3129103', 'name' => "Gurinhatã"]);
        City::create(['state' => 13, 'ibge_code' => '3129202', 'name' => "Heliodora"]);
        City::create(['state' => 13, 'ibge_code' => '3129301', 'name' => "Iapu"]);
        City::create(['state' => 13, 'ibge_code' => '3129400', 'name' => "Ibertioga"]);
        City::create(['state' => 13, 'ibge_code' => '3129509', 'name' => "Ibiá"]);
        City::create(['state' => 13, 'ibge_code' => '3129608', 'name' => "Ibiaí"]);
        City::create(['state' => 13, 'ibge_code' => '3129657', 'name' => "Ibiracatu"]);
        City::create(['state' => 13, 'ibge_code' => '3129707', 'name' => "Ibiraci"]);
        City::create(['state' => 13, 'ibge_code' => '3129806', 'name' => "Ibirité"]);
        City::create(['state' => 13, 'ibge_code' => '3129905', 'name' => "Ibitiúra de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3130002', 'name' => "Ibituruna"]);
        City::create(['state' => 13, 'ibge_code' => '3130051', 'name' => "Icaraí de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3130101', 'name' => "Igarapé"]);
        City::create(['state' => 13, 'ibge_code' => '3130200', 'name' => "Igaratinga"]);
        City::create(['state' => 13, 'ibge_code' => '3130309', 'name' => "Iguatama"]);
        City::create(['state' => 13, 'ibge_code' => '3130408', 'name' => "Ijaci"]);
        City::create(['state' => 13, 'ibge_code' => '3130507', 'name' => "Ilicínea"]);
        City::create(['state' => 13, 'ibge_code' => '3130556', 'name' => "Imbé de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3130606', 'name' => "Inconfidentes"]);
        City::create(['state' => 13, 'ibge_code' => '3130655', 'name' => "Indaiabira"]);
        City::create(['state' => 13, 'ibge_code' => '3130705', 'name' => "Indianópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3130804', 'name' => "Ingaí"]);
        City::create(['state' => 13, 'ibge_code' => '3130903', 'name' => "Inhapim"]);
        City::create(['state' => 13, 'ibge_code' => '3131000', 'name' => "Inhaúma"]);
        City::create(['state' => 13, 'ibge_code' => '3131109', 'name' => "Inimutaba"]);
        City::create(['state' => 13, 'ibge_code' => '3131158', 'name' => "Ipaba"]);
        City::create(['state' => 13, 'ibge_code' => '3131208', 'name' => "Ipanema"]);
        City::create(['state' => 13, 'ibge_code' => '3131307', 'name' => "Ipatinga"]);
        City::create(['state' => 13, 'ibge_code' => '3131406', 'name' => "Ipiaçu"]);
        City::create(['state' => 13, 'ibge_code' => '3131505', 'name' => "Ipuiúna"]);
        City::create(['state' => 13, 'ibge_code' => '3131604', 'name' => "Iraí de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3131703', 'name' => "Itabira"]);
        City::create(['state' => 13, 'ibge_code' => '3131802', 'name' => "Itabirinha"]);
        City::create(['state' => 13, 'ibge_code' => '3131901', 'name' => "Itabirito"]);
        City::create(['state' => 13, 'ibge_code' => '3132008', 'name' => "Itacambira"]);
        City::create(['state' => 13, 'ibge_code' => '3132107', 'name' => "Itacarambi"]);
        City::create(['state' => 13, 'ibge_code' => '3132206', 'name' => "Itaguara"]);
        City::create(['state' => 13, 'ibge_code' => '3132305', 'name' => "Itaipé"]);
        City::create(['state' => 13, 'ibge_code' => '3132404', 'name' => "Itajubá"]);
        City::create(['state' => 13, 'ibge_code' => '3132503', 'name' => "Itamarandiba"]);
        City::create(['state' => 13, 'ibge_code' => '3132602', 'name' => "Itamarati de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3132701', 'name' => "Itambacuri"]);
        City::create(['state' => 13, 'ibge_code' => '3132800', 'name' => "Itambé do Mato Dentro"]);
        City::create(['state' => 13, 'ibge_code' => '3132909', 'name' => "Itamogi"]);
        City::create(['state' => 13, 'ibge_code' => '3133006', 'name' => "Itamonte"]);
        City::create(['state' => 13, 'ibge_code' => '3133105', 'name' => "Itanhandu"]);
        City::create(['state' => 13, 'ibge_code' => '3133204', 'name' => "Itanhomi"]);
        City::create(['state' => 13, 'ibge_code' => '3133303', 'name' => "Itaobim"]);
        City::create(['state' => 13, 'ibge_code' => '3133402', 'name' => "Itapagipe"]);
        City::create(['state' => 13, 'ibge_code' => '3133501', 'name' => "Itapecerica"]);
        City::create(['state' => 13, 'ibge_code' => '3133600', 'name' => "Itapeva"]);
        City::create(['state' => 13, 'ibge_code' => '3133709', 'name' => "Itatiaiuçu"]);
        City::create(['state' => 13, 'ibge_code' => '3133758', 'name' => "Itaú de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3133808', 'name' => "Itaúna"]);
        City::create(['state' => 13, 'ibge_code' => '3133907', 'name' => "Itaverava"]);
        City::create(['state' => 13, 'ibge_code' => '3134004', 'name' => "Itinga"]);
        City::create(['state' => 13, 'ibge_code' => '3134103', 'name' => "Itueta"]);
        City::create(['state' => 13, 'ibge_code' => '3134202', 'name' => "Ituiutaba"]);
        City::create(['state' => 13, 'ibge_code' => '3134301', 'name' => "Itumirim"]);
        City::create(['state' => 13, 'ibge_code' => '3134400', 'name' => "Iturama"]);
        City::create(['state' => 13, 'ibge_code' => '3134509', 'name' => "Itutinga"]);
        City::create(['state' => 13, 'ibge_code' => '3134608', 'name' => "Jaboticatubas"]);
        City::create(['state' => 13, 'ibge_code' => '3134707', 'name' => "Jacinto"]);
        City::create(['state' => 13, 'ibge_code' => '3134806', 'name' => "Jacuí"]);
        City::create(['state' => 13, 'ibge_code' => '3134905', 'name' => "Jacutinga"]);
        City::create(['state' => 13, 'ibge_code' => '3135001', 'name' => "Jaguaraçu"]);
        City::create(['state' => 13, 'ibge_code' => '3135050', 'name' => "Jaíba"]);
        City::create(['state' => 13, 'ibge_code' => '3135076', 'name' => "Jampruca"]);
        City::create(['state' => 13, 'ibge_code' => '3135100', 'name' => "Janaúba"]);
        City::create(['state' => 13, 'ibge_code' => '3135209', 'name' => "Januária"]);
        City::create(['state' => 13, 'ibge_code' => '3135308', 'name' => "Japaraíba"]);
        City::create(['state' => 13, 'ibge_code' => '3135357', 'name' => "Japonvar"]);
        City::create(['state' => 13, 'ibge_code' => '3135407', 'name' => "Jeceaba"]);
        City::create(['state' => 13, 'ibge_code' => '3135456', 'name' => "Jenipapo de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3135506', 'name' => "Jequeri"]);
        City::create(['state' => 13, 'ibge_code' => '3135605', 'name' => "Jequitaí"]);
        City::create(['state' => 13, 'ibge_code' => '3135704', 'name' => "Jequitibá"]);
        City::create(['state' => 13, 'ibge_code' => '3135803', 'name' => "Jequitinhonha"]);
        City::create(['state' => 13, 'ibge_code' => '3135902', 'name' => "Jesuânia"]);
        City::create(['state' => 13, 'ibge_code' => '3136009', 'name' => "Joaíma"]);
        City::create(['state' => 13, 'ibge_code' => '3136108', 'name' => "Joanésia"]);
        City::create(['state' => 13, 'ibge_code' => '3136207', 'name' => "João Monlevade"]);
        City::create(['state' => 13, 'ibge_code' => '3136306', 'name' => "João Pinheiro"]);
        City::create(['state' => 13, 'ibge_code' => '3136405', 'name' => "Joaquim Felício"]);
        City::create(['state' => 13, 'ibge_code' => '3136504', 'name' => "Jordânia"]);
        City::create(['state' => 13, 'ibge_code' => '3136520', 'name' => "José Gonçalves de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3136553', 'name' => "José Raydan"]);
        City::create(['state' => 13, 'ibge_code' => '3136579', 'name' => "Josenópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3136652', 'name' => "Juatuba"]);
        City::create(['state' => 13, 'ibge_code' => '3136702', 'name' => "Juiz de Fora"]);
        City::create(['state' => 13, 'ibge_code' => '3136801', 'name' => "Juramento"]);
        City::create(['state' => 13, 'ibge_code' => '3136900', 'name' => "Juruaia"]);
        City::create(['state' => 13, 'ibge_code' => '3136959', 'name' => "Juvenília"]);
        City::create(['state' => 13, 'ibge_code' => '3137007', 'name' => "Ladainha"]);
        City::create(['state' => 13, 'ibge_code' => '3137106', 'name' => "Lagamar"]);
        City::create(['state' => 13, 'ibge_code' => '3137205', 'name' => "Lagoa da Prata"]);
        City::create(['state' => 13, 'ibge_code' => '3137304', 'name' => "Lagoa dos Patos"]);
        City::create(['state' => 13, 'ibge_code' => '3137403', 'name' => "Lagoa Dourada"]);
        City::create(['state' => 13, 'ibge_code' => '3137502', 'name' => "Lagoa Formosa"]);
        City::create(['state' => 13, 'ibge_code' => '3137536', 'name' => "Lagoa Grande"]);
        City::create(['state' => 13, 'ibge_code' => '3137601', 'name' => "Lagoa Santa"]);
        City::create(['state' => 13, 'ibge_code' => '3137700', 'name' => "Lajinha"]);
        City::create(['state' => 13, 'ibge_code' => '3137809', 'name' => "Lambari"]);
        City::create(['state' => 13, 'ibge_code' => '3137908', 'name' => "Lamim"]);
        City::create(['state' => 13, 'ibge_code' => '3138005', 'name' => "Laranjal"]);
        City::create(['state' => 13, 'ibge_code' => '3138104', 'name' => "Lassance"]);
        City::create(['state' => 13, 'ibge_code' => '3138203', 'name' => "Lavras"]);
        City::create(['state' => 13, 'ibge_code' => '3138302', 'name' => "Leandro Ferreira"]);
        City::create(['state' => 13, 'ibge_code' => '3138351', 'name' => "Leme do Prado"]);
        City::create(['state' => 13, 'ibge_code' => '3138401', 'name' => "Leopoldina"]);
        City::create(['state' => 13, 'ibge_code' => '3138500', 'name' => "Liberdade"]);
        City::create(['state' => 13, 'ibge_code' => '3138609', 'name' => "Lima Duarte"]);
        City::create(['state' => 13, 'ibge_code' => '3138625', 'name' => "Limeira do Oeste"]);
        City::create(['state' => 13, 'ibge_code' => '3138658', 'name' => "Lontra"]);
        City::create(['state' => 13, 'ibge_code' => '3138674', 'name' => "Luisburgo"]);
        City::create(['state' => 13, 'ibge_code' => '3138682', 'name' => "Luislândia"]);
        City::create(['state' => 13, 'ibge_code' => '3138708', 'name' => "Luminárias"]);
        City::create(['state' => 13, 'ibge_code' => '3138807', 'name' => "Luz"]);
        City::create(['state' => 13, 'ibge_code' => '3138906', 'name' => "Machacalis"]);
        City::create(['state' => 13, 'ibge_code' => '3139003', 'name' => "Machado"]);
        City::create(['state' => 13, 'ibge_code' => '3139102', 'name' => "Madre de Deus de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3139201', 'name' => "Malacacheta"]);
        City::create(['state' => 13, 'ibge_code' => '3139250', 'name' => "Mamonas"]);
        City::create(['state' => 13, 'ibge_code' => '3139300', 'name' => "Manga"]);
        City::create(['state' => 13, 'ibge_code' => '3139409', 'name' => "Manhuaçu"]);
        City::create(['state' => 13, 'ibge_code' => '3139508', 'name' => "Manhumirim"]);
        City::create(['state' => 13, 'ibge_code' => '3139607', 'name' => "Mantena"]);
        City::create(['state' => 13, 'ibge_code' => '3139805', 'name' => "Mar de Espanha"]);
        City::create(['state' => 13, 'ibge_code' => '3139706', 'name' => "Maravilhas"]);
        City::create(['state' => 13, 'ibge_code' => '3139904', 'name' => "Maria da Fé"]);
        City::create(['state' => 13, 'ibge_code' => '3140001', 'name' => "Mariana"]);
        City::create(['state' => 13, 'ibge_code' => '3140100', 'name' => "Marilac"]);
        City::create(['state' => 13, 'ibge_code' => '3140159', 'name' => "Mário Campos"]);
        City::create(['state' => 13, 'ibge_code' => '3140209', 'name' => "Maripá de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3140308', 'name' => "Marliéria"]);
        City::create(['state' => 13, 'ibge_code' => '3140407', 'name' => "Marmelópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3140506', 'name' => "Martinho Campos"]);
        City::create(['state' => 13, 'ibge_code' => '3140530', 'name' => "Martins Soares"]);
        City::create(['state' => 13, 'ibge_code' => '3140555', 'name' => "Mata Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3140605', 'name' => "Materlândia"]);
        City::create(['state' => 13, 'ibge_code' => '3140704', 'name' => "Mateus Leme"]);
        City::create(['state' => 13, 'ibge_code' => '3171501', 'name' => "Mathias Lobato"]);
        City::create(['state' => 13, 'ibge_code' => '3140803', 'name' => "Matias Barbosa"]);
        City::create(['state' => 13, 'ibge_code' => '3140852', 'name' => "Matias Cardoso"]);
        City::create(['state' => 13, 'ibge_code' => '3140902', 'name' => "Matipó"]);
        City::create(['state' => 13, 'ibge_code' => '3141009', 'name' => "Mato Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3141108', 'name' => "Matozinhos"]);
        City::create(['state' => 13, 'ibge_code' => '3141207', 'name' => "Matutina"]);
        City::create(['state' => 13, 'ibge_code' => '3141306', 'name' => "Medeiros"]);
        City::create(['state' => 13, 'ibge_code' => '3141405', 'name' => "Medina"]);
        City::create(['state' => 13, 'ibge_code' => '3141504', 'name' => "Mendes Pimentel"]);
        City::create(['state' => 13, 'ibge_code' => '3141603', 'name' => "Mercês"]);
        City::create(['state' => 13, 'ibge_code' => '3141702', 'name' => "Mesquita"]);
        City::create(['state' => 13, 'ibge_code' => '3141801', 'name' => "Minas Novas"]);
        City::create(['state' => 13, 'ibge_code' => '3141900', 'name' => "Minduri"]);
        City::create(['state' => 13, 'ibge_code' => '3142007', 'name' => "Mirabela"]);
        City::create(['state' => 13, 'ibge_code' => '3142106', 'name' => "Miradouro"]);
        City::create(['state' => 13, 'ibge_code' => '3142205', 'name' => "Miraí"]);
        City::create(['state' => 13, 'ibge_code' => '3142254', 'name' => "Miravânia"]);
        City::create(['state' => 13, 'ibge_code' => '3142304', 'name' => "Moeda"]);
        City::create(['state' => 13, 'ibge_code' => '3142403', 'name' => "Moema"]);
        City::create(['state' => 13, 'ibge_code' => '3142502', 'name' => "Monjolos"]);
        City::create(['state' => 13, 'ibge_code' => '3142601', 'name' => "Monsenhor Paulo"]);
        City::create(['state' => 13, 'ibge_code' => '3142700', 'name' => "Montalvânia"]);
        City::create(['state' => 13, 'ibge_code' => '3142809', 'name' => "Monte Alegre de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3142908', 'name' => "Monte Azul"]);
        City::create(['state' => 13, 'ibge_code' => '3143005', 'name' => "Monte Belo"]);
        City::create(['state' => 13, 'ibge_code' => '3143104', 'name' => "Monte Carmelo"]);
        City::create(['state' => 13, 'ibge_code' => '3143153', 'name' => "Monte Formoso"]);
        City::create(['state' => 13, 'ibge_code' => '3143203', 'name' => "Monte Santo de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3143401', 'name' => "Monte Sião"]);
        City::create(['state' => 13, 'ibge_code' => '3143302', 'name' => "Montes Claros"]);
        City::create(['state' => 13, 'ibge_code' => '3143450', 'name' => "Montezuma"]);
        City::create(['state' => 13, 'ibge_code' => '3143500', 'name' => "Morada Nova de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3143609', 'name' => "Morro da Garça"]);
        City::create(['state' => 13, 'ibge_code' => '3143708', 'name' => "Morro do Pilar"]);
        City::create(['state' => 13, 'ibge_code' => '3143807', 'name' => "Munhoz"]);
        City::create(['state' => 13, 'ibge_code' => '3143906', 'name' => "Muriaé"]);
        City::create(['state' => 13, 'ibge_code' => '3144003', 'name' => "Mutum"]);
        City::create(['state' => 13, 'ibge_code' => '3144102', 'name' => "Muzambinho"]);
        City::create(['state' => 13, 'ibge_code' => '3144201', 'name' => "Nacip Raydan"]);
        City::create(['state' => 13, 'ibge_code' => '3144300', 'name' => "Nanuque"]);
        City::create(['state' => 13, 'ibge_code' => '3144359', 'name' => "Naque"]);
        City::create(['state' => 13, 'ibge_code' => '3144375', 'name' => "Natalândia"]);
        City::create(['state' => 13, 'ibge_code' => '3144409', 'name' => "Natércia"]);
        City::create(['state' => 13, 'ibge_code' => '3144508', 'name' => "Nazareno"]);
        City::create(['state' => 13, 'ibge_code' => '3144607', 'name' => "Nepomuceno"]);
        City::create(['state' => 13, 'ibge_code' => '3144656', 'name' => "Ninheira"]);
        City::create(['state' => 13, 'ibge_code' => '3144672', 'name' => "Nova Belém"]);
        City::create(['state' => 13, 'ibge_code' => '3144706', 'name' => "Nova Era"]);
        City::create(['state' => 13, 'ibge_code' => '3144805', 'name' => "Nova Lima"]);
        City::create(['state' => 13, 'ibge_code' => '3144904', 'name' => "Nova Módica"]);
        City::create(['state' => 13, 'ibge_code' => '3145000', 'name' => "Nova Ponte"]);
        City::create(['state' => 13, 'ibge_code' => '3145059', 'name' => "Nova Porteirinha"]);
        City::create(['state' => 13, 'ibge_code' => '3145109', 'name' => "Nova Resende"]);
        City::create(['state' => 13, 'ibge_code' => '3145208', 'name' => "Nova Serrana"]);
        City::create(['state' => 13, 'ibge_code' => '3136603', 'name' => "Nova União"]);
        City::create(['state' => 13, 'ibge_code' => '3145307', 'name' => "Novo Cruzeiro"]);
        City::create(['state' => 13, 'ibge_code' => '3145356', 'name' => "Novo Oriente de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3145372', 'name' => "Novorizonte"]);
        City::create(['state' => 13, 'ibge_code' => '3145406', 'name' => "Olaria"]);
        City::create(['state' => 13, 'ibge_code' => '3145455', 'name' => "Olhos-d'Água"]);
        City::create(['state' => 13, 'ibge_code' => '3145505', 'name' => "Olímpio Noronha"]);
        City::create(['state' => 13, 'ibge_code' => '3145604', 'name' => "Oliveira"]);
        City::create(['state' => 13, 'ibge_code' => '3145703', 'name' => "Oliveira Fortes"]);
        City::create(['state' => 13, 'ibge_code' => '3145802', 'name' => "Onça de Pitangui"]);
        City::create(['state' => 13, 'ibge_code' => '3145851', 'name' => "Oratórios"]);
        City::create(['state' => 13, 'ibge_code' => '3145877', 'name' => "Orizânia"]);
        City::create(['state' => 13, 'ibge_code' => '3145901', 'name' => "Ouro Branco"]);
        City::create(['state' => 13, 'ibge_code' => '3146008', 'name' => "Ouro Fino"]);
        City::create(['state' => 13, 'ibge_code' => '3146107', 'name' => "Ouro Preto"]);
        City::create(['state' => 13, 'ibge_code' => '3146206', 'name' => "Ouro Verde de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3146255', 'name' => "Padre Carvalho"]);
        City::create(['state' => 13, 'ibge_code' => '3146305', 'name' => "Padre Paraíso"]);
        City::create(['state' => 13, 'ibge_code' => '3146552', 'name' => "Pai Pedro"]);
        City::create(['state' => 13, 'ibge_code' => '3146404', 'name' => "Paineiras"]);
        City::create(['state' => 13, 'ibge_code' => '3146503', 'name' => "Pains"]);
        City::create(['state' => 13, 'ibge_code' => '3146602', 'name' => "Paiva"]);
        City::create(['state' => 13, 'ibge_code' => '3146701', 'name' => "Palma"]);
        City::create(['state' => 13, 'ibge_code' => '3146750', 'name' => "Palmópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3146909', 'name' => "Papagaios"]);
        City::create(['state' => 13, 'ibge_code' => '3147105', 'name' => "Pará de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3147006', 'name' => "Paracatu"]);
        City::create(['state' => 13, 'ibge_code' => '3147204', 'name' => "Paraguaçu"]);
        City::create(['state' => 13, 'ibge_code' => '3147303', 'name' => "Paraisópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3147402', 'name' => "Paraopeba"]);
        City::create(['state' => 13, 'ibge_code' => '3147600', 'name' => "Passa Quatro"]);
        City::create(['state' => 13, 'ibge_code' => '3147709', 'name' => "Passa Tempo"]);
        City::create(['state' => 13, 'ibge_code' => '3147501', 'name' => "Passabém"]);
        City::create(['state' => 13, 'ibge_code' => '3147808', 'name' => "Passa-Vinte"]);
        City::create(['state' => 13, 'ibge_code' => '3147907', 'name' => "Passos"]);
        City::create(['state' => 13, 'ibge_code' => '3147956', 'name' => "Patis"]);
        City::create(['state' => 13, 'ibge_code' => '3148004', 'name' => "Patos de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3148103', 'name' => "Patrocínio"]);
        City::create(['state' => 13, 'ibge_code' => '3148202', 'name' => "Patrocínio do Muriaé"]);
        City::create(['state' => 13, 'ibge_code' => '3148301', 'name' => "Paula Cândido"]);
        City::create(['state' => 13, 'ibge_code' => '3148400', 'name' => "Paulistas"]);
        City::create(['state' => 13, 'ibge_code' => '3148509', 'name' => "Pavão"]);
        City::create(['state' => 13, 'ibge_code' => '3148608', 'name' => "Peçanha"]);
        City::create(['state' => 13, 'ibge_code' => '3148707', 'name' => "Pedra Azul"]);
        City::create(['state' => 13, 'ibge_code' => '3148756', 'name' => "Pedra Bonita"]);
        City::create(['state' => 13, 'ibge_code' => '3148806', 'name' => "Pedra do Anta"]);
        City::create(['state' => 13, 'ibge_code' => '3148905', 'name' => "Pedra do Indaiá"]);
        City::create(['state' => 13, 'ibge_code' => '3149002', 'name' => "Pedra Dourada"]);
        City::create(['state' => 13, 'ibge_code' => '3149101', 'name' => "Pedralva"]);
        City::create(['state' => 13, 'ibge_code' => '3149150', 'name' => "Pedras de Maria da Cruz"]);
        City::create(['state' => 13, 'ibge_code' => '3149200', 'name' => "Pedrinópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3149309', 'name' => "Pedro Leopoldo"]);
        City::create(['state' => 13, 'ibge_code' => '3149408', 'name' => "Pedro Teixeira"]);
        City::create(['state' => 13, 'ibge_code' => '3149507', 'name' => "Pequeri"]);
        City::create(['state' => 13, 'ibge_code' => '3149606', 'name' => "Pequi"]);
        City::create(['state' => 13, 'ibge_code' => '3149705', 'name' => "Perdigão"]);
        City::create(['state' => 13, 'ibge_code' => '3149804', 'name' => "Perdizes"]);
        City::create(['state' => 13, 'ibge_code' => '3149903', 'name' => "Perdões"]);
        City::create(['state' => 13, 'ibge_code' => '3149952', 'name' => "Periquito"]);
        City::create(['state' => 13, 'ibge_code' => '3150000', 'name' => "Pescador"]);
        City::create(['state' => 13, 'ibge_code' => '3150109', 'name' => "Piau"]);
        City::create(['state' => 13, 'ibge_code' => '3150158', 'name' => "Piedade de Caratinga"]);
        City::create(['state' => 13, 'ibge_code' => '3150208', 'name' => "Piedade de Ponte Nova"]);
        City::create(['state' => 13, 'ibge_code' => '3150307', 'name' => "Piedade do Rio Grande"]);
        City::create(['state' => 13, 'ibge_code' => '3150406', 'name' => "Piedade dos Gerais"]);
        City::create(['state' => 13, 'ibge_code' => '3150505', 'name' => "Pimenta"]);
        City::create(['state' => 13, 'ibge_code' => '3150539', 'name' => "Pingo-d'Água"]);
        City::create(['state' => 13, 'ibge_code' => '3150570', 'name' => "Pintópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3150604', 'name' => "Piracema"]);
        City::create(['state' => 13, 'ibge_code' => '3150703', 'name' => "Pirajuba"]);
        City::create(['state' => 13, 'ibge_code' => '3150802', 'name' => "Piranga"]);
        City::create(['state' => 13, 'ibge_code' => '3150901', 'name' => "Piranguçu"]);
        City::create(['state' => 13, 'ibge_code' => '3151008', 'name' => "Piranguinho"]);
        City::create(['state' => 13, 'ibge_code' => '3151107', 'name' => "Pirapetinga"]);
        City::create(['state' => 13, 'ibge_code' => '3151206', 'name' => "Pirapora"]);
        City::create(['state' => 13, 'ibge_code' => '3151305', 'name' => "Piraúba"]);
        City::create(['state' => 13, 'ibge_code' => '3151404', 'name' => "Pitangui"]);
        City::create(['state' => 13, 'ibge_code' => '3151503', 'name' => "Piumhi"]);
        City::create(['state' => 13, 'ibge_code' => '3151602', 'name' => "Planura"]);
        City::create(['state' => 13, 'ibge_code' => '3151701', 'name' => "Poço Fundo"]);
        City::create(['state' => 13, 'ibge_code' => '3151800', 'name' => "Poços de Caldas"]);
        City::create(['state' => 13, 'ibge_code' => '3151909', 'name' => "Pocrane"]);
        City::create(['state' => 13, 'ibge_code' => '3152006', 'name' => "Pompéu"]);
        City::create(['state' => 13, 'ibge_code' => '3152105', 'name' => "Ponte Nova"]);
        City::create(['state' => 13, 'ibge_code' => '3152131', 'name' => "Ponto Chique"]);
        City::create(['state' => 13, 'ibge_code' => '3152170', 'name' => "Ponto dos Volantes"]);
        City::create(['state' => 13, 'ibge_code' => '3152204', 'name' => "Porteirinha"]);
        City::create(['state' => 13, 'ibge_code' => '3152303', 'name' => "Porto Firme"]);
        City::create(['state' => 13, 'ibge_code' => '3152402', 'name' => "Poté"]);
        City::create(['state' => 13, 'ibge_code' => '3152501', 'name' => "Pouso Alegre"]);
        City::create(['state' => 13, 'ibge_code' => '3152600', 'name' => "Pouso Alto"]);
        City::create(['state' => 13, 'ibge_code' => '3152709', 'name' => "Prados"]);
        City::create(['state' => 13, 'ibge_code' => '3152808', 'name' => "Prata"]);
        City::create(['state' => 13, 'ibge_code' => '3152907', 'name' => "Pratápolis"]);
        City::create(['state' => 13, 'ibge_code' => '3153004', 'name' => "Pratinha"]);
        City::create(['state' => 13, 'ibge_code' => '3153103', 'name' => "Presidente Bernardes"]);
        City::create(['state' => 13, 'ibge_code' => '3153202', 'name' => "Presidente Juscelino"]);
        City::create(['state' => 13, 'ibge_code' => '3153301', 'name' => "Presidente Kubitschek"]);
        City::create(['state' => 13, 'ibge_code' => '3153400', 'name' => "Presidente Olegário"]);
        City::create(['state' => 13, 'ibge_code' => '3153608', 'name' => "Prudente de Morais"]);
        City::create(['state' => 13, 'ibge_code' => '3153707', 'name' => "Quartel Geral"]);
        City::create(['state' => 13, 'ibge_code' => '3153806', 'name' => "Queluzito"]);
        City::create(['state' => 13, 'ibge_code' => '3153905', 'name' => "Raposos"]);
        City::create(['state' => 13, 'ibge_code' => '3154002', 'name' => "Raul Soares"]);
        City::create(['state' => 13, 'ibge_code' => '3154101', 'name' => "Recreio"]);
        City::create(['state' => 13, 'ibge_code' => '3154150', 'name' => "Reduto"]);
        City::create(['state' => 13, 'ibge_code' => '3154200', 'name' => "Resende Costa"]);
        City::create(['state' => 13, 'ibge_code' => '3154309', 'name' => "Resplendor"]);
        City::create(['state' => 13, 'ibge_code' => '3154408', 'name' => "Ressaquinha"]);
        City::create(['state' => 13, 'ibge_code' => '3154457', 'name' => "Riachinho"]);
        City::create(['state' => 13, 'ibge_code' => '3154507', 'name' => "Riacho dos Machados"]);
        City::create(['state' => 13, 'ibge_code' => '3154606', 'name' => "Ribeirão das Neves"]);
        City::create(['state' => 13, 'ibge_code' => '3154705', 'name' => "Ribeirão Vermelho"]);
        City::create(['state' => 13, 'ibge_code' => '3154804', 'name' => "Rio Acima"]);
        City::create(['state' => 13, 'ibge_code' => '3154903', 'name' => "Rio Casca"]);
        City::create(['state' => 13, 'ibge_code' => '3155108', 'name' => "Rio do Prado"]);
        City::create(['state' => 13, 'ibge_code' => '3155009', 'name' => "Rio Doce"]);
        City::create(['state' => 13, 'ibge_code' => '3155207', 'name' => "Rio Espera"]);
        City::create(['state' => 13, 'ibge_code' => '3155306', 'name' => "Rio Manso"]);
        City::create(['state' => 13, 'ibge_code' => '3155405', 'name' => "Rio Novo"]);
        City::create(['state' => 13, 'ibge_code' => '3155504', 'name' => "Rio Paranaíba"]);
        City::create(['state' => 13, 'ibge_code' => '3155603', 'name' => "Rio Pardo de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3155702', 'name' => "Rio Piracicaba"]);
        City::create(['state' => 13, 'ibge_code' => '3155801', 'name' => "Rio Pomba"]);
        City::create(['state' => 13, 'ibge_code' => '3155900', 'name' => "Rio Preto"]);
        City::create(['state' => 13, 'ibge_code' => '3156007', 'name' => "Rio Vermelho"]);
        City::create(['state' => 13, 'ibge_code' => '3156106', 'name' => "Ritápolis"]);
        City::create(['state' => 13, 'ibge_code' => '3156205', 'name' => "Rochedo de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3156304', 'name' => "Rodeiro"]);
        City::create(['state' => 13, 'ibge_code' => '3156403', 'name' => "Romaria"]);
        City::create(['state' => 13, 'ibge_code' => '3156452', 'name' => "Rosário da Limeira"]);
        City::create(['state' => 13, 'ibge_code' => '3156502', 'name' => "Rubelita"]);
        City::create(['state' => 13, 'ibge_code' => '3156601', 'name' => "Rubim"]);
        City::create(['state' => 13, 'ibge_code' => '3156700', 'name' => "Sabará"]);
        City::create(['state' => 13, 'ibge_code' => '3156809', 'name' => "Sabinópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3156908', 'name' => "Sacramento"]);
        City::create(['state' => 13, 'ibge_code' => '3157005', 'name' => "Salinas"]);
        City::create(['state' => 13, 'ibge_code' => '3157104', 'name' => "Salto da Divisa"]);
        City::create(['state' => 13, 'ibge_code' => '3157203', 'name' => "Santa Bárbara"]);
        City::create(['state' => 13, 'ibge_code' => '3157252', 'name' => "Santa Bárbara do Leste"]);
        City::create(['state' => 13, 'ibge_code' => '3157278', 'name' => "Santa Bárbara do Monte Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3157302', 'name' => "Santa Bárbara do Tugúrio"]);
        City::create(['state' => 13, 'ibge_code' => '3157336', 'name' => "Santa Cruz de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3157377', 'name' => "Santa Cruz de Salinas"]);
        City::create(['state' => 13, 'ibge_code' => '3157401', 'name' => "Santa Cruz do Escalvado"]);
        City::create(['state' => 13, 'ibge_code' => '3157500', 'name' => "Santa Efigênia de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3157609', 'name' => "Santa Fé de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3157658', 'name' => "Santa Helena de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3157708', 'name' => "Santa Juliana"]);
        City::create(['state' => 13, 'ibge_code' => '3157807', 'name' => "Santa Luzia"]);
        City::create(['state' => 13, 'ibge_code' => '3157906', 'name' => "Santa Margarida"]);
        City::create(['state' => 13, 'ibge_code' => '3158003', 'name' => "Santa Maria de Itabira"]);
        City::create(['state' => 13, 'ibge_code' => '3158102', 'name' => "Santa Maria do Salto"]);
        City::create(['state' => 13, 'ibge_code' => '3158201', 'name' => "Santa Maria do Suaçuí"]);
        City::create(['state' => 13, 'ibge_code' => '3159209', 'name' => "Santa Rita de Caldas"]);
        City::create(['state' => 13, 'ibge_code' => '3159407', 'name' => "Santa Rita de Ibitipoca"]);
        City::create(['state' => 13, 'ibge_code' => '3159308', 'name' => "Santa Rita de Jacutinga"]);
        City::create(['state' => 13, 'ibge_code' => '3159357', 'name' => "Santa Rita de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3159506', 'name' => "Santa Rita do Itueto"]);
        City::create(['state' => 13, 'ibge_code' => '3159605', 'name' => "Santa Rita do Sapucaí"]);
        City::create(['state' => 13, 'ibge_code' => '3159704', 'name' => "Santa Rosa da Serra"]);
        City::create(['state' => 13, 'ibge_code' => '3159803', 'name' => "Santa Vitória"]);
        City::create(['state' => 13, 'ibge_code' => '3158300', 'name' => "Santana da Vargem"]);
        City::create(['state' => 13, 'ibge_code' => '3158409', 'name' => "Santana de Cataguases"]);
        City::create(['state' => 13, 'ibge_code' => '3158508', 'name' => "Santana de Pirapama"]);
        City::create(['state' => 13, 'ibge_code' => '3158607', 'name' => "Santana do Deserto"]);
        City::create(['state' => 13, 'ibge_code' => '3158706', 'name' => "Santana do Garambéu"]);
        City::create(['state' => 13, 'ibge_code' => '3158805', 'name' => "Santana do Jacaré"]);
        City::create(['state' => 13, 'ibge_code' => '3158904', 'name' => "Santana do Manhuaçu"]);
        City::create(['state' => 13, 'ibge_code' => '3158953', 'name' => "Santana do Paraíso"]);
        City::create(['state' => 13, 'ibge_code' => '3159001', 'name' => "Santana do Riacho"]);
        City::create(['state' => 13, 'ibge_code' => '3159100', 'name' => "Santana dos Montes"]);
        City::create(['state' => 13, 'ibge_code' => '3159902', 'name' => "Santo Antônio do Amparo"]);
        City::create(['state' => 13, 'ibge_code' => '3160009', 'name' => "Santo Antônio do Aventureiro"]);
        City::create(['state' => 13, 'ibge_code' => '3160108', 'name' => "Santo Antônio do Grama"]);
        City::create(['state' => 13, 'ibge_code' => '3160207', 'name' => "Santo Antônio do Itambé"]);
        City::create(['state' => 13, 'ibge_code' => '3160306', 'name' => "Santo Antônio do Jacinto"]);
        City::create(['state' => 13, 'ibge_code' => '3160405', 'name' => "Santo Antônio do Monte"]);
        City::create(['state' => 13, 'ibge_code' => '3160454', 'name' => "Santo Antônio do Retiro"]);
        City::create(['state' => 13, 'ibge_code' => '3160504', 'name' => "Santo Antônio do Rio Abaixo"]);
        City::create(['state' => 13, 'ibge_code' => '3160603', 'name' => "Santo Hipólito"]);
        City::create(['state' => 13, 'ibge_code' => '3160702', 'name' => "Santos Dumont"]);
        City::create(['state' => 13, 'ibge_code' => '3160801', 'name' => "São Bento Abade"]);
        City::create(['state' => 13, 'ibge_code' => '3160900', 'name' => "São Brás do Suaçuí"]);
        City::create(['state' => 13, 'ibge_code' => '3160959', 'name' => "São Domingos das Dores"]);
        City::create(['state' => 13, 'ibge_code' => '3161007', 'name' => "São Domingos do Prata"]);
        City::create(['state' => 13, 'ibge_code' => '3161056', 'name' => "São Félix de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3161106', 'name' => "São Francisco"]);
        City::create(['state' => 13, 'ibge_code' => '3161205', 'name' => "São Francisco de Paula"]);
        City::create(['state' => 13, 'ibge_code' => '3161304', 'name' => "São Francisco de Sales"]);
        City::create(['state' => 13, 'ibge_code' => '3161403', 'name' => "São Francisco do Glória"]);
        City::create(['state' => 13, 'ibge_code' => '3161502', 'name' => "São Geraldo"]);
        City::create(['state' => 13, 'ibge_code' => '3161601', 'name' => "São Geraldo da Piedade"]);
        City::create(['state' => 13, 'ibge_code' => '3161650', 'name' => "São Geraldo do Baixio"]);
        City::create(['state' => 13, 'ibge_code' => '3161700', 'name' => "São Gonçalo do Abaeté"]);
        City::create(['state' => 13, 'ibge_code' => '3161809', 'name' => "São Gonçalo do Pará"]);
        City::create(['state' => 13, 'ibge_code' => '3161908', 'name' => "São Gonçalo do Rio Abaixo"]);
        City::create(['state' => 13, 'ibge_code' => '3125507', 'name' => "São Gonçalo do Rio Preto"]);
        City::create(['state' => 13, 'ibge_code' => '3162005', 'name' => "São Gonçalo do Sapucaí"]);
        City::create(['state' => 13, 'ibge_code' => '3162104', 'name' => "São Gotardo"]);
        City::create(['state' => 13, 'ibge_code' => '3162203', 'name' => "São João Batista do Glória"]);
        City::create(['state' => 13, 'ibge_code' => '3162252', 'name' => "São João da Lagoa"]);
        City::create(['state' => 13, 'ibge_code' => '3162302', 'name' => "São João da Mata"]);
        City::create(['state' => 13, 'ibge_code' => '3162401', 'name' => "São João da Ponte"]);
        City::create(['state' => 13, 'ibge_code' => '3162450', 'name' => "São João das Missões"]);
        City::create(['state' => 13, 'ibge_code' => '3162500', 'name' => "São João del Rei"]);
        City::create(['state' => 13, 'ibge_code' => '3162559', 'name' => "São João do Manhuaçu"]);
        City::create(['state' => 13, 'ibge_code' => '3162575', 'name' => "São João do Manteninha"]);
        City::create(['state' => 13, 'ibge_code' => '3162609', 'name' => "São João do Oriente"]);
        City::create(['state' => 13, 'ibge_code' => '3162658', 'name' => "São João do Pacuí"]);
        City::create(['state' => 13, 'ibge_code' => '3162708', 'name' => "São João do Paraíso"]);
        City::create(['state' => 13, 'ibge_code' => '3162807', 'name' => "São João Evangelista"]);
        City::create(['state' => 13, 'ibge_code' => '3162906', 'name' => "São João Nepomuceno"]);
        City::create(['state' => 13, 'ibge_code' => '3162922', 'name' => "São Joaquim de Bicas"]);
        City::create(['state' => 13, 'ibge_code' => '3162948', 'name' => "São José da Barra"]);
        City::create(['state' => 13, 'ibge_code' => '3162955', 'name' => "São José da Lapa"]);
        City::create(['state' => 13, 'ibge_code' => '3163003', 'name' => "São José da Safira"]);
        City::create(['state' => 13, 'ibge_code' => '3163102', 'name' => "São José da Varginha"]);
        City::create(['state' => 13, 'ibge_code' => '3163201', 'name' => "São José do Alegre"]);
        City::create(['state' => 13, 'ibge_code' => '3163300', 'name' => "São José do Divino"]);
        City::create(['state' => 13, 'ibge_code' => '3163409', 'name' => "São José do Goiabal"]);
        City::create(['state' => 13, 'ibge_code' => '3163508', 'name' => "São José do Jacuri"]);
        City::create(['state' => 13, 'ibge_code' => '3163607', 'name' => "São José do Mantimento"]);
        City::create(['state' => 13, 'ibge_code' => '3163706', 'name' => "São Lourenço"]);
        City::create(['state' => 13, 'ibge_code' => '3163805', 'name' => "São Miguel do Anta"]);
        City::create(['state' => 13, 'ibge_code' => '3163904', 'name' => "São Pedro da União"]);
        City::create(['state' => 13, 'ibge_code' => '3164100', 'name' => "São Pedro do Suaçuí"]);
        City::create(['state' => 13, 'ibge_code' => '3164001', 'name' => "São Pedro dos Ferros"]);
        City::create(['state' => 13, 'ibge_code' => '3164209', 'name' => "São Romão"]);
        City::create(['state' => 13, 'ibge_code' => '3164308', 'name' => "São Roque de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3164407', 'name' => "São Sebastião da Bela Vista"]);
        City::create(['state' => 13, 'ibge_code' => '3164431', 'name' => "São Sebastião da Vargem Alegre"]);
        City::create(['state' => 13, 'ibge_code' => '3164472', 'name' => "São Sebastião do Anta"]);
        City::create(['state' => 13, 'ibge_code' => '3164506', 'name' => "São Sebastião do Maranhão"]);
        City::create(['state' => 13, 'ibge_code' => '3164605', 'name' => "São Sebastião do Oeste"]);
        City::create(['state' => 13, 'ibge_code' => '3164704', 'name' => "São Sebastião do Paraíso"]);
        City::create(['state' => 13, 'ibge_code' => '3164803', 'name' => "São Sebastião do Rio Preto"]);
        City::create(['state' => 13, 'ibge_code' => '3164902', 'name' => "São Sebastião do Rio Verde"]);
        City::create(['state' => 13, 'ibge_code' => '3165206', 'name' => "São Thomé das Letras"]);
        City::create(['state' => 13, 'ibge_code' => '3165008', 'name' => "São Tiago"]);
        City::create(['state' => 13, 'ibge_code' => '3165107', 'name' => "São Tomás de Aquino"]);
        City::create(['state' => 13, 'ibge_code' => '3165305', 'name' => "São Vicente de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3165404', 'name' => "Sapucaí-Mirim"]);
        City::create(['state' => 13, 'ibge_code' => '3165503', 'name' => "Sardoá"]);
        City::create(['state' => 13, 'ibge_code' => '3165537', 'name' => "Sarzedo"]);
        City::create(['state' => 13, 'ibge_code' => '3165560', 'name' => "Sem-Peixe"]);
        City::create(['state' => 13, 'ibge_code' => '3165578', 'name' => "Senador Amaral"]);
        City::create(['state' => 13, 'ibge_code' => '3165602', 'name' => "Senador Cortes"]);
        City::create(['state' => 13, 'ibge_code' => '3165701', 'name' => "Senador Firmino"]);
        City::create(['state' => 13, 'ibge_code' => '3165800', 'name' => "Senador José Bento"]);
        City::create(['state' => 13, 'ibge_code' => '3165909', 'name' => "Senador Modestino Gonçalves"]);
        City::create(['state' => 13, 'ibge_code' => '3166006', 'name' => "Senhora de Oliveira"]);
        City::create(['state' => 13, 'ibge_code' => '3166105', 'name' => "Senhora do Porto"]);
        City::create(['state' => 13, 'ibge_code' => '3166204', 'name' => "Senhora dos Remédios"]);
        City::create(['state' => 13, 'ibge_code' => '3166303', 'name' => "Sericita"]);
        City::create(['state' => 13, 'ibge_code' => '3166402', 'name' => "Seritinga"]);
        City::create(['state' => 13, 'ibge_code' => '3166501', 'name' => "Serra Azul de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3166600', 'name' => "Serra da Saudade"]);
        City::create(['state' => 13, 'ibge_code' => '3166808', 'name' => "Serra do Salitre"]);
        City::create(['state' => 13, 'ibge_code' => '3166709', 'name' => "Serra dos Aimorés"]);
        City::create(['state' => 13, 'ibge_code' => '3166907', 'name' => "Serrania"]);
        City::create(['state' => 13, 'ibge_code' => '3166956', 'name' => "Serranópolis de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3167004', 'name' => "Serranos"]);
        City::create(['state' => 13, 'ibge_code' => '3167103', 'name' => "Serro"]);
        City::create(['state' => 13, 'ibge_code' => '3167202', 'name' => "Sete Lagoas"]);
        City::create(['state' => 13, 'ibge_code' => '3165552', 'name' => "Setubinha"]);
        City::create(['state' => 13, 'ibge_code' => '3167301', 'name' => "Silveirânia"]);
        City::create(['state' => 13, 'ibge_code' => '3167400', 'name' => "Silvianópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3167509', 'name' => "Simão Pereira"]);
        City::create(['state' => 13, 'ibge_code' => '3167608', 'name' => "Simonésia"]);
        City::create(['state' => 13, 'ibge_code' => '3167707', 'name' => "Sobrália"]);
        City::create(['state' => 13, 'ibge_code' => '3167806', 'name' => "Soledade de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3167905', 'name' => "Tabuleiro"]);
        City::create(['state' => 13, 'ibge_code' => '3168002', 'name' => "Taiobeiras"]);
        City::create(['state' => 13, 'ibge_code' => '3168051', 'name' => "Taparuba"]);
        City::create(['state' => 13, 'ibge_code' => '3168101', 'name' => "Tapira"]);
        City::create(['state' => 13, 'ibge_code' => '3168200', 'name' => "Tapiraí"]);
        City::create(['state' => 13, 'ibge_code' => '3168309', 'name' => "Taquaraçu de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3168408', 'name' => "Tarumirim"]);
        City::create(['state' => 13, 'ibge_code' => '3168507', 'name' => "Teixeiras"]);
        City::create(['state' => 13, 'ibge_code' => '3168606', 'name' => "Teófilo Otoni"]);
        City::create(['state' => 13, 'ibge_code' => '3168705', 'name' => "Timóteo"]);
        City::create(['state' => 13, 'ibge_code' => '3168804', 'name' => "Tiradentes"]);
        City::create(['state' => 13, 'ibge_code' => '3168903', 'name' => "Tiros"]);
        City::create(['state' => 13, 'ibge_code' => '3169000', 'name' => "Tocantins"]);
        City::create(['state' => 13, 'ibge_code' => '3169059', 'name' => "Tocos do Moji"]);
        City::create(['state' => 13, 'ibge_code' => '3169109', 'name' => "Toledo"]);
        City::create(['state' => 13, 'ibge_code' => '3169208', 'name' => "Tombos"]);
        City::create(['state' => 13, 'ibge_code' => '3169307', 'name' => "Três Corações"]);
        City::create(['state' => 13, 'ibge_code' => '3169356', 'name' => "Três Marias"]);
        City::create(['state' => 13, 'ibge_code' => '3169406', 'name' => "Três Pontas"]);
        City::create(['state' => 13, 'ibge_code' => '3169505', 'name' => "Tumiritinga"]);
        City::create(['state' => 13, 'ibge_code' => '3169604', 'name' => "Tupaciguara"]);
        City::create(['state' => 13, 'ibge_code' => '3169703', 'name' => "Turmalina"]);
        City::create(['state' => 13, 'ibge_code' => '3169802', 'name' => "Turvolândia"]);
        City::create(['state' => 13, 'ibge_code' => '3169901', 'name' => "Ubá"]);
        City::create(['state' => 13, 'ibge_code' => '3170008', 'name' => "Ubaí"]);
        City::create(['state' => 13, 'ibge_code' => '3170057', 'name' => "Ubaporanga"]);
        City::create(['state' => 13, 'ibge_code' => '3170107', 'name' => "Uberaba"]);
        City::create(['state' => 13, 'ibge_code' => '3170206', 'name' => "Uberlândia"]);
        City::create(['state' => 13, 'ibge_code' => '3170305', 'name' => "Umburatiba"]);
        City::create(['state' => 13, 'ibge_code' => '3170404', 'name' => "Unaí"]);
        City::create(['state' => 13, 'ibge_code' => '3170438', 'name' => "União de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3170479', 'name' => "Uruana de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3170503', 'name' => "Urucânia"]);
        City::create(['state' => 13, 'ibge_code' => '3170529', 'name' => "Urucuia"]);
        City::create(['state' => 13, 'ibge_code' => '3170578', 'name' => "Vargem Alegre"]);
        City::create(['state' => 13, 'ibge_code' => '3170602', 'name' => "Vargem Bonita"]);
        City::create(['state' => 13, 'ibge_code' => '3170651', 'name' => "Vargem Grande do Rio Pardo"]);
        City::create(['state' => 13, 'ibge_code' => '3170701', 'name' => "Varginha"]);
        City::create(['state' => 13, 'ibge_code' => '3170750', 'name' => "Varjão de Minas"]);
        City::create(['state' => 13, 'ibge_code' => '3170800', 'name' => "Várzea da Palma"]);
        City::create(['state' => 13, 'ibge_code' => '3170909', 'name' => "Varzelândia"]);
        City::create(['state' => 13, 'ibge_code' => '3171006', 'name' => "Vazante"]);
        City::create(['state' => 13, 'ibge_code' => '3171030', 'name' => "Verdelândia"]);
        City::create(['state' => 13, 'ibge_code' => '3171071', 'name' => "Veredinha"]);
        City::create(['state' => 13, 'ibge_code' => '3171105', 'name' => "Veríssimo"]);
        City::create(['state' => 13, 'ibge_code' => '3171154', 'name' => "Vermelho Novo"]);
        City::create(['state' => 13, 'ibge_code' => '3171204', 'name' => "Vespasiano"]);
        City::create(['state' => 13, 'ibge_code' => '3171303', 'name' => "Viçosa"]);
        City::create(['state' => 13, 'ibge_code' => '3171402', 'name' => "Vieiras"]);
        City::create(['state' => 13, 'ibge_code' => '3171600', 'name' => "Virgem da Lapa"]);
        City::create(['state' => 13, 'ibge_code' => '3171709', 'name' => "Virgínia"]);
        City::create(['state' => 13, 'ibge_code' => '3171808', 'name' => "Virginópolis"]);
        City::create(['state' => 13, 'ibge_code' => '3171907', 'name' => "Virgolândia"]);
        City::create(['state' => 13, 'ibge_code' => '3172004', 'name' => "Visconde do Rio Branco"]);
        City::create(['state' => 13, 'ibge_code' => '3172103', 'name' => "Volta Grande"]);
        City::create(['state' => 13, 'ibge_code' => '3172202', 'name' => "Wenceslau Braz"]);

        City::create(['state' => 14, 'ibge_code' => '1500107', 'name' => "Abaetetuba"]);
        City::create(['state' => 14, 'ibge_code' => '1500131', 'name' => "Abel Figueiredo"]);
        City::create(['state' => 14, 'ibge_code' => '1500206', 'name' => "Acará"]);
        City::create(['state' => 14, 'ibge_code' => '1500305', 'name' => "Afuá"]);
        City::create(['state' => 14, 'ibge_code' => '1500347', 'name' => "Água Azul do Norte"]);
        City::create(['state' => 14, 'ibge_code' => '1500404', 'name' => "Alenquer"]);
        City::create(['state' => 14, 'ibge_code' => '1500503', 'name' => "Almeirim"]);
        City::create(['state' => 14, 'ibge_code' => '1500602', 'name' => "Altamira"]);
        City::create(['state' => 14, 'ibge_code' => '1500701', 'name' => "Anajás"]);
        City::create(['state' => 14, 'ibge_code' => '1500800', 'name' => "Ananindeua"]);
        City::create(['state' => 14, 'ibge_code' => '1500859', 'name' => "Anapu"]);
        City::create(['state' => 14, 'ibge_code' => '1500909', 'name' => "Augusto Corrêa"]);
        City::create(['state' => 14, 'ibge_code' => '1500958', 'name' => "Aurora do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1501006', 'name' => "Aveiro"]);
        City::create(['state' => 14, 'ibge_code' => '1501105', 'name' => "Bagre"]);
        City::create(['state' => 14, 'ibge_code' => '1501204', 'name' => "Baião"]);
        City::create(['state' => 14, 'ibge_code' => '1501253', 'name' => "Bannach"]);
        City::create(['state' => 14, 'ibge_code' => '1501303', 'name' => "Barcarena"]);
        City::create(['state' => 14, 'ibge_code' => '1501402', 'name' => "Belém"]);
        City::create(['state' => 14, 'ibge_code' => '1501451', 'name' => "Belterra"]);
        City::create(['state' => 14, 'ibge_code' => '1501501', 'name' => "Benevides"]);
        City::create(['state' => 14, 'ibge_code' => '1501576', 'name' => "Bom Jesus do Tocantins"]);
        City::create(['state' => 14, 'ibge_code' => '1501600', 'name' => "Bonito"]);
        City::create(['state' => 14, 'ibge_code' => '1501709', 'name' => "Bragança"]);
        City::create(['state' => 14, 'ibge_code' => '1501725', 'name' => "Brasil Novo"]);
        City::create(['state' => 14, 'ibge_code' => '1501758', 'name' => "Brejo Grande do Araguaia"]);
        City::create(['state' => 14, 'ibge_code' => '1501782', 'name' => "Breu Branco"]);
        City::create(['state' => 14, 'ibge_code' => '1501808', 'name' => "Breves"]);
        City::create(['state' => 14, 'ibge_code' => '1501907', 'name' => "Bujaru"]);
        City::create(['state' => 14, 'ibge_code' => '1502004', 'name' => "Cachoeira do Arari"]);
        City::create(['state' => 14, 'ibge_code' => '1501956', 'name' => "Cachoeira do Piriá"]);
        City::create(['state' => 14, 'ibge_code' => '1502103', 'name' => "Cametá"]);
        City::create(['state' => 14, 'ibge_code' => '1502152', 'name' => "Canaã dos Carajás"]);
        City::create(['state' => 14, 'ibge_code' => '1502202', 'name' => "Capanema"]);
        City::create(['state' => 14, 'ibge_code' => '1502301', 'name' => "Capitão Poço"]);
        City::create(['state' => 14, 'ibge_code' => '1502400', 'name' => "Castanhal"]);
        City::create(['state' => 14, 'ibge_code' => '1502509', 'name' => "Chaves"]);
        City::create(['state' => 14, 'ibge_code' => '1502608', 'name' => "Colares"]);
        City::create(['state' => 14, 'ibge_code' => '1502707', 'name' => "Conceição do Araguaia"]);
        City::create(['state' => 14, 'ibge_code' => '1502756', 'name' => "Concórdia do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1502764', 'name' => "Cumaru do Norte"]);
        City::create(['state' => 14, 'ibge_code' => '1502772', 'name' => "Curionópolis"]);
        City::create(['state' => 14, 'ibge_code' => '1502806', 'name' => "Curralinho"]);
        City::create(['state' => 14, 'ibge_code' => '1502855', 'name' => "Curuá"]);
        City::create(['state' => 14, 'ibge_code' => '1502905', 'name' => "Curuçá"]);
        City::create(['state' => 14, 'ibge_code' => '1502939', 'name' => "Dom Eliseu"]);
        City::create(['state' => 14, 'ibge_code' => '1502954', 'name' => "Eldorado dos Carajás"]);
        City::create(['state' => 14, 'ibge_code' => '1503002', 'name' => "Faro"]);
        City::create(['state' => 14, 'ibge_code' => '1503044', 'name' => "Floresta do Araguaia"]);
        City::create(['state' => 14, 'ibge_code' => '1503077', 'name' => "Garrafão do Norte"]);
        City::create(['state' => 14, 'ibge_code' => '1503093', 'name' => "Goianésia do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1503101', 'name' => "Gurupá"]);
        City::create(['state' => 14, 'ibge_code' => '1503200', 'name' => "Igarapé-Açu"]);
        City::create(['state' => 14, 'ibge_code' => '1503309', 'name' => "Igarapé-Miri"]);
        City::create(['state' => 14, 'ibge_code' => '1503408', 'name' => "Inhangapi"]);
        City::create(['state' => 14, 'ibge_code' => '1503457', 'name' => "Ipixuna do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1503507', 'name' => "Irituia"]);
        City::create(['state' => 14, 'ibge_code' => '1503606', 'name' => "Itaituba"]);
        City::create(['state' => 14, 'ibge_code' => '1503705', 'name' => "Itupiranga"]);
        City::create(['state' => 14, 'ibge_code' => '1503754', 'name' => "Jacareacanga"]);
        City::create(['state' => 14, 'ibge_code' => '1503804', 'name' => "Jacundá"]);
        City::create(['state' => 14, 'ibge_code' => '1503903', 'name' => "Juruti"]);
        City::create(['state' => 14, 'ibge_code' => '1504000', 'name' => "Limoeiro do Ajuru"]);
        City::create(['state' => 14, 'ibge_code' => '1504059', 'name' => "Mãe do Rio"]);
        City::create(['state' => 14, 'ibge_code' => '1504109', 'name' => "Magalhães Barata"]);
        City::create(['state' => 14, 'ibge_code' => '1504208', 'name' => "Marabá"]);
        City::create(['state' => 14, 'ibge_code' => '1504307', 'name' => "Maracanã"]);
        City::create(['state' => 14, 'ibge_code' => '1504406', 'name' => "Marapanim"]);
        City::create(['state' => 14, 'ibge_code' => '1504422', 'name' => "Marituba"]);
        City::create(['state' => 14, 'ibge_code' => '1504455', 'name' => "Medicilândia"]);
        City::create(['state' => 14, 'ibge_code' => '1504505', 'name' => "Melgaço"]);
        City::create(['state' => 14, 'ibge_code' => '1504604', 'name' => "Mocajuba"]);
        City::create(['state' => 14, 'ibge_code' => '1504703', 'name' => "Moju"]);
        City::create(['state' => 14, 'ibge_code' => '1504802', 'name' => "Monte Alegre"]);
        City::create(['state' => 14, 'ibge_code' => '1504901', 'name' => "Muaná"]);
        City::create(['state' => 14, 'ibge_code' => '1504950', 'name' => "Nova Esperança do Piriá"]);
        City::create(['state' => 14, 'ibge_code' => '1504976', 'name' => "Nova Ipixuna"]);
        City::create(['state' => 14, 'ibge_code' => '1505007', 'name' => "Nova Timboteua"]);
        City::create(['state' => 14, 'ibge_code' => '1505031', 'name' => "Novo Progresso"]);
        City::create(['state' => 14, 'ibge_code' => '1505064', 'name' => "Novo Repartimento"]);
        City::create(['state' => 14, 'ibge_code' => '1505106', 'name' => "Óbidos"]);
        City::create(['state' => 14, 'ibge_code' => '1505205', 'name' => "Oeiras do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1505304', 'name' => "Oriximiná"]);
        City::create(['state' => 14, 'ibge_code' => '1505403', 'name' => "Ourém"]);
        City::create(['state' => 14, 'ibge_code' => '1505437', 'name' => "Ourilândia do Norte"]);
        City::create(['state' => 14, 'ibge_code' => '1505486', 'name' => "Pacajá"]);
        City::create(['state' => 14, 'ibge_code' => '1505494', 'name' => "Palestina do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1505502', 'name' => "Paragominas"]);
        City::create(['state' => 14, 'ibge_code' => '1505536', 'name' => "Parauapebas"]);
        City::create(['state' => 14, 'ibge_code' => '1505551', 'name' => "Pau D'Arco"]);
        City::create(['state' => 14, 'ibge_code' => '1505601', 'name' => "Peixe-Boi"]);
        City::create(['state' => 14, 'ibge_code' => '1505635', 'name' => "Piçarra"]);
        City::create(['state' => 14, 'ibge_code' => '1505650', 'name' => "Placas"]);
        City::create(['state' => 14, 'ibge_code' => '1505700', 'name' => "Ponta de Pedras"]);
        City::create(['state' => 14, 'ibge_code' => '1505809', 'name' => "Portel"]);
        City::create(['state' => 14, 'ibge_code' => '1505908', 'name' => "Porto de Moz"]);
        City::create(['state' => 14, 'ibge_code' => '1506005', 'name' => "Prainha"]);
        City::create(['state' => 14, 'ibge_code' => '1506104', 'name' => "Primavera"]);
        City::create(['state' => 14, 'ibge_code' => '1506112', 'name' => "Quatipuru"]);
        City::create(['state' => 14, 'ibge_code' => '1506138', 'name' => "Redenção"]);
        City::create(['state' => 14, 'ibge_code' => '1506161', 'name' => "Rio Maria"]);
        City::create(['state' => 14, 'ibge_code' => '1506187', 'name' => "Rondon do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1506195', 'name' => "Rurópolis"]);
        City::create(['state' => 14, 'ibge_code' => '1506203', 'name' => "Salinópolis"]);
        City::create(['state' => 14, 'ibge_code' => '1506302', 'name' => "Salvaterra"]);
        City::create(['state' => 14, 'ibge_code' => '1506351', 'name' => "Santa Bárbara do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1506401', 'name' => "Santa Cruz do Arari"]);
        City::create(['state' => 14, 'ibge_code' => '1506500', 'name' => "Santa Isabel do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1506559', 'name' => "Santa Luzia do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1506583', 'name' => "Santa Maria das Barreiras"]);
        City::create(['state' => 14, 'ibge_code' => '1506609', 'name' => "Santa Maria do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1506708', 'name' => "Santana do Araguaia"]);
        City::create(['state' => 14, 'ibge_code' => '1506807', 'name' => "Santarém"]);
        City::create(['state' => 14, 'ibge_code' => '1506906', 'name' => "Santarém Novo"]);
        City::create(['state' => 14, 'ibge_code' => '1507003', 'name' => "Santo Antônio do Tauá"]);
        City::create(['state' => 14, 'ibge_code' => '1507102', 'name' => "São Caetano de Odivelas"]);
        City::create(['state' => 14, 'ibge_code' => '1507151', 'name' => "São Domingos do Araguaia"]);
        City::create(['state' => 14, 'ibge_code' => '1507201', 'name' => "São Domingos do Capim"]);
        City::create(['state' => 14, 'ibge_code' => '1507300', 'name' => "São Félix do Xingu"]);
        City::create(['state' => 14, 'ibge_code' => '1507409', 'name' => "São Francisco do Pará"]);
        City::create(['state' => 14, 'ibge_code' => '1507458', 'name' => "São Geraldo do Araguaia"]);
        City::create(['state' => 14, 'ibge_code' => '1507466', 'name' => "São João da Ponta"]);
        City::create(['state' => 14, 'ibge_code' => '1507474', 'name' => "São João de Pirabas"]);
        City::create(['state' => 14, 'ibge_code' => '1507508', 'name' => "São João do Araguaia"]);
        City::create(['state' => 14, 'ibge_code' => '1507607', 'name' => "São Miguel do Guamá"]);
        City::create(['state' => 14, 'ibge_code' => '1507706', 'name' => "São Sebastião da Boa Vista"]);
        City::create(['state' => 14, 'ibge_code' => '1507755', 'name' => "Sapucaia"]);
        City::create(['state' => 14, 'ibge_code' => '1507805', 'name' => "Senador José Porfírio"]);
        City::create(['state' => 14, 'ibge_code' => '1507904', 'name' => "Soure"]);
        City::create(['state' => 14, 'ibge_code' => '1507953', 'name' => "Tailândia"]);
        City::create(['state' => 14, 'ibge_code' => '1507961', 'name' => "Terra Alta"]);
        City::create(['state' => 14, 'ibge_code' => '1507979', 'name' => "Terra Santa"]);
        City::create(['state' => 14, 'ibge_code' => '1508001', 'name' => "Tomé-Açu"]);
        City::create(['state' => 14, 'ibge_code' => '1508035', 'name' => "Tracuateua"]);
        City::create(['state' => 14, 'ibge_code' => '1508050', 'name' => "Trairão"]);
        City::create(['state' => 14, 'ibge_code' => '1508084', 'name' => "Tucumã"]);
        City::create(['state' => 14, 'ibge_code' => '1508100', 'name' => "Tucuruí"]);
        City::create(['state' => 14, 'ibge_code' => '1508126', 'name' => "Ulianópolis"]);
        City::create(['state' => 14, 'ibge_code' => '1508159', 'name' => "Uruará"]);
        City::create(['state' => 14, 'ibge_code' => '1508209', 'name' => "Vigia"]);
        City::create(['state' => 14, 'ibge_code' => '1508308', 'name' => "Viseu"]);
        City::create(['state' => 14, 'ibge_code' => '1508357', 'name' => "Vitória do Xingu"]);
        City::create(['state' => 14, 'ibge_code' => '1508407', 'name' => "Xinguara"]);

        City::create(['state' => 15, 'ibge_code' => '2500106', 'name' => "Água Branca"]);
        City::create(['state' => 15, 'ibge_code' => '2500205', 'name' => "Aguiar"]);
        City::create(['state' => 15, 'ibge_code' => '2500304', 'name' => "Alagoa Grande"]);
        City::create(['state' => 15, 'ibge_code' => '2500403', 'name' => "Alagoa Nova"]);
        City::create(['state' => 15, 'ibge_code' => '2500502', 'name' => "Alagoinha"]);
        City::create(['state' => 15, 'ibge_code' => '2500536', 'name' => "Alcantil"]);
        City::create(['state' => 15, 'ibge_code' => '2500577', 'name' => "Algodão de Jandaíra"]);
        City::create(['state' => 15, 'ibge_code' => '2500601', 'name' => "Alhandra"]);
        City::create(['state' => 15, 'ibge_code' => '2500734', 'name' => "Amparo"]);
        City::create(['state' => 15, 'ibge_code' => '2500775', 'name' => "Aparecida"]);
        City::create(['state' => 15, 'ibge_code' => '2500809', 'name' => "Araçagi"]);
        City::create(['state' => 15, 'ibge_code' => '2500908', 'name' => "Arara"]);
        City::create(['state' => 15, 'ibge_code' => '2501005', 'name' => "Araruna"]);
        City::create(['state' => 15, 'ibge_code' => '2501104', 'name' => "Areia"]);
        City::create(['state' => 15, 'ibge_code' => '2501153', 'name' => "Areia de Baraúnas"]);
        City::create(['state' => 15, 'ibge_code' => '2501203', 'name' => "Areial"]);
        City::create(['state' => 15, 'ibge_code' => '2501302', 'name' => "Aroeiras"]);
        City::create(['state' => 15, 'ibge_code' => '2501351', 'name' => "Assunção"]);
        City::create(['state' => 15, 'ibge_code' => '2501401', 'name' => "Baía da Traição"]);
        City::create(['state' => 15, 'ibge_code' => '2501500', 'name' => "Bananeiras"]);
        City::create(['state' => 15, 'ibge_code' => '2501534', 'name' => "Baraúna"]);
        City::create(['state' => 15, 'ibge_code' => '2501609', 'name' => "Barra de Santa Rosa"]);
        City::create(['state' => 15, 'ibge_code' => '2501575', 'name' => "Barra de Santana"]);
        City::create(['state' => 15, 'ibge_code' => '2501708', 'name' => "Barra de São Miguel"]);
        City::create(['state' => 15, 'ibge_code' => '2501807', 'name' => "Bayeux"]);
        City::create(['state' => 15, 'ibge_code' => '2501906', 'name' => "Belém"]);
        City::create(['state' => 15, 'ibge_code' => '2502003', 'name' => "Belém do Brejo do Cruz"]);
        City::create(['state' => 15, 'ibge_code' => '2502052', 'name' => "Bernardino Batista"]);
        City::create(['state' => 15, 'ibge_code' => '2502102', 'name' => "Boa Ventura"]);
        City::create(['state' => 15, 'ibge_code' => '2502151', 'name' => "Boa Vista"]);
        City::create(['state' => 15, 'ibge_code' => '2502201', 'name' => "Bom Jesus"]);
        City::create(['state' => 15, 'ibge_code' => '2502300', 'name' => "Bom Sucesso"]);
        City::create(['state' => 15, 'ibge_code' => '2502409', 'name' => "Bonito de Santa Fé"]);
        City::create(['state' => 15, 'ibge_code' => '2502508', 'name' => "Boqueirão"]);
        City::create(['state' => 15, 'ibge_code' => '2502706', 'name' => "Borborema"]);
        City::create(['state' => 15, 'ibge_code' => '2502805', 'name' => "Brejo do Cruz"]);
        City::create(['state' => 15, 'ibge_code' => '2502904', 'name' => "Brejo dos Santos"]);
        City::create(['state' => 15, 'ibge_code' => '2503001', 'name' => "Caaporã"]);
        City::create(['state' => 15, 'ibge_code' => '2503100', 'name' => "Cabaceiras"]);
        City::create(['state' => 15, 'ibge_code' => '2503209', 'name' => "Cabedelo"]);
        City::create(['state' => 15, 'ibge_code' => '2503308', 'name' => "Cachoeira dos Índios"]);
        City::create(['state' => 15, 'ibge_code' => '2503407', 'name' => "Cacimba de Areia"]);
        City::create(['state' => 15, 'ibge_code' => '2503506', 'name' => "Cacimba de Dentro"]);
        City::create(['state' => 15, 'ibge_code' => '2503555', 'name' => "Cacimbas"]);
        City::create(['state' => 15, 'ibge_code' => '2503605', 'name' => "Caiçara"]);
        City::create(['state' => 15, 'ibge_code' => '2503704', 'name' => "Cajazeiras"]);
        City::create(['state' => 15, 'ibge_code' => '2503753', 'name' => "Cajazeirinhas"]);
        City::create(['state' => 15, 'ibge_code' => '2503803', 'name' => "Caldas Brandão"]);
        City::create(['state' => 15, 'ibge_code' => '2503902', 'name' => "Camalaú"]);
        City::create(['state' => 15, 'ibge_code' => '2504009', 'name' => "Campina Grande"]);
        City::create(['state' => 15, 'ibge_code' => '2516409', 'name' => "Tacima"]);
        City::create(['state' => 15, 'ibge_code' => '2504033', 'name' => "Capim"]);
        City::create(['state' => 15, 'ibge_code' => '2504074', 'name' => "Caraúbas"]);
        City::create(['state' => 15, 'ibge_code' => '2504108', 'name' => "Carrapateira"]);
        City::create(['state' => 15, 'ibge_code' => '2504157', 'name' => "Casserengue"]);
        City::create(['state' => 15, 'ibge_code' => '2504207', 'name' => "Catingueira"]);
        City::create(['state' => 15, 'ibge_code' => '2504306', 'name' => "Catolé do Rocha"]);
        City::create(['state' => 15, 'ibge_code' => '2504355', 'name' => "Caturité"]);
        City::create(['state' => 15, 'ibge_code' => '2504405', 'name' => "Conceição"]);
        City::create(['state' => 15, 'ibge_code' => '2504504', 'name' => "Condado"]);
        City::create(['state' => 15, 'ibge_code' => '2504603', 'name' => "Conde"]);
        City::create(['state' => 15, 'ibge_code' => '2504702', 'name' => "Congo"]);
        City::create(['state' => 15, 'ibge_code' => '2504801', 'name' => "Coremas"]);
        City::create(['state' => 15, 'ibge_code' => '2504850', 'name' => "Coxixola"]);
        City::create(['state' => 15, 'ibge_code' => '2504900', 'name' => "Cruz do Espírito Santo"]);
        City::create(['state' => 15, 'ibge_code' => '2505006', 'name' => "Cubati"]);
        City::create(['state' => 15, 'ibge_code' => '2505105', 'name' => "Cuité"]);
        City::create(['state' => 15, 'ibge_code' => '2505238', 'name' => "Cuité de Mamanguape"]);
        City::create(['state' => 15, 'ibge_code' => '2505204', 'name' => "Cuitegi"]);
        City::create(['state' => 15, 'ibge_code' => '2505279', 'name' => "Curral de Cima"]);
        City::create(['state' => 15, 'ibge_code' => '2505303', 'name' => "Curral Velho"]);
        City::create(['state' => 15, 'ibge_code' => '2505352', 'name' => "Damião"]);
        City::create(['state' => 15, 'ibge_code' => '2505402', 'name' => "Desterro"]);
        City::create(['state' => 15, 'ibge_code' => '2505600', 'name' => "Diamante"]);
        City::create(['state' => 15, 'ibge_code' => '2505709', 'name' => "Dona Inês"]);
        City::create(['state' => 15, 'ibge_code' => '2505808', 'name' => "Duas Estradas"]);
        City::create(['state' => 15, 'ibge_code' => '2505907', 'name' => "Emas"]);
        City::create(['state' => 15, 'ibge_code' => '2506004', 'name' => "Esperança"]);
        City::create(['state' => 15, 'ibge_code' => '2506103', 'name' => "Fagundes"]);
        City::create(['state' => 15, 'ibge_code' => '2506202', 'name' => "Frei Martinho"]);
        City::create(['state' => 15, 'ibge_code' => '2506251', 'name' => "Gado Bravo"]);
        City::create(['state' => 15, 'ibge_code' => '2506301', 'name' => "Guarabira"]);
        City::create(['state' => 15, 'ibge_code' => '2506400', 'name' => "Gurinhém"]);
        City::create(['state' => 15, 'ibge_code' => '2506509', 'name' => "Gurjão"]);
        City::create(['state' => 15, 'ibge_code' => '2506608', 'name' => "Ibiara"]);
        City::create(['state' => 15, 'ibge_code' => '2502607', 'name' => "Igaracy"]);
        City::create(['state' => 15, 'ibge_code' => '2506707', 'name' => "Imaculada"]);
        City::create(['state' => 15, 'ibge_code' => '2506806', 'name' => "Ingá"]);
        City::create(['state' => 15, 'ibge_code' => '2506905', 'name' => "Itabaiana"]);
        City::create(['state' => 15, 'ibge_code' => '2507002', 'name' => "Itaporanga"]);
        City::create(['state' => 15, 'ibge_code' => '2507101', 'name' => "Itapororoca"]);
        City::create(['state' => 15, 'ibge_code' => '2507200', 'name' => "Itatuba"]);
        City::create(['state' => 15, 'ibge_code' => '2507309', 'name' => "Jacaraú"]);
        City::create(['state' => 15, 'ibge_code' => '2507408', 'name' => "Jericó"]);
        City::create(['state' => 15, 'ibge_code' => '2507507', 'name' => "João Pessoa"]);
        City::create(['state' => 15, 'ibge_code' => '2507606', 'name' => "Juarez Távora"]);
        City::create(['state' => 15, 'ibge_code' => '2507705', 'name' => "Juazeirinho"]);
        City::create(['state' => 15, 'ibge_code' => '2507804', 'name' => "Junco do Seridó"]);
        City::create(['state' => 15, 'ibge_code' => '2507903', 'name' => "Juripiranga"]);
        City::create(['state' => 15, 'ibge_code' => '2508000', 'name' => "Juru"]);
        City::create(['state' => 15, 'ibge_code' => '2508109', 'name' => "Lagoa"]);
        City::create(['state' => 15, 'ibge_code' => '2508208', 'name' => "Lagoa de Dentro"]);
        City::create(['state' => 15, 'ibge_code' => '2508307', 'name' => "Lagoa Seca"]);
        City::create(['state' => 15, 'ibge_code' => '2508406', 'name' => "Lastro"]);
        City::create(['state' => 15, 'ibge_code' => '2508505', 'name' => "Livramento"]);
        City::create(['state' => 15, 'ibge_code' => '2508554', 'name' => "Logradouro"]);
        City::create(['state' => 15, 'ibge_code' => '2508604', 'name' => "Lucena"]);
        City::create(['state' => 15, 'ibge_code' => '2508703', 'name' => "Mãe d'Água"]);
        City::create(['state' => 15, 'ibge_code' => '2508802', 'name' => "Malta"]);
        City::create(['state' => 15, 'ibge_code' => '2508901', 'name' => "Mamanguape"]);
        City::create(['state' => 15, 'ibge_code' => '2509008', 'name' => "Manaíra"]);
        City::create(['state' => 15, 'ibge_code' => '2509057', 'name' => "Marcação"]);
        City::create(['state' => 15, 'ibge_code' => '2509107', 'name' => "Mari"]);
        City::create(['state' => 15, 'ibge_code' => '2509156', 'name' => "Marizópolis"]);
        City::create(['state' => 15, 'ibge_code' => '2509206', 'name' => "Massaranduba"]);
        City::create(['state' => 15, 'ibge_code' => '2509305', 'name' => "Mataraca"]);
        City::create(['state' => 15, 'ibge_code' => '2509339', 'name' => "Matinhas"]);
        City::create(['state' => 15, 'ibge_code' => '2509370', 'name' => "Mato Grosso"]);
        City::create(['state' => 15, 'ibge_code' => '2509396', 'name' => "Maturéia"]);
        City::create(['state' => 15, 'ibge_code' => '2509404', 'name' => "Mogeiro"]);
        City::create(['state' => 15, 'ibge_code' => '2509503', 'name' => "Montadas"]);
        City::create(['state' => 15, 'ibge_code' => '2509602', 'name' => "Monte Horebe"]);
        City::create(['state' => 15, 'ibge_code' => '2509701', 'name' => "Monteiro"]);
        City::create(['state' => 15, 'ibge_code' => '2509800', 'name' => "Mulungu"]);
        City::create(['state' => 15, 'ibge_code' => '2509909', 'name' => "Natuba"]);
        City::create(['state' => 15, 'ibge_code' => '2510006', 'name' => "Nazarezinho"]);
        City::create(['state' => 15, 'ibge_code' => '2510105', 'name' => "Nova Floresta"]);
        City::create(['state' => 15, 'ibge_code' => '2510204', 'name' => "Nova Olinda"]);
        City::create(['state' => 15, 'ibge_code' => '2510303', 'name' => "Nova Palmeira"]);
        City::create(['state' => 15, 'ibge_code' => '2510402', 'name' => "Olho d'Água"]);
        City::create(['state' => 15, 'ibge_code' => '2510501', 'name' => "Olivedos"]);
        City::create(['state' => 15, 'ibge_code' => '2510600', 'name' => "Ouro Velho"]);
        City::create(['state' => 15, 'ibge_code' => '2510659', 'name' => "Parari"]);
        City::create(['state' => 15, 'ibge_code' => '2510709', 'name' => "Passagem"]);
        City::create(['state' => 15, 'ibge_code' => '2510808', 'name' => "Patos"]);
        City::create(['state' => 15, 'ibge_code' => '2510907', 'name' => "Paulista"]);
        City::create(['state' => 15, 'ibge_code' => '2511004', 'name' => "Pedra Branca"]);
        City::create(['state' => 15, 'ibge_code' => '2511103', 'name' => "Pedra Lavrada"]);
        City::create(['state' => 15, 'ibge_code' => '2511202', 'name' => "Pedras de Fogo"]);
        City::create(['state' => 15, 'ibge_code' => '2512721', 'name' => "Pedro Régis"]);
        City::create(['state' => 15, 'ibge_code' => '2511301', 'name' => "Piancó"]);
        City::create(['state' => 15, 'ibge_code' => '2511400', 'name' => "Picuí"]);
        City::create(['state' => 15, 'ibge_code' => '2511509', 'name' => "Pilar"]);
        City::create(['state' => 15, 'ibge_code' => '2511608', 'name' => "Pilões"]);
        City::create(['state' => 15, 'ibge_code' => '2511707', 'name' => "Pilõezinhos"]);
        City::create(['state' => 15, 'ibge_code' => '2511806', 'name' => "Pirpirituba"]);
        City::create(['state' => 15, 'ibge_code' => '2511905', 'name' => "Pitimbu"]);
        City::create(['state' => 15, 'ibge_code' => '2512002', 'name' => "Pocinhos"]);
        City::create(['state' => 15, 'ibge_code' => '2512036', 'name' => "Poço Dantas"]);
        City::create(['state' => 15, 'ibge_code' => '2512077', 'name' => "Poço de José de Moura"]);
        City::create(['state' => 15, 'ibge_code' => '2512101', 'name' => "Pombal"]);
        City::create(['state' => 15, 'ibge_code' => '2512200', 'name' => "Prata"]);
        City::create(['state' => 15, 'ibge_code' => '2512309', 'name' => "Princesa Isabel"]);
        City::create(['state' => 15, 'ibge_code' => '2512408', 'name' => "Puxinanã"]);
        City::create(['state' => 15, 'ibge_code' => '2512507', 'name' => "Queimadas"]);
        City::create(['state' => 15, 'ibge_code' => '2512606', 'name' => "Quixabá"]);
        City::create(['state' => 15, 'ibge_code' => '2512705', 'name' => "Remígio"]);
        City::create(['state' => 15, 'ibge_code' => '2512747', 'name' => "Riachão"]);
        City::create(['state' => 15, 'ibge_code' => '2512754', 'name' => "Riachão do Bacamarte"]);
        City::create(['state' => 15, 'ibge_code' => '2512762', 'name' => "Riachão do Poço"]);
        City::create(['state' => 15, 'ibge_code' => '2512788', 'name' => "Riacho de Santo Antônio"]);
        City::create(['state' => 15, 'ibge_code' => '2512804', 'name' => "Riacho dos Cavalos"]);
        City::create(['state' => 15, 'ibge_code' => '2512903', 'name' => "Rio Tinto"]);
        City::create(['state' => 15, 'ibge_code' => '2513000', 'name' => "Salgadinho"]);
        City::create(['state' => 15, 'ibge_code' => '2513109', 'name' => "Salgado de São Félix"]);
        City::create(['state' => 15, 'ibge_code' => '2513158', 'name' => "Santa Cecília"]);
        City::create(['state' => 15, 'ibge_code' => '2513208', 'name' => "Santa Cruz"]);
        City::create(['state' => 15, 'ibge_code' => '2513307', 'name' => "Santa Helena"]);
        City::create(['state' => 15, 'ibge_code' => '2513356', 'name' => "Santa Inês"]);
        City::create(['state' => 15, 'ibge_code' => '2513406', 'name' => "Santa Luzia"]);
        City::create(['state' => 15, 'ibge_code' => '2513703', 'name' => "Santa Rita"]);
        City::create(['state' => 15, 'ibge_code' => '2513802', 'name' => "Santa Teresinha"]);
        City::create(['state' => 15, 'ibge_code' => '2513505', 'name' => "Santana de Mangueira"]);
        City::create(['state' => 15, 'ibge_code' => '2513604', 'name' => "Santana dos Garrotes"]);
        City::create(['state' => 15, 'ibge_code' => '2513653', 'name' => "Joca Claudino"]);
        City::create(['state' => 15, 'ibge_code' => '2513851', 'name' => "Santo André"]);
        City::create(['state' => 15, 'ibge_code' => '2513927', 'name' => "São Bentinho"]);
        City::create(['state' => 15, 'ibge_code' => '2513901', 'name' => "São Bento"]);
        City::create(['state' => 15, 'ibge_code' => '2513968', 'name' => "São Domingos"]);
        City::create(['state' => 15, 'ibge_code' => '2513943', 'name' => "São Domingos do Cariri"]);
        City::create(['state' => 15, 'ibge_code' => '2513984', 'name' => "São Francisco"]);
        City::create(['state' => 15, 'ibge_code' => '2514008', 'name' => "São João do Cariri"]);
        City::create(['state' => 15, 'ibge_code' => '2500700', 'name' => "São João do Rio do Peixe"]);
        City::create(['state' => 15, 'ibge_code' => '2514107', 'name' => "São João do Tigre"]);
        City::create(['state' => 15, 'ibge_code' => '2514206', 'name' => "São José da Lagoa Tapada"]);
        City::create(['state' => 15, 'ibge_code' => '2514305', 'name' => "São José de Caiana"]);
        City::create(['state' => 15, 'ibge_code' => '2514404', 'name' => "São José de Espinharas"]);
        City::create(['state' => 15, 'ibge_code' => '2514503', 'name' => "São José de Piranhas"]);
        City::create(['state' => 15, 'ibge_code' => '2514552', 'name' => "São José de Princesa"]);
        City::create(['state' => 15, 'ibge_code' => '2514602', 'name' => "São José do Bonfim"]);
        City::create(['state' => 15, 'ibge_code' => '2514651', 'name' => "São José do Brejo do Cruz"]);
        City::create(['state' => 15, 'ibge_code' => '2514701', 'name' => "São José do Sabugi"]);
        City::create(['state' => 15, 'ibge_code' => '2514800', 'name' => "São José dos Cordeiros"]);
        City::create(['state' => 15, 'ibge_code' => '2514453', 'name' => "São José dos Ramos"]);
        City::create(['state' => 15, 'ibge_code' => '2514909', 'name' => "São Mamede"]);
        City::create(['state' => 15, 'ibge_code' => '2515005', 'name' => "São Miguel de Taipu"]);
        City::create(['state' => 15, 'ibge_code' => '2515104', 'name' => "São Sebastião de Lagoa de Roça"]);
        City::create(['state' => 15, 'ibge_code' => '2515203', 'name' => "São Sebastião do Umbuzeiro"]);
        City::create(['state' => 15, 'ibge_code' => '2515302', 'name' => "Sapé"]);
        City::create(['state' => 15, 'ibge_code' => '2515401', 'name' => "Seridó"]);
        City::create(['state' => 15, 'ibge_code' => '2515500', 'name' => "Serra Branca"]);
        City::create(['state' => 15, 'ibge_code' => '2515609', 'name' => "Serra da Raiz"]);
        City::create(['state' => 15, 'ibge_code' => '2515708', 'name' => "Serra Grande"]);
        City::create(['state' => 15, 'ibge_code' => '2515807', 'name' => "Serra Redonda"]);
        City::create(['state' => 15, 'ibge_code' => '2515906', 'name' => "Serraria"]);
        City::create(['state' => 15, 'ibge_code' => '2515930', 'name' => "Sertãozinho"]);
        City::create(['state' => 15, 'ibge_code' => '2515971', 'name' => "Sobrado"]);
        City::create(['state' => 15, 'ibge_code' => '2516003', 'name' => "Solânea"]);
        City::create(['state' => 15, 'ibge_code' => '2516102', 'name' => "Soledade"]);
        City::create(['state' => 15, 'ibge_code' => '2516151', 'name' => "Sossêgo"]);
        City::create(['state' => 15, 'ibge_code' => '2516201', 'name' => "Sousa"]);
        City::create(['state' => 15, 'ibge_code' => '2516300', 'name' => "Sumé"]);
        City::create(['state' => 15, 'ibge_code' => '2516508', 'name' => "Taperoá"]);
        City::create(['state' => 15, 'ibge_code' => '2516607', 'name' => "Tavares"]);
        City::create(['state' => 15, 'ibge_code' => '2516706', 'name' => "Teixeira"]);
        City::create(['state' => 15, 'ibge_code' => '2516755', 'name' => "Tenório"]);
        City::create(['state' => 15, 'ibge_code' => '2516805', 'name' => "Triunfo"]);
        City::create(['state' => 15, 'ibge_code' => '2516904', 'name' => "Uiraúna"]);
        City::create(['state' => 15, 'ibge_code' => '2517001', 'name' => "Umbuzeiro"]);
        City::create(['state' => 15, 'ibge_code' => '2517100', 'name' => "Várzea"]);
        City::create(['state' => 15, 'ibge_code' => '2517209', 'name' => "Vieirópolis"]);
        City::create(['state' => 15, 'ibge_code' => '2505501', 'name' => "Vista Serrana"]);
        City::create(['state' => 15, 'ibge_code' => '2517407', 'name' => "Zabelê"]);

        City::create(['state' => 16, 'ibge_code' => '4100103', 'name' => "Abatiá"]);
        City::create(['state' => 16, 'ibge_code' => '4100202', 'name' => "Adrianópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4100301', 'name' => "Agudos do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4100400', 'name' => "Almirante Tamandaré"]);
        City::create(['state' => 16, 'ibge_code' => '4100459', 'name' => "Altamira do Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4128625', 'name' => "Alto Paraíso"]);
        City::create(['state' => 16, 'ibge_code' => '4100608', 'name' => "Alto Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4100707', 'name' => "Alto Piquiri"]);
        City::create(['state' => 16, 'ibge_code' => '4100509', 'name' => "Altônia"]);
        City::create(['state' => 16, 'ibge_code' => '4100806', 'name' => "Alvorada do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4100905', 'name' => "Amaporã"]);
        City::create(['state' => 16, 'ibge_code' => '4101002', 'name' => "Ampére"]);
        City::create(['state' => 16, 'ibge_code' => '4101051', 'name' => "Anahy"]);
        City::create(['state' => 16, 'ibge_code' => '4101101', 'name' => "Andirá"]);
        City::create(['state' => 16, 'ibge_code' => '4101150', 'name' => "Ângulo"]);
        City::create(['state' => 16, 'ibge_code' => '4101200', 'name' => "Antonina"]);
        City::create(['state' => 16, 'ibge_code' => '4101309', 'name' => "Antônio Olinto"]);
        City::create(['state' => 16, 'ibge_code' => '4101408', 'name' => "Apucarana"]);
        City::create(['state' => 16, 'ibge_code' => '4101507', 'name' => "Arapongas"]);
        City::create(['state' => 16, 'ibge_code' => '4101606', 'name' => "Arapoti"]);
        City::create(['state' => 16, 'ibge_code' => '4101655', 'name' => "Arapuã"]);
        City::create(['state' => 16, 'ibge_code' => '4101705', 'name' => "Araruna"]);
        City::create(['state' => 16, 'ibge_code' => '4101804', 'name' => "Araucária"]);
        City::create(['state' => 16, 'ibge_code' => '4101853', 'name' => "Ariranha do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4101903', 'name' => "Assaí"]);
        City::create(['state' => 16, 'ibge_code' => '4102000', 'name' => "Assis Chateaubriand"]);
        City::create(['state' => 16, 'ibge_code' => '4102109', 'name' => "Astorga"]);
        City::create(['state' => 16, 'ibge_code' => '4102208', 'name' => "Atalaia"]);
        City::create(['state' => 16, 'ibge_code' => '4102307', 'name' => "Balsa Nova"]);
        City::create(['state' => 16, 'ibge_code' => '4102406', 'name' => "Bandeirantes"]);
        City::create(['state' => 16, 'ibge_code' => '4102505', 'name' => "Barbosa Ferraz"]);
        City::create(['state' => 16, 'ibge_code' => '4102703', 'name' => "Barra do Jacaré"]);
        City::create(['state' => 16, 'ibge_code' => '4102604', 'name' => "Barracão"]);
        City::create(['state' => 16, 'ibge_code' => '4102752', 'name' => "Bela Vista da Caroba"]);
        City::create(['state' => 16, 'ibge_code' => '4102802', 'name' => "Bela Vista do Paraíso"]);
        City::create(['state' => 16, 'ibge_code' => '4102901', 'name' => "Bituruna"]);
        City::create(['state' => 16, 'ibge_code' => '4103008', 'name' => "Boa Esperança"]);
        City::create(['state' => 16, 'ibge_code' => '4103024', 'name' => "Boa Esperança do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4103040', 'name' => "Boa Ventura de São Roque"]);
        City::create(['state' => 16, 'ibge_code' => '4103057', 'name' => "Boa Vista da Aparecida"]);
        City::create(['state' => 16, 'ibge_code' => '4103107', 'name' => "Bocaiúva do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4103156', 'name' => "Bom Jesus do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4103206', 'name' => "Bom Sucesso"]);
        City::create(['state' => 16, 'ibge_code' => '4103222', 'name' => "Bom Sucesso do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4103305', 'name' => "Borrazópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4103354', 'name' => "Braganey"]);
        City::create(['state' => 16, 'ibge_code' => '4103370', 'name' => "Brasilândia do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4103404', 'name' => "Cafeara"]);
        City::create(['state' => 16, 'ibge_code' => '4103453', 'name' => "Cafelândia"]);
        City::create(['state' => 16, 'ibge_code' => '4103479', 'name' => "Cafezal do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4103503', 'name' => "Califórnia"]);
        City::create(['state' => 16, 'ibge_code' => '4103602', 'name' => "Cambará"]);
        City::create(['state' => 16, 'ibge_code' => '4103701', 'name' => "Cambé"]);
        City::create(['state' => 16, 'ibge_code' => '4103800', 'name' => "Cambira"]);
        City::create(['state' => 16, 'ibge_code' => '4103909', 'name' => "Campina da Lagoa"]);
        City::create(['state' => 16, 'ibge_code' => '4103958', 'name' => "Campina do Simão"]);
        City::create(['state' => 16, 'ibge_code' => '4104006', 'name' => "Campina Grande do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4104055', 'name' => "Campo Bonito"]);
        City::create(['state' => 16, 'ibge_code' => '4104105', 'name' => "Campo do Tenente"]);
        City::create(['state' => 16, 'ibge_code' => '4104204', 'name' => "Campo Largo"]);
        City::create(['state' => 16, 'ibge_code' => '4104253', 'name' => "Campo Magro"]);
        City::create(['state' => 16, 'ibge_code' => '4104303', 'name' => "Campo Mourão"]);
        City::create(['state' => 16, 'ibge_code' => '4104402', 'name' => "Cândido de Abreu"]);
        City::create(['state' => 16, 'ibge_code' => '4104428', 'name' => "Candói"]);
        City::create(['state' => 16, 'ibge_code' => '4104451', 'name' => "Cantagalo"]);
        City::create(['state' => 16, 'ibge_code' => '4104501', 'name' => "Capanema"]);
        City::create(['state' => 16, 'ibge_code' => '4104600', 'name' => "Capitão Leônidas Marques"]);
        City::create(['state' => 16, 'ibge_code' => '4104659', 'name' => "Carambeí"]);
        City::create(['state' => 16, 'ibge_code' => '4104709', 'name' => "Carlópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4104808', 'name' => "Cascavel"]);
        City::create(['state' => 16, 'ibge_code' => '4104907', 'name' => "Castro"]);
        City::create(['state' => 16, 'ibge_code' => '4105003', 'name' => "Catanduvas"]);
        City::create(['state' => 16, 'ibge_code' => '4105102', 'name' => "Centenário do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4105201', 'name' => "Cerro Azul"]);
        City::create(['state' => 16, 'ibge_code' => '4105300', 'name' => "Céu Azul"]);
        City::create(['state' => 16, 'ibge_code' => '4105409', 'name' => "Chopinzinho"]);
        City::create(['state' => 16, 'ibge_code' => '4105508', 'name' => "Cianorte"]);
        City::create(['state' => 16, 'ibge_code' => '4105607', 'name' => "Cidade Gaúcha"]);
        City::create(['state' => 16, 'ibge_code' => '4105706', 'name' => "Clevelândia"]);
        City::create(['state' => 16, 'ibge_code' => '4105805', 'name' => "Colombo"]);
        City::create(['state' => 16, 'ibge_code' => '4105904', 'name' => "Colorado"]);
        City::create(['state' => 16, 'ibge_code' => '4106001', 'name' => "Congonhinhas"]);
        City::create(['state' => 16, 'ibge_code' => '4106100', 'name' => "Conselheiro Mairinck"]);
        City::create(['state' => 16, 'ibge_code' => '4106209', 'name' => "Contenda"]);
        City::create(['state' => 16, 'ibge_code' => '4106308', 'name' => "Corbélia"]);
        City::create(['state' => 16, 'ibge_code' => '4106407', 'name' => "Cornélio Procópio"]);
        City::create(['state' => 16, 'ibge_code' => '4106456', 'name' => "Coronel Domingos Soares"]);
        City::create(['state' => 16, 'ibge_code' => '4106506', 'name' => "Coronel Vivida"]);
        City::create(['state' => 16, 'ibge_code' => '4106555', 'name' => "Corumbataí do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4106803', 'name' => "Cruz Machado"]);
        City::create(['state' => 16, 'ibge_code' => '4106571', 'name' => "Cruzeiro do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4106605', 'name' => "Cruzeiro do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4106704', 'name' => "Cruzeiro do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4106852', 'name' => "Cruzmaltina"]);
        City::create(['state' => 16, 'ibge_code' => '4106902', 'name' => "Curitiba"]);
        City::create(['state' => 16, 'ibge_code' => '4107009', 'name' => "Curiúva"]);
        City::create(['state' => 16, 'ibge_code' => '4107108', 'name' => "Diamante do Norte"]);
        City::create(['state' => 16, 'ibge_code' => '4107124', 'name' => "Diamante do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4107157', 'name' => "Diamante D'Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4107207', 'name' => "Dois Vizinhos"]);
        City::create(['state' => 16, 'ibge_code' => '4107256', 'name' => "Douradina"]);
        City::create(['state' => 16, 'ibge_code' => '4107306', 'name' => "Doutor Camargo"]);
        City::create(['state' => 16, 'ibge_code' => '4128633', 'name' => "Doutor Ulysses"]);
        City::create(['state' => 16, 'ibge_code' => '4107405', 'name' => "Enéas Marques"]);
        City::create(['state' => 16, 'ibge_code' => '4107504', 'name' => "Engenheiro Beltrão"]);
        City::create(['state' => 16, 'ibge_code' => '4107538', 'name' => "Entre Rios do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4107520', 'name' => "Esperança Nova"]);
        City::create(['state' => 16, 'ibge_code' => '4107546', 'name' => "Espigão Alto do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4107553', 'name' => "Farol"]);
        City::create(['state' => 16, 'ibge_code' => '4107603', 'name' => "Faxinal"]);
        City::create(['state' => 16, 'ibge_code' => '4107652', 'name' => "Fazenda Rio Grande"]);
        City::create(['state' => 16, 'ibge_code' => '4107702', 'name' => "Fênix"]);
        City::create(['state' => 16, 'ibge_code' => '4107736', 'name' => "Fernandes Pinheiro"]);
        City::create(['state' => 16, 'ibge_code' => '4107751', 'name' => "Figueira"]);
        City::create(['state' => 16, 'ibge_code' => '4107850', 'name' => "Flor da Serra do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4107801', 'name' => "Floraí"]);
        City::create(['state' => 16, 'ibge_code' => '4107900', 'name' => "Floresta"]);
        City::create(['state' => 16, 'ibge_code' => '4108007', 'name' => "Florestópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4108106', 'name' => "Flórida"]);
        City::create(['state' => 16, 'ibge_code' => '4108205', 'name' => "Formosa do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4108304', 'name' => "Foz do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4108452', 'name' => "Foz do Jordão"]);
        City::create(['state' => 16, 'ibge_code' => '4108320', 'name' => "Francisco Alves"]);
        City::create(['state' => 16, 'ibge_code' => '4108403', 'name' => "Francisco Beltrão"]);
        City::create(['state' => 16, 'ibge_code' => '4108502', 'name' => "General Carneiro"]);
        City::create(['state' => 16, 'ibge_code' => '4108551', 'name' => "Godoy Moreira"]);
        City::create(['state' => 16, 'ibge_code' => '4108601', 'name' => "Goioerê"]);
        City::create(['state' => 16, 'ibge_code' => '4108650', 'name' => "Goioxim"]);
        City::create(['state' => 16, 'ibge_code' => '4108700', 'name' => "Grandes Rios"]);
        City::create(['state' => 16, 'ibge_code' => '4108809', 'name' => "Guaíra"]);
        City::create(['state' => 16, 'ibge_code' => '4108908', 'name' => "Guairaçá"]);
        City::create(['state' => 16, 'ibge_code' => '4108957', 'name' => "Guamiranga"]);
        City::create(['state' => 16, 'ibge_code' => '4109005', 'name' => "Guapirama"]);
        City::create(['state' => 16, 'ibge_code' => '4109104', 'name' => "Guaporema"]);
        City::create(['state' => 16, 'ibge_code' => '4109203', 'name' => "Guaraci"]);
        City::create(['state' => 16, 'ibge_code' => '4109302', 'name' => "Guaraniaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4109401', 'name' => "Guarapuava"]);
        City::create(['state' => 16, 'ibge_code' => '4109500', 'name' => "Guaraqueçaba"]);
        City::create(['state' => 16, 'ibge_code' => '4109609', 'name' => "Guaratuba"]);
        City::create(['state' => 16, 'ibge_code' => '4109658', 'name' => "Honório Serpa"]);
        City::create(['state' => 16, 'ibge_code' => '4109708', 'name' => "Ibaiti"]);
        City::create(['state' => 16, 'ibge_code' => '4109757', 'name' => "Ibema"]);
        City::create(['state' => 16, 'ibge_code' => '4109807', 'name' => "Ibiporã"]);
        City::create(['state' => 16, 'ibge_code' => '4109906', 'name' => "Icaraíma"]);
        City::create(['state' => 16, 'ibge_code' => '4110003', 'name' => "Iguaraçu"]);
        City::create(['state' => 16, 'ibge_code' => '4110052', 'name' => "Iguatu"]);
        City::create(['state' => 16, 'ibge_code' => '4110078', 'name' => "Imbaú"]);
        City::create(['state' => 16, 'ibge_code' => '4110102', 'name' => "Imbituva"]);
        City::create(['state' => 16, 'ibge_code' => '4110201', 'name' => "Inácio Martins"]);
        City::create(['state' => 16, 'ibge_code' => '4110300', 'name' => "Inajá"]);
        City::create(['state' => 16, 'ibge_code' => '4110409', 'name' => "Indianópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4110508', 'name' => "Ipiranga"]);
        City::create(['state' => 16, 'ibge_code' => '4110607', 'name' => "Iporã"]);
        City::create(['state' => 16, 'ibge_code' => '4110656', 'name' => "Iracema do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4110706', 'name' => "Irati"]);
        City::create(['state' => 16, 'ibge_code' => '4110805', 'name' => "Iretama"]);
        City::create(['state' => 16, 'ibge_code' => '4110904', 'name' => "Itaguajé"]);
        City::create(['state' => 16, 'ibge_code' => '4110953', 'name' => "Itaipulândia"]);
        City::create(['state' => 16, 'ibge_code' => '4111001', 'name' => "Itambaracá"]);
        City::create(['state' => 16, 'ibge_code' => '4111100', 'name' => "Itambé"]);
        City::create(['state' => 16, 'ibge_code' => '4111209', 'name' => "Itapejara d'Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4111258', 'name' => "Itaperuçu"]);
        City::create(['state' => 16, 'ibge_code' => '4111308', 'name' => "Itaúna do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4111407', 'name' => "Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4111506', 'name' => "Ivaiporã"]);
        City::create(['state' => 16, 'ibge_code' => '4111555', 'name' => "Ivaté"]);
        City::create(['state' => 16, 'ibge_code' => '4111605', 'name' => "Ivatuba"]);
        City::create(['state' => 16, 'ibge_code' => '4111704', 'name' => "Jaboti"]);
        City::create(['state' => 16, 'ibge_code' => '4111803', 'name' => "Jacarezinho"]);
        City::create(['state' => 16, 'ibge_code' => '4111902', 'name' => "Jaguapitã"]);
        City::create(['state' => 16, 'ibge_code' => '4112009', 'name' => "Jaguariaíva"]);
        City::create(['state' => 16, 'ibge_code' => '4112108', 'name' => "Jandaia do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4112207', 'name' => "Janiópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4112306', 'name' => "Japira"]);
        City::create(['state' => 16, 'ibge_code' => '4112405', 'name' => "Japurá"]);
        City::create(['state' => 16, 'ibge_code' => '4112504', 'name' => "Jardim Alegre"]);
        City::create(['state' => 16, 'ibge_code' => '4112603', 'name' => "Jardim Olinda"]);
        City::create(['state' => 16, 'ibge_code' => '4112702', 'name' => "Jataizinho"]);
        City::create(['state' => 16, 'ibge_code' => '4112751', 'name' => "Jesuítas"]);
        City::create(['state' => 16, 'ibge_code' => '4112801', 'name' => "Joaquim Távora"]);
        City::create(['state' => 16, 'ibge_code' => '4112900', 'name' => "Jundiaí do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4112959', 'name' => "Juranda"]);
        City::create(['state' => 16, 'ibge_code' => '4113007', 'name' => "Jussara"]);
        City::create(['state' => 16, 'ibge_code' => '4113106', 'name' => "Kaloré"]);
        City::create(['state' => 16, 'ibge_code' => '4113205', 'name' => "Lapa"]);
        City::create(['state' => 16, 'ibge_code' => '4113254', 'name' => "Laranjal"]);
        City::create(['state' => 16, 'ibge_code' => '4113304', 'name' => "Laranjeiras do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4113403', 'name' => "Leópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4113429', 'name' => "Lidianópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4113452', 'name' => "Lindoeste"]);
        City::create(['state' => 16, 'ibge_code' => '4113502', 'name' => "Loanda"]);
        City::create(['state' => 16, 'ibge_code' => '4113601', 'name' => "Lobato"]);
        City::create(['state' => 16, 'ibge_code' => '4113700', 'name' => "Londrina"]);
        City::create(['state' => 16, 'ibge_code' => '4113734', 'name' => "Luiziana"]);
        City::create(['state' => 16, 'ibge_code' => '4113759', 'name' => "Lunardelli"]);
        City::create(['state' => 16, 'ibge_code' => '4113809', 'name' => "Lupionópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4113908', 'name' => "Mallet"]);
        City::create(['state' => 16, 'ibge_code' => '4114005', 'name' => "Mamborê"]);
        City::create(['state' => 16, 'ibge_code' => '4114104', 'name' => "Mandaguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4114203', 'name' => "Mandaguari"]);
        City::create(['state' => 16, 'ibge_code' => '4114302', 'name' => "Mandirituba"]);
        City::create(['state' => 16, 'ibge_code' => '4114351', 'name' => "Manfrinópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4114401', 'name' => "Mangueirinha"]);
        City::create(['state' => 16, 'ibge_code' => '4114500', 'name' => "Manoel Ribas"]);
        City::create(['state' => 16, 'ibge_code' => '4114609', 'name' => "Marechal Cândido Rondon"]);
        City::create(['state' => 16, 'ibge_code' => '4114708', 'name' => "Maria Helena"]);
        City::create(['state' => 16, 'ibge_code' => '4114807', 'name' => "Marialva"]);
        City::create(['state' => 16, 'ibge_code' => '4114906', 'name' => "Marilândia do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4115002', 'name' => "Marilena"]);
        City::create(['state' => 16, 'ibge_code' => '4115101', 'name' => "Mariluz"]);
        City::create(['state' => 16, 'ibge_code' => '4115200', 'name' => "Maringá"]);
        City::create(['state' => 16, 'ibge_code' => '4115309', 'name' => "Mariópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4115358', 'name' => "Maripá"]);
        City::create(['state' => 16, 'ibge_code' => '4115408', 'name' => "Marmeleiro"]);
        City::create(['state' => 16, 'ibge_code' => '4115457', 'name' => "Marquinho"]);
        City::create(['state' => 16, 'ibge_code' => '4115507', 'name' => "Marumbi"]);
        City::create(['state' => 16, 'ibge_code' => '4115606', 'name' => "Matelândia"]);
        City::create(['state' => 16, 'ibge_code' => '4115705', 'name' => "Matinhos"]);
        City::create(['state' => 16, 'ibge_code' => '4115739', 'name' => "Mato Rico"]);
        City::create(['state' => 16, 'ibge_code' => '4115754', 'name' => "Mauá da Serra"]);
        City::create(['state' => 16, 'ibge_code' => '4115804', 'name' => "Medianeira"]);
        City::create(['state' => 16, 'ibge_code' => '4115853', 'name' => "Mercedes"]);
        City::create(['state' => 16, 'ibge_code' => '4115903', 'name' => "Mirador"]);
        City::create(['state' => 16, 'ibge_code' => '4116000', 'name' => "Miraselva"]);
        City::create(['state' => 16, 'ibge_code' => '4116059', 'name' => "Missal"]);
        City::create(['state' => 16, 'ibge_code' => '4116109', 'name' => "Moreira Sales"]);
        City::create(['state' => 16, 'ibge_code' => '4116208', 'name' => "Morretes"]);
        City::create(['state' => 16, 'ibge_code' => '4116307', 'name' => "Munhoz de Melo"]);
        City::create(['state' => 16, 'ibge_code' => '4116406', 'name' => "Nossa Senhora das Graças"]);
        City::create(['state' => 16, 'ibge_code' => '4116505', 'name' => "Nova Aliança do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4116604', 'name' => "Nova América da Colina"]);
        City::create(['state' => 16, 'ibge_code' => '4116703', 'name' => "Nova Aurora"]);
        City::create(['state' => 16, 'ibge_code' => '4116802', 'name' => "Nova Cantu"]);
        City::create(['state' => 16, 'ibge_code' => '4116901', 'name' => "Nova Esperança"]);
        City::create(['state' => 16, 'ibge_code' => '4116950', 'name' => "Nova Esperança do Sudoeste"]);
        City::create(['state' => 16, 'ibge_code' => '4117008', 'name' => "Nova Fátima"]);
        City::create(['state' => 16, 'ibge_code' => '4117057', 'name' => "Nova Laranjeiras"]);
        City::create(['state' => 16, 'ibge_code' => '4117107', 'name' => "Nova Londrina"]);
        City::create(['state' => 16, 'ibge_code' => '4117206', 'name' => "Nova Olímpia"]);
        City::create(['state' => 16, 'ibge_code' => '4117255', 'name' => "Nova Prata do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4117214', 'name' => "Nova Santa Bárbara"]);
        City::create(['state' => 16, 'ibge_code' => '4117222', 'name' => "Nova Santa Rosa"]);
        City::create(['state' => 16, 'ibge_code' => '4117271', 'name' => "Nova Tebas"]);
        City::create(['state' => 16, 'ibge_code' => '4117297', 'name' => "Novo Itacolomi"]);
        City::create(['state' => 16, 'ibge_code' => '4117305', 'name' => "Ortigueira"]);
        City::create(['state' => 16, 'ibge_code' => '4117404', 'name' => "Ourizona"]);
        City::create(['state' => 16, 'ibge_code' => '4117453', 'name' => "Ouro Verde do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4117503', 'name' => "Paiçandu"]);
        City::create(['state' => 16, 'ibge_code' => '4117602', 'name' => "Palmas"]);
        City::create(['state' => 16, 'ibge_code' => '4117701', 'name' => "Palmeira"]);
        City::create(['state' => 16, 'ibge_code' => '4117800', 'name' => "Palmital"]);
        City::create(['state' => 16, 'ibge_code' => '4117909', 'name' => "Palotina"]);
        City::create(['state' => 16, 'ibge_code' => '4118006', 'name' => "Paraíso do Norte"]);
        City::create(['state' => 16, 'ibge_code' => '4118105', 'name' => "Paranacity"]);
        City::create(['state' => 16, 'ibge_code' => '4118204', 'name' => "Paranaguá"]);
        City::create(['state' => 16, 'ibge_code' => '4118303', 'name' => "Paranapoema"]);
        City::create(['state' => 16, 'ibge_code' => '4118402', 'name' => "Paranavaí"]);
        City::create(['state' => 16, 'ibge_code' => '4118451', 'name' => "Pato Bragado"]);
        City::create(['state' => 16, 'ibge_code' => '4118501', 'name' => "Pato Branco"]);
        City::create(['state' => 16, 'ibge_code' => '4118600', 'name' => "Paula Freitas"]);
        City::create(['state' => 16, 'ibge_code' => '4118709', 'name' => "Paulo Frontin"]);
        City::create(['state' => 16, 'ibge_code' => '4118808', 'name' => "Peabiru"]);
        City::create(['state' => 16, 'ibge_code' => '4118857', 'name' => "Perobal"]);
        City::create(['state' => 16, 'ibge_code' => '4118907', 'name' => "Pérola"]);
        City::create(['state' => 16, 'ibge_code' => '4119004', 'name' => "Pérola d'Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4119103', 'name' => "Piên"]);
        City::create(['state' => 16, 'ibge_code' => '4119152', 'name' => "Pinhais"]);
        City::create(['state' => 16, 'ibge_code' => '4119251', 'name' => "Pinhal de São Bento"]);
        City::create(['state' => 16, 'ibge_code' => '4119202', 'name' => "Pinhalão"]);
        City::create(['state' => 16, 'ibge_code' => '4119301', 'name' => "Pinhão"]);
        City::create(['state' => 16, 'ibge_code' => '4119400', 'name' => "Piraí do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4119509', 'name' => "Piraquara"]);
        City::create(['state' => 16, 'ibge_code' => '4119608', 'name' => "Pitanga"]);
        City::create(['state' => 16, 'ibge_code' => '4119657', 'name' => "Pitangueiras"]);
        City::create(['state' => 16, 'ibge_code' => '4119707', 'name' => "Planaltina do Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4119806', 'name' => "Planalto"]);
        City::create(['state' => 16, 'ibge_code' => '4119905', 'name' => "Ponta Grossa"]);
        City::create(['state' => 16, 'ibge_code' => '4119954', 'name' => "Pontal do Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4120002', 'name' => "Porecatu"]);
        City::create(['state' => 16, 'ibge_code' => '4120101', 'name' => "Porto Amazonas"]);
        City::create(['state' => 16, 'ibge_code' => '4120150', 'name' => "Porto Barreiro"]);
        City::create(['state' => 16, 'ibge_code' => '4120200', 'name' => "Porto Rico"]);
        City::create(['state' => 16, 'ibge_code' => '4120309', 'name' => "Porto Vitória"]);
        City::create(['state' => 16, 'ibge_code' => '4120333', 'name' => "Prado Ferreira"]);
        City::create(['state' => 16, 'ibge_code' => '4120358', 'name' => "Pranchita"]);
        City::create(['state' => 16, 'ibge_code' => '4120408', 'name' => "Presidente Castelo Branco"]);
        City::create(['state' => 16, 'ibge_code' => '4120507', 'name' => "Primeiro de Maio"]);
        City::create(['state' => 16, 'ibge_code' => '4120606', 'name' => "Prudentópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4120655', 'name' => "Quarto Centenário"]);
        City::create(['state' => 16, 'ibge_code' => '4120705', 'name' => "Quatiguá"]);
        City::create(['state' => 16, 'ibge_code' => '4120804', 'name' => "Quatro Barras"]);
        City::create(['state' => 16, 'ibge_code' => '4120853', 'name' => "Quatro Pontes"]);
        City::create(['state' => 16, 'ibge_code' => '4120903', 'name' => "Quedas do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4121000', 'name' => "Querência do Norte"]);
        City::create(['state' => 16, 'ibge_code' => '4121109', 'name' => "Quinta do Sol"]);
        City::create(['state' => 16, 'ibge_code' => '4121208', 'name' => "Quitandinha"]);
        City::create(['state' => 16, 'ibge_code' => '4121257', 'name' => "Ramilândia"]);
        City::create(['state' => 16, 'ibge_code' => '4121307', 'name' => "Rancho Alegre"]);
        City::create(['state' => 16, 'ibge_code' => '4121356', 'name' => "Rancho Alegre D'Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4121406', 'name' => "Realeza"]);
        City::create(['state' => 16, 'ibge_code' => '4121505', 'name' => "Rebouças"]);
        City::create(['state' => 16, 'ibge_code' => '4121604', 'name' => "Renascença"]);
        City::create(['state' => 16, 'ibge_code' => '4121703', 'name' => "Reserva"]);
        City::create(['state' => 16, 'ibge_code' => '4121752', 'name' => "Reserva do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4121802', 'name' => "Ribeirão Claro"]);
        City::create(['state' => 16, 'ibge_code' => '4121901', 'name' => "Ribeirão do Pinhal"]);
        City::create(['state' => 16, 'ibge_code' => '4122008', 'name' => "Rio Azul"]);
        City::create(['state' => 16, 'ibge_code' => '4122107', 'name' => "Rio Bom"]);
        City::create(['state' => 16, 'ibge_code' => '4122156', 'name' => "Rio Bonito do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4122172', 'name' => "Rio Branco do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4122206', 'name' => "Rio Branco do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4122305', 'name' => "Rio Negro"]);
        City::create(['state' => 16, 'ibge_code' => '4122404', 'name' => "Rolândia"]);
        City::create(['state' => 16, 'ibge_code' => '4122503', 'name' => "Roncador"]);
        City::create(['state' => 16, 'ibge_code' => '4122602', 'name' => "Rondon"]);
        City::create(['state' => 16, 'ibge_code' => '4122651', 'name' => "Rosário do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4122701', 'name' => "Sabáudia"]);
        City::create(['state' => 16, 'ibge_code' => '4122800', 'name' => "Salgado Filho"]);
        City::create(['state' => 16, 'ibge_code' => '4122909', 'name' => "Salto do Itararé"]);
        City::create(['state' => 16, 'ibge_code' => '4123006', 'name' => "Salto do Lontra"]);
        City::create(['state' => 16, 'ibge_code' => '4123105', 'name' => "Santa Amélia"]);
        City::create(['state' => 16, 'ibge_code' => '4123204', 'name' => "Santa Cecília do Pavão"]);
        City::create(['state' => 16, 'ibge_code' => '4123303', 'name' => "Santa Cruz de Monte Castelo"]);
        City::create(['state' => 16, 'ibge_code' => '4123402', 'name' => "Santa Fé"]);
        City::create(['state' => 16, 'ibge_code' => '4123501', 'name' => "Santa Helena"]);
        City::create(['state' => 16, 'ibge_code' => '4123600', 'name' => "Santa Inês"]);
        City::create(['state' => 16, 'ibge_code' => '4123709', 'name' => "Santa Isabel do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4123808', 'name' => "Santa Izabel do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4123824', 'name' => "Santa Lúcia"]);
        City::create(['state' => 16, 'ibge_code' => '4123857', 'name' => "Santa Maria do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4123907', 'name' => "Santa Mariana"]);
        City::create(['state' => 16, 'ibge_code' => '4123956', 'name' => "Santa Mônica"]);
        City::create(['state' => 16, 'ibge_code' => '4124020', 'name' => "Santa Tereza do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4124053', 'name' => "Santa Terezinha de Itaipu"]);
        City::create(['state' => 16, 'ibge_code' => '4124004', 'name' => "Santana do Itararé"]);
        City::create(['state' => 16, 'ibge_code' => '4124103', 'name' => "Santo Antônio da Platina"]);
        City::create(['state' => 16, 'ibge_code' => '4124202', 'name' => "Santo Antônio do Caiuá"]);
        City::create(['state' => 16, 'ibge_code' => '4124301', 'name' => "Santo Antônio do Paraíso"]);
        City::create(['state' => 16, 'ibge_code' => '4124400', 'name' => "Santo Antônio do Sudoeste"]);
        City::create(['state' => 16, 'ibge_code' => '4124509', 'name' => "Santo Inácio"]);
        City::create(['state' => 16, 'ibge_code' => '4124608', 'name' => "São Carlos do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4124707', 'name' => "São Jerônimo da Serra"]);
        City::create(['state' => 16, 'ibge_code' => '4124806', 'name' => "São João"]);
        City::create(['state' => 16, 'ibge_code' => '4124905', 'name' => "São João do Caiuá"]);
        City::create(['state' => 16, 'ibge_code' => '4125001', 'name' => "São João do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4125100', 'name' => "São João do Triunfo"]);
        City::create(['state' => 16, 'ibge_code' => '4125308', 'name' => "São Jorge do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4125357', 'name' => "São Jorge do Patrocínio"]);
        City::create(['state' => 16, 'ibge_code' => '4125209', 'name' => "São Jorge d'Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4125407', 'name' => "São José da Boa Vista"]);
        City::create(['state' => 16, 'ibge_code' => '4125456', 'name' => "São José das Palmeiras"]);
        City::create(['state' => 16, 'ibge_code' => '4125506', 'name' => "São José dos Pinhais"]);
        City::create(['state' => 16, 'ibge_code' => '4125555', 'name' => "São Manoel do Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4125605', 'name' => "São Mateus do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4125704', 'name' => "São Miguel do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4125753', 'name' => "São Pedro do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4125803', 'name' => "São Pedro do Ivaí"]);
        City::create(['state' => 16, 'ibge_code' => '4125902', 'name' => "São Pedro do Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4126009', 'name' => "São Sebastião da Amoreira"]);
        City::create(['state' => 16, 'ibge_code' => '4126108', 'name' => "São Tomé"]);
        City::create(['state' => 16, 'ibge_code' => '4126207', 'name' => "Sapopema"]);
        City::create(['state' => 16, 'ibge_code' => '4126256', 'name' => "Sarandi"]);
        City::create(['state' => 16, 'ibge_code' => '4126272', 'name' => "Saudade do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4126306', 'name' => "Sengés"]);
        City::create(['state' => 16, 'ibge_code' => '4126355', 'name' => "Serranópolis do Iguaçu"]);
        City::create(['state' => 16, 'ibge_code' => '4126405', 'name' => "Sertaneja"]);
        City::create(['state' => 16, 'ibge_code' => '4126504', 'name' => "Sertanópolis"]);
        City::create(['state' => 16, 'ibge_code' => '4126603', 'name' => "Siqueira Campos"]);
        City::create(['state' => 16, 'ibge_code' => '4126652', 'name' => "Sulina"]);
        City::create(['state' => 16, 'ibge_code' => '4126678', 'name' => "Tamarana"]);
        City::create(['state' => 16, 'ibge_code' => '4126702', 'name' => "Tamboara"]);
        City::create(['state' => 16, 'ibge_code' => '4126801', 'name' => "Tapejara"]);
        City::create(['state' => 16, 'ibge_code' => '4126900', 'name' => "Tapira"]);
        City::create(['state' => 16, 'ibge_code' => '4127007', 'name' => "Teixeira Soares"]);
        City::create(['state' => 16, 'ibge_code' => '4127106', 'name' => "Telêmaco Borba"]);
        City::create(['state' => 16, 'ibge_code' => '4127205', 'name' => "Terra Boa"]);
        City::create(['state' => 16, 'ibge_code' => '4127304', 'name' => "Terra Rica"]);
        City::create(['state' => 16, 'ibge_code' => '4127403', 'name' => "Terra Roxa"]);
        City::create(['state' => 16, 'ibge_code' => '4127502', 'name' => "Tibagi"]);
        City::create(['state' => 16, 'ibge_code' => '4127601', 'name' => "Tijucas do Sul"]);
        City::create(['state' => 16, 'ibge_code' => '4127700', 'name' => "Toledo"]);
        City::create(['state' => 16, 'ibge_code' => '4127809', 'name' => "Tomazina"]);
        City::create(['state' => 16, 'ibge_code' => '4127858', 'name' => "Três Barras do Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4127882', 'name' => "Tunas do Paraná"]);
        City::create(['state' => 16, 'ibge_code' => '4127908', 'name' => "Tuneiras do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4127957', 'name' => "Tupãssi"]);
        City::create(['state' => 16, 'ibge_code' => '4127965', 'name' => "Turvo"]);
        City::create(['state' => 16, 'ibge_code' => '4128005', 'name' => "Ubiratã"]);
        City::create(['state' => 16, 'ibge_code' => '4128104', 'name' => "Umuarama"]);
        City::create(['state' => 16, 'ibge_code' => '4128203', 'name' => "União da Vitória"]);
        City::create(['state' => 16, 'ibge_code' => '4128302', 'name' => "Uniflor"]);
        City::create(['state' => 16, 'ibge_code' => '4128401', 'name' => "Uraí"]);
        City::create(['state' => 16, 'ibge_code' => '4128534', 'name' => "Ventania"]);
        City::create(['state' => 16, 'ibge_code' => '4128559', 'name' => "Vera Cruz do Oeste"]);
        City::create(['state' => 16, 'ibge_code' => '4128609', 'name' => "Verê"]);
        City::create(['state' => 16, 'ibge_code' => '4128658', 'name' => "Virmond"]);
        City::create(['state' => 16, 'ibge_code' => '4128708', 'name' => "Vitorino"]);
        City::create(['state' => 16, 'ibge_code' => '4128500', 'name' => "Wenceslau Braz"]);
        City::create(['state' => 16, 'ibge_code' => '4128807', 'name' => "Xambrê"]);

        City::create(['state' => 17, 'ibge_code' => '2600054', 'name' => "Abreu e Lima"]);
        City::create(['state' => 17, 'ibge_code' => '2600104', 'name' => "Afogados da Ingazeira"]);
        City::create(['state' => 17, 'ibge_code' => '2600203', 'name' => "Afrânio"]);
        City::create(['state' => 17, 'ibge_code' => '2600302', 'name' => "Agrestina"]);
        City::create(['state' => 17, 'ibge_code' => '2600401', 'name' => "Água Preta"]);
        City::create(['state' => 17, 'ibge_code' => '2600500', 'name' => "Águas Belas"]);
        City::create(['state' => 17, 'ibge_code' => '2600609', 'name' => "Alagoinha"]);
        City::create(['state' => 17, 'ibge_code' => '2600708', 'name' => "Aliança"]);
        City::create(['state' => 17, 'ibge_code' => '2600807', 'name' => "Altinho"]);
        City::create(['state' => 17, 'ibge_code' => '2600906', 'name' => "Amaraji"]);
        City::create(['state' => 17, 'ibge_code' => '2601003', 'name' => "Angelim"]);
        City::create(['state' => 17, 'ibge_code' => '2601052', 'name' => "Araçoiaba"]);
        City::create(['state' => 17, 'ibge_code' => '2601102', 'name' => "Araripina"]);
        City::create(['state' => 17, 'ibge_code' => '2601201', 'name' => "Arcoverde"]);
        City::create(['state' => 17, 'ibge_code' => '2601300', 'name' => "Barra de Guabiraba"]);
        City::create(['state' => 17, 'ibge_code' => '2601409', 'name' => "Barreiros"]);
        City::create(['state' => 17, 'ibge_code' => '2601508', 'name' => "Belém de Maria"]);
        City::create(['state' => 17, 'ibge_code' => '2601607', 'name' => "Belém do São Francisco"]);
        City::create(['state' => 17, 'ibge_code' => '2601706', 'name' => "Belo Jardim"]);
        City::create(['state' => 17, 'ibge_code' => '2601805', 'name' => "Betânia"]);
        City::create(['state' => 17, 'ibge_code' => '2601904', 'name' => "Bezerros"]);
        City::create(['state' => 17, 'ibge_code' => '2602001', 'name' => "Bodocó"]);
        City::create(['state' => 17, 'ibge_code' => '2602100', 'name' => "Bom Conselho"]);
        City::create(['state' => 17, 'ibge_code' => '2602209', 'name' => "Bom Jardim"]);
        City::create(['state' => 17, 'ibge_code' => '2602308', 'name' => "Bonito"]);
        City::create(['state' => 17, 'ibge_code' => '2602407', 'name' => "Brejão"]);
        City::create(['state' => 17, 'ibge_code' => '2602506', 'name' => "Brejinho"]);
        City::create(['state' => 17, 'ibge_code' => '2602605', 'name' => "Brejo da Madre de Deus"]);
        City::create(['state' => 17, 'ibge_code' => '2602704', 'name' => "Buenos Aires"]);
        City::create(['state' => 17, 'ibge_code' => '2602803', 'name' => "Buíque"]);
        City::create(['state' => 17, 'ibge_code' => '2602902', 'name' => "Cabo de Santo Agostinho"]);
        City::create(['state' => 17, 'ibge_code' => '2603009', 'name' => "Cabrobó"]);
        City::create(['state' => 17, 'ibge_code' => '2603108', 'name' => "Cachoeirinha"]);
        City::create(['state' => 17, 'ibge_code' => '2603207', 'name' => "Caetés"]);
        City::create(['state' => 17, 'ibge_code' => '2603306', 'name' => "Calçado"]);
        City::create(['state' => 17, 'ibge_code' => '2603405', 'name' => "Calumbi"]);
        City::create(['state' => 17, 'ibge_code' => '2603454', 'name' => "Camaragibe"]);
        City::create(['state' => 17, 'ibge_code' => '2603504', 'name' => "Camocim de São Félix"]);
        City::create(['state' => 17, 'ibge_code' => '2603603', 'name' => "Camutanga"]);
        City::create(['state' => 17, 'ibge_code' => '2603702', 'name' => "Canhotinho"]);
        City::create(['state' => 17, 'ibge_code' => '2603801', 'name' => "Capoeiras"]);
        City::create(['state' => 17, 'ibge_code' => '2603900', 'name' => "Carnaíba"]);
        City::create(['state' => 17, 'ibge_code' => '2603926', 'name' => "Carnaubeira da Penha"]);
        City::create(['state' => 17, 'ibge_code' => '2604007', 'name' => "Carpina"]);
        City::create(['state' => 17, 'ibge_code' => '2604106', 'name' => "Caruaru"]);
        City::create(['state' => 17, 'ibge_code' => '2604155', 'name' => "Casinhas"]);
        City::create(['state' => 17, 'ibge_code' => '2604205', 'name' => "Catende"]);
        City::create(['state' => 17, 'ibge_code' => '2604304', 'name' => "Cedro"]);
        City::create(['state' => 17, 'ibge_code' => '2604403', 'name' => "Chã de Alegria"]);
        City::create(['state' => 17, 'ibge_code' => '2604502', 'name' => "Chã Grande"]);
        City::create(['state' => 17, 'ibge_code' => '2604601', 'name' => "Condado"]);
        City::create(['state' => 17, 'ibge_code' => '2604700', 'name' => "Correntes"]);
        City::create(['state' => 17, 'ibge_code' => '2604809', 'name' => "Cortês"]);
        City::create(['state' => 17, 'ibge_code' => '2604908', 'name' => "Cumaru"]);
        City::create(['state' => 17, 'ibge_code' => '2605004', 'name' => "Cupira"]);
        City::create(['state' => 17, 'ibge_code' => '2605103', 'name' => "Custódia"]);
        City::create(['state' => 17, 'ibge_code' => '2605152', 'name' => "Dormentes"]);
        City::create(['state' => 17, 'ibge_code' => '2605202', 'name' => "Escada"]);
        City::create(['state' => 17, 'ibge_code' => '2605301', 'name' => "Exu"]);
        City::create(['state' => 17, 'ibge_code' => '2605400', 'name' => "Feira Nova"]);
        City::create(['state' => 17, 'ibge_code' => '2605459', 'name' => "Fernando de Noronha"]);
        City::create(['state' => 17, 'ibge_code' => '2605509', 'name' => "Ferreiros"]);
        City::create(['state' => 17, 'ibge_code' => '2605608', 'name' => "Flores"]);
        City::create(['state' => 17, 'ibge_code' => '2605707', 'name' => "Floresta"]);
        City::create(['state' => 17, 'ibge_code' => '2605806', 'name' => "Frei Miguelinho"]);
        City::create(['state' => 17, 'ibge_code' => '2605905', 'name' => "Gameleira"]);
        City::create(['state' => 17, 'ibge_code' => '2606002', 'name' => "Garanhuns"]);
        City::create(['state' => 17, 'ibge_code' => '2606101', 'name' => "Glória do Goitá"]);
        City::create(['state' => 17, 'ibge_code' => '2606200', 'name' => "Goiana"]);
        City::create(['state' => 17, 'ibge_code' => '2606309', 'name' => "Granito"]);
        City::create(['state' => 17, 'ibge_code' => '2606408', 'name' => "Gravatá"]);
        City::create(['state' => 17, 'ibge_code' => '2606507', 'name' => "Iati"]);
        City::create(['state' => 17, 'ibge_code' => '2606606', 'name' => "Ibimirim"]);
        City::create(['state' => 17, 'ibge_code' => '2606705', 'name' => "Ibirajuba"]);
        City::create(['state' => 17, 'ibge_code' => '2606804', 'name' => "Igarassu"]);
        City::create(['state' => 17, 'ibge_code' => '2606903', 'name' => "Iguaraci"]);
        City::create(['state' => 17, 'ibge_code' => '2607604', 'name' => "Ilha de Itamaracá"]);
        City::create(['state' => 17, 'ibge_code' => '2607000', 'name' => "Inajá"]);
        City::create(['state' => 17, 'ibge_code' => '2607109', 'name' => "Ingazeira"]);
        City::create(['state' => 17, 'ibge_code' => '2607208', 'name' => "Ipojuca"]);
        City::create(['state' => 17, 'ibge_code' => '2607307', 'name' => "Ipubi"]);
        City::create(['state' => 17, 'ibge_code' => '2607406', 'name' => "Itacuruba"]);
        City::create(['state' => 17, 'ibge_code' => '2607505', 'name' => "Itaíba"]);
        City::create(['state' => 17, 'ibge_code' => '2607653', 'name' => "Itambé"]);
        City::create(['state' => 17, 'ibge_code' => '2607703', 'name' => "Itapetim"]);
        City::create(['state' => 17, 'ibge_code' => '2607752', 'name' => "Itapissuma"]);
        City::create(['state' => 17, 'ibge_code' => '2607802', 'name' => "Itaquitinga"]);
        City::create(['state' => 17, 'ibge_code' => '2607901', 'name' => "Jaboatão dos Guararapes"]);
        City::create(['state' => 17, 'ibge_code' => '2607950', 'name' => "Jaqueira"]);
        City::create(['state' => 17, 'ibge_code' => '2608008', 'name' => "Jataúba"]);
        City::create(['state' => 17, 'ibge_code' => '2608057', 'name' => "Jatobá"]);
        City::create(['state' => 17, 'ibge_code' => '2608107', 'name' => "João Alfredo"]);
        City::create(['state' => 17, 'ibge_code' => '2608206', 'name' => "Joaquim Nabuco"]);
        City::create(['state' => 17, 'ibge_code' => '2608255', 'name' => "Jucati"]);
        City::create(['state' => 17, 'ibge_code' => '2608305', 'name' => "Jupi"]);
        City::create(['state' => 17, 'ibge_code' => '2608404', 'name' => "Jurema"]);
        City::create(['state' => 17, 'ibge_code' => '2608453', 'name' => "Lagoa do Carro"]);
        City::create(['state' => 17, 'ibge_code' => '2608503', 'name' => "Lagoa de Itaenga"]);
        City::create(['state' => 17, 'ibge_code' => '2608602', 'name' => "Lagoa do Ouro"]);
        City::create(['state' => 17, 'ibge_code' => '2608701', 'name' => "Lagoa dos Gatos"]);
        City::create(['state' => 17, 'ibge_code' => '2608750', 'name' => "Lagoa Grande"]);
        City::create(['state' => 17, 'ibge_code' => '2608800', 'name' => "Lajedo"]);
        City::create(['state' => 17, 'ibge_code' => '2608909', 'name' => "Limoeiro"]);
        City::create(['state' => 17, 'ibge_code' => '2609006', 'name' => "Macaparana"]);
        City::create(['state' => 17, 'ibge_code' => '2609105', 'name' => "Machados"]);
        City::create(['state' => 17, 'ibge_code' => '2609154', 'name' => "Manari"]);
        City::create(['state' => 17, 'ibge_code' => '2609204', 'name' => "Maraial"]);
        City::create(['state' => 17, 'ibge_code' => '2609303', 'name' => "Mirandiba"]);
        City::create(['state' => 17, 'ibge_code' => '2614303', 'name' => "Moreilândia"]);
        City::create(['state' => 17, 'ibge_code' => '2609402', 'name' => "Moreno"]);
        City::create(['state' => 17, 'ibge_code' => '2609501', 'name' => "Nazaré da Mata"]);
        City::create(['state' => 17, 'ibge_code' => '2609600', 'name' => "Olinda"]);
        City::create(['state' => 17, 'ibge_code' => '2609709', 'name' => "Orobó"]);
        City::create(['state' => 17, 'ibge_code' => '2609808', 'name' => "Orocó"]);
        City::create(['state' => 17, 'ibge_code' => '2609907', 'name' => "Ouricuri"]);
        City::create(['state' => 17, 'ibge_code' => '2610004', 'name' => "Palmares"]);
        City::create(['state' => 17, 'ibge_code' => '2610103', 'name' => "Palmeirina"]);
        City::create(['state' => 17, 'ibge_code' => '2610202', 'name' => "Panelas"]);
        City::create(['state' => 17, 'ibge_code' => '2610301', 'name' => "Paranatama"]);
        City::create(['state' => 17, 'ibge_code' => '2610400', 'name' => "Parnamirim"]);
        City::create(['state' => 17, 'ibge_code' => '2610509', 'name' => "Passira"]);
        City::create(['state' => 17, 'ibge_code' => '2610608', 'name' => "Paudalho"]);
        City::create(['state' => 17, 'ibge_code' => '2610707', 'name' => "Paulista"]);
        City::create(['state' => 17, 'ibge_code' => '2610806', 'name' => "Pedra"]);
        City::create(['state' => 17, 'ibge_code' => '2610905', 'name' => "Pesqueira"]);
        City::create(['state' => 17, 'ibge_code' => '2611002', 'name' => "Petrolândia"]);
        City::create(['state' => 17, 'ibge_code' => '2611101', 'name' => "Petrolina"]);
        City::create(['state' => 17, 'ibge_code' => '2611200', 'name' => "Poção"]);
        City::create(['state' => 17, 'ibge_code' => '2611309', 'name' => "Pombos"]);
        City::create(['state' => 17, 'ibge_code' => '2611408', 'name' => "Primavera"]);
        City::create(['state' => 17, 'ibge_code' => '2611507', 'name' => "Quipapá"]);
        City::create(['state' => 17, 'ibge_code' => '2611533', 'name' => "Quixaba"]);
        City::create(['state' => 17, 'ibge_code' => '2611606', 'name' => "Recife"]);
        City::create(['state' => 17, 'ibge_code' => '2611705', 'name' => "Riacho das Almas"]);
        City::create(['state' => 17, 'ibge_code' => '2611804', 'name' => "Ribeirão"]);
        City::create(['state' => 17, 'ibge_code' => '2611903', 'name' => "Rio Formoso"]);
        City::create(['state' => 17, 'ibge_code' => '2612000', 'name' => "Sairé"]);
        City::create(['state' => 17, 'ibge_code' => '2612109', 'name' => "Salgadinho"]);
        City::create(['state' => 17, 'ibge_code' => '2612208', 'name' => "Salgueiro"]);
        City::create(['state' => 17, 'ibge_code' => '2612307', 'name' => "Saloá"]);
        City::create(['state' => 17, 'ibge_code' => '2612406', 'name' => "Sanharó"]);
        City::create(['state' => 17, 'ibge_code' => '2612455', 'name' => "Santa Cruz"]);
        City::create(['state' => 17, 'ibge_code' => '2612471', 'name' => "Santa Cruz da Baixa Verde"]);
        City::create(['state' => 17, 'ibge_code' => '2612505', 'name' => "Santa Cruz do Capibaribe"]);
        City::create(['state' => 17, 'ibge_code' => '2612554', 'name' => "Santa Filomena"]);
        City::create(['state' => 17, 'ibge_code' => '2612604', 'name' => "Santa Maria da Boa Vista"]);
        City::create(['state' => 17, 'ibge_code' => '2612703', 'name' => "Santa Maria do Cambucá"]);
        City::create(['state' => 17, 'ibge_code' => '2612802', 'name' => "Santa Terezinha"]);
        City::create(['state' => 17, 'ibge_code' => '2612901', 'name' => "São Benedito do Sul"]);
        City::create(['state' => 17, 'ibge_code' => '2613008', 'name' => "São Bento do Una"]);
        City::create(['state' => 17, 'ibge_code' => '2613107', 'name' => "São Caitano"]);
        City::create(['state' => 17, 'ibge_code' => '2613206', 'name' => "São João"]);
        City::create(['state' => 17, 'ibge_code' => '2613305', 'name' => "São Joaquim do Monte"]);
        City::create(['state' => 17, 'ibge_code' => '2613404', 'name' => "São José da Coroa Grande"]);
        City::create(['state' => 17, 'ibge_code' => '2613503', 'name' => "São José do Belmonte"]);
        City::create(['state' => 17, 'ibge_code' => '2613602', 'name' => "São José do Egito"]);
        City::create(['state' => 17, 'ibge_code' => '2613701', 'name' => "São Lourenço da Mata"]);
        City::create(['state' => 17, 'ibge_code' => '2613800', 'name' => "São Vicente Ferrer"]);
        City::create(['state' => 17, 'ibge_code' => '2613909', 'name' => "Serra Talhada"]);
        City::create(['state' => 17, 'ibge_code' => '2614006', 'name' => "Serrita"]);
        City::create(['state' => 17, 'ibge_code' => '2614105', 'name' => "Sertânia"]);
        City::create(['state' => 17, 'ibge_code' => '2614204', 'name' => "Sirinhaém"]);
        City::create(['state' => 17, 'ibge_code' => '2614402', 'name' => "Solidão"]);
        City::create(['state' => 17, 'ibge_code' => '2614501', 'name' => "Surubim"]);
        City::create(['state' => 17, 'ibge_code' => '2614600', 'name' => "Tabira"]);
        City::create(['state' => 17, 'ibge_code' => '2614709', 'name' => "Tacaimbó"]);
        City::create(['state' => 17, 'ibge_code' => '2614808', 'name' => "Tacaratu"]);
        City::create(['state' => 17, 'ibge_code' => '2614857', 'name' => "Tamandaré"]);
        City::create(['state' => 17, 'ibge_code' => '2615003', 'name' => "Taquaritinga do Norte"]);
        City::create(['state' => 17, 'ibge_code' => '2615102', 'name' => "Terezinha"]);
        City::create(['state' => 17, 'ibge_code' => '2615201', 'name' => "Terra Nova"]);
        City::create(['state' => 17, 'ibge_code' => '2615300', 'name' => "Timbaúba"]);
        City::create(['state' => 17, 'ibge_code' => '2615409', 'name' => "Toritama"]);
        City::create(['state' => 17, 'ibge_code' => '2615508', 'name' => "Tracunhaém"]);
        City::create(['state' => 17, 'ibge_code' => '2615607', 'name' => "Trindade"]);
        City::create(['state' => 17, 'ibge_code' => '2615706', 'name' => "Triunfo"]);
        City::create(['state' => 17, 'ibge_code' => '2615805', 'name' => "Tupanatinga"]);
        City::create(['state' => 17, 'ibge_code' => '2615904', 'name' => "Tuparetama"]);
        City::create(['state' => 17, 'ibge_code' => '2616001', 'name' => "Venturosa"]);
        City::create(['state' => 17, 'ibge_code' => '2616100', 'name' => "Verdejante"]);
        City::create(['state' => 17, 'ibge_code' => '2616183', 'name' => "Vertente do Lério"]);
        City::create(['state' => 17, 'ibge_code' => '2616209', 'name' => "Vertentes"]);
        City::create(['state' => 17, 'ibge_code' => '2616308', 'name' => "Vicência"]);
        City::create(['state' => 17, 'ibge_code' => '2616407', 'name' => "Vitória de Santo Antão"]);
        City::create(['state' => 17, 'ibge_code' => '2616506', 'name' => "Xexéu"]);

        City::create(['state' => 18, 'ibge_code' => '2200053', 'name' => "Acauã"]);
        City::create(['state' => 18, 'ibge_code' => '2200103', 'name' => "Agricolândia"]);
        City::create(['state' => 18, 'ibge_code' => '2200202', 'name' => "Água Branca"]);
        City::create(['state' => 18, 'ibge_code' => '2200251', 'name' => "Alagoinha do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2200277', 'name' => "Alegrete do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2200301', 'name' => "Alto Longá"]);
        City::create(['state' => 18, 'ibge_code' => '2200400', 'name' => "Altos"]);
        City::create(['state' => 18, 'ibge_code' => '2200459', 'name' => "Alvorada do Gurguéia"]);
        City::create(['state' => 18, 'ibge_code' => '2200509', 'name' => "Amarante"]);
        City::create(['state' => 18, 'ibge_code' => '2200608', 'name' => "Angical do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2200707', 'name' => "Anísio de Abreu"]);
        City::create(['state' => 18, 'ibge_code' => '2200806', 'name' => "Antônio Almeida"]);
        City::create(['state' => 18, 'ibge_code' => '2200905', 'name' => "Aroazes"]);
        City::create(['state' => 18, 'ibge_code' => '2200954', 'name' => "Aroeiras do Itaim"]);
        City::create(['state' => 18, 'ibge_code' => '2201002', 'name' => "Arraial"]);
        City::create(['state' => 18, 'ibge_code' => '2201051', 'name' => "Assunção do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201101', 'name' => "Avelino Lopes"]);
        City::create(['state' => 18, 'ibge_code' => '2201150', 'name' => "Baixa Grande do Ribeiro"]);
        City::create(['state' => 18, 'ibge_code' => '2201176', 'name' => "Barra D'Alcântara"]);
        City::create(['state' => 18, 'ibge_code' => '2201200', 'name' => "Barras"]);
        City::create(['state' => 18, 'ibge_code' => '2201309', 'name' => "Barreiras do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201408', 'name' => "Barro Duro"]);
        City::create(['state' => 18, 'ibge_code' => '2201507', 'name' => "Batalha"]);
        City::create(['state' => 18, 'ibge_code' => '2201556', 'name' => "Bela Vista do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201572', 'name' => "Belém do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201606', 'name' => "Beneditinos"]);
        City::create(['state' => 18, 'ibge_code' => '2201705', 'name' => "Bertolínia"]);
        City::create(['state' => 18, 'ibge_code' => '2201739', 'name' => "Betânia do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201770', 'name' => "Boa Hora"]);
        City::create(['state' => 18, 'ibge_code' => '2201804', 'name' => "Bocaina"]);
        City::create(['state' => 18, 'ibge_code' => '2201903', 'name' => "Bom Jesus"]);
        City::create(['state' => 18, 'ibge_code' => '2201919', 'name' => "Bom Princípio do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201929', 'name' => "Bonfim do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201945', 'name' => "Boqueirão do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2201960', 'name' => "Brasileira"]);
        City::create(['state' => 18, 'ibge_code' => '2201988', 'name' => "Brejo do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202000', 'name' => "Buriti dos Lopes"]);
        City::create(['state' => 18, 'ibge_code' => '2202026', 'name' => "Buriti dos Montes"]);
        City::create(['state' => 18, 'ibge_code' => '2202059', 'name' => "Cabeceiras do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202075', 'name' => "Cajazeiras do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202083', 'name' => "Cajueiro da Praia"]);
        City::create(['state' => 18, 'ibge_code' => '2202091', 'name' => "Caldeirão Grande do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202109', 'name' => "Campinas do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202117', 'name' => "Campo Alegre do Fidalgo"]);
        City::create(['state' => 18, 'ibge_code' => '2202133', 'name' => "Campo Grande do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202174', 'name' => "Campo Largo do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202208', 'name' => "Campo Maior"]);
        City::create(['state' => 18, 'ibge_code' => '2202251', 'name' => "Canavieira"]);
        City::create(['state' => 18, 'ibge_code' => '2202307', 'name' => "Canto do Buriti"]);
        City::create(['state' => 18, 'ibge_code' => '2202406', 'name' => "Capitão de Campos"]);
        City::create(['state' => 18, 'ibge_code' => '2202455', 'name' => "Capitão Gervásio Oliveira"]);
        City::create(['state' => 18, 'ibge_code' => '2202505', 'name' => "Caracol"]);
        City::create(['state' => 18, 'ibge_code' => '2202539', 'name' => "Caraúbas do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202554', 'name' => "Caridade do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202604', 'name' => "Castelo do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202653', 'name' => "Caxingó"]);
        City::create(['state' => 18, 'ibge_code' => '2202703', 'name' => "Cocal"]);
        City::create(['state' => 18, 'ibge_code' => '2202711', 'name' => "Cocal de Telha"]);
        City::create(['state' => 18, 'ibge_code' => '2202729', 'name' => "Cocal dos Alves"]);
        City::create(['state' => 18, 'ibge_code' => '2202737', 'name' => "Coivaras"]);
        City::create(['state' => 18, 'ibge_code' => '2202752', 'name' => "Colônia do Gurguéia"]);
        City::create(['state' => 18, 'ibge_code' => '2202778', 'name' => "Colônia do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2202802', 'name' => "Conceição do Canindé"]);
        City::create(['state' => 18, 'ibge_code' => '2202851', 'name' => "Coronel José Dias"]);
        City::create(['state' => 18, 'ibge_code' => '2202901', 'name' => "Corrente"]);
        City::create(['state' => 18, 'ibge_code' => '2203008', 'name' => "Cristalândia do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2203107', 'name' => "Cristino Castro"]);
        City::create(['state' => 18, 'ibge_code' => '2203206', 'name' => "Curimatá"]);
        City::create(['state' => 18, 'ibge_code' => '2203230', 'name' => "Currais"]);
        City::create(['state' => 18, 'ibge_code' => '2203271', 'name' => "Curral Novo do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2203255', 'name' => "Curralinhos"]);
        City::create(['state' => 18, 'ibge_code' => '2203305', 'name' => "Demerval Lobão"]);
        City::create(['state' => 18, 'ibge_code' => '2203354', 'name' => "Dirceu Arcoverde"]);
        City::create(['state' => 18, 'ibge_code' => '2203404', 'name' => "Dom Expedito Lopes"]);
        City::create(['state' => 18, 'ibge_code' => '2203453', 'name' => "Dom Inocêncio"]);
        City::create(['state' => 18, 'ibge_code' => '2203420', 'name' => "Domingos Mourão"]);
        City::create(['state' => 18, 'ibge_code' => '2203503', 'name' => "Elesbão Veloso"]);
        City::create(['state' => 18, 'ibge_code' => '2203602', 'name' => "Eliseu Martins"]);
        City::create(['state' => 18, 'ibge_code' => '2203701', 'name' => "Esperantina"]);
        City::create(['state' => 18, 'ibge_code' => '2203750', 'name' => "Fartura do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2203800', 'name' => "Flores do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2203859', 'name' => "Floresta do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2203909', 'name' => "Floriano"]);
        City::create(['state' => 18, 'ibge_code' => '2204006', 'name' => "Francinópolis"]);
        City::create(['state' => 18, 'ibge_code' => '2204105', 'name' => "Francisco Ayres"]);
        City::create(['state' => 18, 'ibge_code' => '2204154', 'name' => "Francisco Macedo"]);
        City::create(['state' => 18, 'ibge_code' => '2204204', 'name' => "Francisco Santos"]);
        City::create(['state' => 18, 'ibge_code' => '2204303', 'name' => "Fronteiras"]);
        City::create(['state' => 18, 'ibge_code' => '2204352', 'name' => "Geminiano"]);
        City::create(['state' => 18, 'ibge_code' => '2204402', 'name' => "Gilbués"]);
        City::create(['state' => 18, 'ibge_code' => '2204501', 'name' => "Guadalupe"]);
        City::create(['state' => 18, 'ibge_code' => '2204550', 'name' => "Guaribas"]);
        City::create(['state' => 18, 'ibge_code' => '2204600', 'name' => "Hugo Napoleão"]);
        City::create(['state' => 18, 'ibge_code' => '2204659', 'name' => "Ilha Grande"]);
        City::create(['state' => 18, 'ibge_code' => '2204709', 'name' => "Inhuma"]);
        City::create(['state' => 18, 'ibge_code' => '2204808', 'name' => "Ipiranga do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2204907', 'name' => "Isaías Coelho"]);
        City::create(['state' => 18, 'ibge_code' => '2205003', 'name' => "Itainópolis"]);
        City::create(['state' => 18, 'ibge_code' => '2205102', 'name' => "Itaueira"]);
        City::create(['state' => 18, 'ibge_code' => '2205151', 'name' => "Jacobina do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2205201', 'name' => "Jaicós"]);
        City::create(['state' => 18, 'ibge_code' => '2205250', 'name' => "Jardim do Mulato"]);
        City::create(['state' => 18, 'ibge_code' => '2205276', 'name' => "Jatobá do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2205300', 'name' => "Jerumenha"]);
        City::create(['state' => 18, 'ibge_code' => '2205359', 'name' => "João Costa"]);
        City::create(['state' => 18, 'ibge_code' => '2205409', 'name' => "Joaquim Pires"]);
        City::create(['state' => 18, 'ibge_code' => '2205458', 'name' => "Joca Marques"]);
        City::create(['state' => 18, 'ibge_code' => '2205508', 'name' => "José de Freitas"]);
        City::create(['state' => 18, 'ibge_code' => '2205516', 'name' => "Juazeiro do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2205524', 'name' => "Júlio Borges"]);
        City::create(['state' => 18, 'ibge_code' => '2205532', 'name' => "Jurema"]);
        City::create(['state' => 18, 'ibge_code' => '2205557', 'name' => "Lagoa Alegre"]);
        City::create(['state' => 18, 'ibge_code' => '2205573', 'name' => "Lagoa de São Francisco"]);
        City::create(['state' => 18, 'ibge_code' => '2205565', 'name' => "Lagoa do Barro do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2205581', 'name' => "Lagoa do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2205599', 'name' => "Lagoa do Sítio"]);
        City::create(['state' => 18, 'ibge_code' => '2205540', 'name' => "Lagoinha do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2205607', 'name' => "Landri Sales"]);
        City::create(['state' => 18, 'ibge_code' => '2205706', 'name' => "Luís Correia"]);
        City::create(['state' => 18, 'ibge_code' => '2205805', 'name' => "Luzilândia"]);
        City::create(['state' => 18, 'ibge_code' => '2205854', 'name' => "Madeiro"]);
        City::create(['state' => 18, 'ibge_code' => '2205904', 'name' => "Manoel Emídio"]);
        City::create(['state' => 18, 'ibge_code' => '2205953', 'name' => "Marcolândia"]);
        City::create(['state' => 18, 'ibge_code' => '2206001', 'name' => "Marcos Parente"]);
        City::create(['state' => 18, 'ibge_code' => '2206050', 'name' => "Massapê do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2206100', 'name' => "Matias Olímpio"]);
        City::create(['state' => 18, 'ibge_code' => '2206209', 'name' => "Miguel Alves"]);
        City::create(['state' => 18, 'ibge_code' => '2206308', 'name' => "Miguel Leão"]);
        City::create(['state' => 18, 'ibge_code' => '2206357', 'name' => "Milton Brandão"]);
        City::create(['state' => 18, 'ibge_code' => '2206407', 'name' => "Monsenhor Gil"]);
        City::create(['state' => 18, 'ibge_code' => '2206506', 'name' => "Monsenhor Hipólito"]);
        City::create(['state' => 18, 'ibge_code' => '2206605', 'name' => "Monte Alegre do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2206654', 'name' => "Morro Cabeça no Tempo"]);
        City::create(['state' => 18, 'ibge_code' => '2206670', 'name' => "Morro do Chapéu do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2206696', 'name' => "Murici dos Portelas"]);
        City::create(['state' => 18, 'ibge_code' => '2206704', 'name' => "Nazaré do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2206720', 'name' => "Nazária "]);
        City::create(['state' => 18, 'ibge_code' => '2206753', 'name' => "Nossa Senhora de Nazaré"]);
        City::create(['state' => 18, 'ibge_code' => '2206803', 'name' => "Nossa Senhora dos Remédios"]);
        City::create(['state' => 18, 'ibge_code' => '2207959', 'name' => "Nova Santa Rita"]);
        City::create(['state' => 18, 'ibge_code' => '2206902', 'name' => "Novo Oriente do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2206951', 'name' => "Novo Santo Antônio"]);
        City::create(['state' => 18, 'ibge_code' => '2207009', 'name' => "Oeiras"]);
        City::create(['state' => 18, 'ibge_code' => '2207108', 'name' => "Olho D'Água do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2207207', 'name' => "Padre Marcos"]);
        City::create(['state' => 18, 'ibge_code' => '2207306', 'name' => "Paes Landim"]);
        City::create(['state' => 18, 'ibge_code' => '2207355', 'name' => "Pajeú do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2207405', 'name' => "Palmeira do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2207504', 'name' => "Palmeirais"]);
        City::create(['state' => 18, 'ibge_code' => '2207553', 'name' => "Paquetá"]);
        City::create(['state' => 18, 'ibge_code' => '2207603', 'name' => "Parnaguá"]);
        City::create(['state' => 18, 'ibge_code' => '2207702', 'name' => "Parnaíba"]);
        City::create(['state' => 18, 'ibge_code' => '2207751', 'name' => "Passagem Franca do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2207777', 'name' => "Patos do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2207793', 'name' => "Pau D'Arco do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2207801', 'name' => "Paulistana"]);
        City::create(['state' => 18, 'ibge_code' => '2207850', 'name' => "Pavussu"]);
        City::create(['state' => 18, 'ibge_code' => '2207900', 'name' => "Pedro II"]);
        City::create(['state' => 18, 'ibge_code' => '2207934', 'name' => "Pedro Laurentino"]);
        City::create(['state' => 18, 'ibge_code' => '2208007', 'name' => "Picos"]);
        City::create(['state' => 18, 'ibge_code' => '2208106', 'name' => "Pimenteiras"]);
        City::create(['state' => 18, 'ibge_code' => '2208205', 'name' => "Pio IX"]);
        City::create(['state' => 18, 'ibge_code' => '2208304', 'name' => "Piracuruca"]);
        City::create(['state' => 18, 'ibge_code' => '2208403', 'name' => "Piripiri"]);
        City::create(['state' => 18, 'ibge_code' => '2208502', 'name' => "Porto"]);
        City::create(['state' => 18, 'ibge_code' => '2208551', 'name' => "Porto Alegre do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2208601', 'name' => "Prata do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2208650', 'name' => "Queimada Nova"]);
        City::create(['state' => 18, 'ibge_code' => '2208700', 'name' => "Redenção do Gurguéia"]);
        City::create(['state' => 18, 'ibge_code' => '2208809', 'name' => "Regeneração"]);
        City::create(['state' => 18, 'ibge_code' => '2208858', 'name' => "Riacho Frio"]);
        City::create(['state' => 18, 'ibge_code' => '2208874', 'name' => "Ribeira do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2208908', 'name' => "Ribeiro Gonçalves"]);
        City::create(['state' => 18, 'ibge_code' => '2209005', 'name' => "Rio Grande do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209104', 'name' => "Santa Cruz do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209153', 'name' => "Santa Cruz dos Milagres"]);
        City::create(['state' => 18, 'ibge_code' => '2209203', 'name' => "Santa Filomena"]);
        City::create(['state' => 18, 'ibge_code' => '2209302', 'name' => "Santa Luz"]);
        City::create(['state' => 18, 'ibge_code' => '2209377', 'name' => "Santa Rosa do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209351', 'name' => "Santana do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209401', 'name' => "Santo Antônio de Lisboa"]);
        City::create(['state' => 18, 'ibge_code' => '2209450', 'name' => "Santo Antônio dos Milagres"]);
        City::create(['state' => 18, 'ibge_code' => '2209500', 'name' => "Santo Inácio do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209559', 'name' => "São Braz do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209609', 'name' => "São Félix do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209658', 'name' => "São Francisco de Assis do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209708', 'name' => "São Francisco do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209757', 'name' => "São Gonçalo do Gurguéia"]);
        City::create(['state' => 18, 'ibge_code' => '2209807', 'name' => "São Gonçalo do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2209856', 'name' => "São João da Canabrava"]);
        City::create(['state' => 18, 'ibge_code' => '2209872', 'name' => "São João da Fronteira"]);
        City::create(['state' => 18, 'ibge_code' => '2209906', 'name' => "São João da Serra"]);
        City::create(['state' => 18, 'ibge_code' => '2209955', 'name' => "São João da Varjota"]);
        City::create(['state' => 18, 'ibge_code' => '2209971', 'name' => "São João do Arraial"]);
        City::create(['state' => 18, 'ibge_code' => '2210003', 'name' => "São João do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2210052', 'name' => "São José do Divino"]);
        City::create(['state' => 18, 'ibge_code' => '2210102', 'name' => "São José do Peixe"]);
        City::create(['state' => 18, 'ibge_code' => '2210201', 'name' => "São José do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2210300', 'name' => "São Julião"]);
        City::create(['state' => 18, 'ibge_code' => '2210359', 'name' => "São Lourenço do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2210375', 'name' => "São Luis do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2210383', 'name' => "São Miguel da Baixa Grande"]);
        City::create(['state' => 18, 'ibge_code' => '2210391', 'name' => "São Miguel do Fidalgo"]);
        City::create(['state' => 18, 'ibge_code' => '2210409', 'name' => "São Miguel do Tapuio"]);
        City::create(['state' => 18, 'ibge_code' => '2210508', 'name' => "São Pedro do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2210607', 'name' => "São Raimundo Nonato"]);
        City::create(['state' => 18, 'ibge_code' => '2210623', 'name' => "Sebastião Barros"]);
        City::create(['state' => 18, 'ibge_code' => '2210631', 'name' => "Sebastião Leal"]);
        City::create(['state' => 18, 'ibge_code' => '2210656', 'name' => "Sigefredo Pacheco"]);
        City::create(['state' => 18, 'ibge_code' => '2210706', 'name' => "Simões"]);
        City::create(['state' => 18, 'ibge_code' => '2210805', 'name' => "Simplício Mendes"]);
        City::create(['state' => 18, 'ibge_code' => '2210904', 'name' => "Socorro do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2210938', 'name' => "Sussuapara"]);
        City::create(['state' => 18, 'ibge_code' => '2210953', 'name' => "Tamboril do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2210979', 'name' => "Tanque do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2211001', 'name' => "Teresina"]);
        City::create(['state' => 18, 'ibge_code' => '2211100', 'name' => "União"]);
        City::create(['state' => 18, 'ibge_code' => '2211209', 'name' => "Uruçuí"]);
        City::create(['state' => 18, 'ibge_code' => '2211308', 'name' => "Valença do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2211357', 'name' => "Várzea Branca"]);
        City::create(['state' => 18, 'ibge_code' => '2211407', 'name' => "Várzea Grande"]);
        City::create(['state' => 18, 'ibge_code' => '2211506', 'name' => "Vera Mendes"]);
        City::create(['state' => 18, 'ibge_code' => '2211605', 'name' => "Vila Nova do Piauí"]);
        City::create(['state' => 18, 'ibge_code' => '2211704', 'name' => "Wall Ferraz"]);

        City::create(['state' => 19, 'ibge_code' => '3300100', 'name' => "Angra dos Reis"]);
        City::create(['state' => 19, 'ibge_code' => '3300159', 'name' => "Aperibé"]);
        City::create(['state' => 19, 'ibge_code' => '3300209', 'name' => "Araruama"]);
        City::create(['state' => 19, 'ibge_code' => '3300225', 'name' => "Areal"]);
        City::create(['state' => 19, 'ibge_code' => '3300233', 'name' => "Armação dos Búzios"]);
        City::create(['state' => 19, 'ibge_code' => '3300258', 'name' => "Arraial do Cabo"]);
        City::create(['state' => 19, 'ibge_code' => '3300308', 'name' => "Barra do Piraí"]);
        City::create(['state' => 19, 'ibge_code' => '3300407', 'name' => "Barra Mansa"]);
        City::create(['state' => 19, 'ibge_code' => '3300456', 'name' => "Belford Roxo"]);
        City::create(['state' => 19, 'ibge_code' => '3300506', 'name' => "Bom Jardim"]);
        City::create(['state' => 19, 'ibge_code' => '3300605', 'name' => "Bom Jesus do Itabapoana"]);
        City::create(['state' => 19, 'ibge_code' => '3300704', 'name' => "Cabo Frio"]);
        City::create(['state' => 19, 'ibge_code' => '3300803', 'name' => "Cachoeiras de Macacu"]);
        City::create(['state' => 19, 'ibge_code' => '3300902', 'name' => "Cambuci"]);
        City::create(['state' => 19, 'ibge_code' => '3301009', 'name' => "Campos dos Goytacazes"]);
        City::create(['state' => 19, 'ibge_code' => '3301108', 'name' => "Cantagalo"]);
        City::create(['state' => 19, 'ibge_code' => '3300936', 'name' => "Carapebus"]);
        City::create(['state' => 19, 'ibge_code' => '3301157', 'name' => "Cardoso Moreira"]);
        City::create(['state' => 19, 'ibge_code' => '3301207', 'name' => "Carmo"]);
        City::create(['state' => 19, 'ibge_code' => '3301306', 'name' => "Casimiro de Abreu"]);
        City::create(['state' => 19, 'ibge_code' => '3300951', 'name' => "Comendador Levy Gasparian"]);
        City::create(['state' => 19, 'ibge_code' => '3301405', 'name' => "Conceição de Macabu"]);
        City::create(['state' => 19, 'ibge_code' => '3301504', 'name' => "Cordeiro"]);
        City::create(['state' => 19, 'ibge_code' => '3301603', 'name' => "Duas Barras"]);
        City::create(['state' => 19, 'ibge_code' => '3301702', 'name' => "Duque de Caxias"]);
        City::create(['state' => 19, 'ibge_code' => '3301801', 'name' => "Engenheiro Paulo de Frontin"]);
        City::create(['state' => 19, 'ibge_code' => '3301850', 'name' => "Guapimirim"]);
        City::create(['state' => 19, 'ibge_code' => '3301876', 'name' => "Iguaba Grande"]);
        City::create(['state' => 19, 'ibge_code' => '3301900', 'name' => "Itaboraí"]);
        City::create(['state' => 19, 'ibge_code' => '3302007', 'name' => "Itaguaí"]);
        City::create(['state' => 19, 'ibge_code' => '3302056', 'name' => "Italva"]);
        City::create(['state' => 19, 'ibge_code' => '3302106', 'name' => "Itaocara"]);
        City::create(['state' => 19, 'ibge_code' => '3302205', 'name' => "Itaperuna"]);
        City::create(['state' => 19, 'ibge_code' => '3302254', 'name' => "Itatiaia"]);
        City::create(['state' => 19, 'ibge_code' => '3302270', 'name' => "Japeri"]);
        City::create(['state' => 19, 'ibge_code' => '3302304', 'name' => "Laje do Muriaé"]);
        City::create(['state' => 19, 'ibge_code' => '3302403', 'name' => "Macaé"]);
        City::create(['state' => 19, 'ibge_code' => '3302452', 'name' => "Macuco"]);
        City::create(['state' => 19, 'ibge_code' => '3302502', 'name' => "Magé"]);
        City::create(['state' => 19, 'ibge_code' => '3302601', 'name' => "Mangaratiba"]);
        City::create(['state' => 19, 'ibge_code' => '3302700', 'name' => "Maricá"]);
        City::create(['state' => 19, 'ibge_code' => '3302809', 'name' => "Mendes"]);
        City::create(['state' => 19, 'ibge_code' => '3302858', 'name' => "Mesquita"]);
        City::create(['state' => 19, 'ibge_code' => '3302908', 'name' => "Miguel Pereira"]);
        City::create(['state' => 19, 'ibge_code' => '3303005', 'name' => "Miracema"]);
        City::create(['state' => 19, 'ibge_code' => '3303104', 'name' => "Natividade"]);
        City::create(['state' => 19, 'ibge_code' => '3303203', 'name' => "Nilópolis"]);
        City::create(['state' => 19, 'ibge_code' => '3303302', 'name' => "Niterói"]);
        City::create(['state' => 19, 'ibge_code' => '3303401', 'name' => "Nova Friburgo"]);
        City::create(['state' => 19, 'ibge_code' => '3303500', 'name' => "Nova Iguaçu"]);
        City::create(['state' => 19, 'ibge_code' => '3303609', 'name' => "Paracambi"]);
        City::create(['state' => 19, 'ibge_code' => '3303708', 'name' => "Paraíba do Sul"]);
        City::create(['state' => 19, 'ibge_code' => '3303807', 'name' => "Paraty"]);
        City::create(['state' => 19, 'ibge_code' => '3303856', 'name' => "Paty do Alferes"]);
        City::create(['state' => 19, 'ibge_code' => '3303906', 'name' => "Petrópolis"]);
        City::create(['state' => 19, 'ibge_code' => '3303955', 'name' => "Pinheiral"]);
        City::create(['state' => 19, 'ibge_code' => '3304003', 'name' => "Piraí"]);
        City::create(['state' => 19, 'ibge_code' => '3304102', 'name' => "Porciúncula"]);
        City::create(['state' => 19, 'ibge_code' => '3304110', 'name' => "Porto Real"]);
        City::create(['state' => 19, 'ibge_code' => '3304128', 'name' => "Quatis"]);
        City::create(['state' => 19, 'ibge_code' => '3304144', 'name' => "Queimados"]);
        City::create(['state' => 19, 'ibge_code' => '3304151', 'name' => "Quissamã"]);
        City::create(['state' => 19, 'ibge_code' => '3304201', 'name' => "Resende"]);
        City::create(['state' => 19, 'ibge_code' => '3304300', 'name' => "Rio Bonito"]);
        City::create(['state' => 19, 'ibge_code' => '3304409', 'name' => "Rio Claro"]);
        City::create(['state' => 19, 'ibge_code' => '3304508', 'name' => "Rio das Flores"]);
        City::create(['state' => 19, 'ibge_code' => '3304524', 'name' => "Rio das Ostras"]);
        City::create(['state' => 19, 'ibge_code' => '3304557', 'name' => "Rio de Janeiro"]);
        City::create(['state' => 19, 'ibge_code' => '3304607', 'name' => "Santa Maria Madalena"]);
        City::create(['state' => 19, 'ibge_code' => '3304706', 'name' => "Santo Antônio de Pádua"]);
        City::create(['state' => 19, 'ibge_code' => '3304805', 'name' => "São Fidélis"]);
        City::create(['state' => 19, 'ibge_code' => '3304755', 'name' => "São Francisco de Itabapoana"]);
        City::create(['state' => 19, 'ibge_code' => '3304904', 'name' => "São Gonçalo"]);
        City::create(['state' => 19, 'ibge_code' => '3305000', 'name' => "São João da Barra"]);
        City::create(['state' => 19, 'ibge_code' => '3305109', 'name' => "São João de Meriti"]);
        City::create(['state' => 19, 'ibge_code' => '3305133', 'name' => "São José de Ubá"]);
        City::create(['state' => 19, 'ibge_code' => '3305158', 'name' => "São José do Vale do Rio Preto"]);
        City::create(['state' => 19, 'ibge_code' => '3305208', 'name' => "São Pedro da Aldeia"]);
        City::create(['state' => 19, 'ibge_code' => '3305307', 'name' => "São Sebastião do Alto"]);
        City::create(['state' => 19, 'ibge_code' => '3305406', 'name' => "Sapucaia"]);
        City::create(['state' => 19, 'ibge_code' => '3305505', 'name' => "Saquarema"]);
        City::create(['state' => 19, 'ibge_code' => '3305554', 'name' => "Seropédica"]);
        City::create(['state' => 19, 'ibge_code' => '3305604', 'name' => "Silva Jardim"]);
        City::create(['state' => 19, 'ibge_code' => '3305703', 'name' => "Sumidouro"]);
        City::create(['state' => 19, 'ibge_code' => '3305752', 'name' => "Tanguá"]);
        City::create(['state' => 19, 'ibge_code' => '3305802', 'name' => "Teresópolis"]);
        City::create(['state' => 19, 'ibge_code' => '3305901', 'name' => "Trajano de Moraes"]);
        City::create(['state' => 19, 'ibge_code' => '3306008', 'name' => "Três Rios"]);
        City::create(['state' => 19, 'ibge_code' => '3306107', 'name' => "Valença"]);
        City::create(['state' => 19, 'ibge_code' => '3306156', 'name' => "Varre-Sai"]);
        City::create(['state' => 19, 'ibge_code' => '3306206', 'name' => "Vassouras"]);
        City::create(['state' => 19, 'ibge_code' => '3306305', 'name' => "Volta Redonda"]);

        City::create(['state' => 20, 'ibge_code' => '2400109', 'name' => "Acari"]);
        City::create(['state' => 20, 'ibge_code' => '2400208', 'name' => "Açu"]);
        City::create(['state' => 20, 'ibge_code' => '2400307', 'name' => "Afonso Bezerra"]);
        City::create(['state' => 20, 'ibge_code' => '2400406', 'name' => "Água Nova"]);
        City::create(['state' => 20, 'ibge_code' => '2400505', 'name' => "Alexandria"]);
        City::create(['state' => 20, 'ibge_code' => '2400604', 'name' => "Almino Afonso"]);
        City::create(['state' => 20, 'ibge_code' => '2400703', 'name' => "Alto do Rodrigues"]);
        City::create(['state' => 20, 'ibge_code' => '2400802', 'name' => "Angicos"]);
        City::create(['state' => 20, 'ibge_code' => '2400901', 'name' => "Antônio Martins"]);
        City::create(['state' => 20, 'ibge_code' => '2401008', 'name' => "Apodi"]);
        City::create(['state' => 20, 'ibge_code' => '2401107', 'name' => "Areia Branca"]);
        City::create(['state' => 20, 'ibge_code' => '2401206', 'name' => "Arês"]);
        City::create(['state' => 20, 'ibge_code' => '2401305', 'name' => "Augusto Severo"]);
        City::create(['state' => 20, 'ibge_code' => '2401404', 'name' => "Baía Formosa"]);
        City::create(['state' => 20, 'ibge_code' => '2401453', 'name' => "Baraúna"]);
        City::create(['state' => 20, 'ibge_code' => '2401503', 'name' => "Barcelona"]);
        City::create(['state' => 20, 'ibge_code' => '2401602', 'name' => "Bento Fernandes"]);
        City::create(['state' => 20, 'ibge_code' => '2401651', 'name' => "Bodó"]);
        City::create(['state' => 20, 'ibge_code' => '2401701', 'name' => "Bom Jesus"]);
        City::create(['state' => 20, 'ibge_code' => '2401800', 'name' => "Brejinho"]);
        City::create(['state' => 20, 'ibge_code' => '2401859', 'name' => "Caiçara do Norte"]);
        City::create(['state' => 20, 'ibge_code' => '2401909', 'name' => "Caiçara do Rio do Vento"]);
        City::create(['state' => 20, 'ibge_code' => '2402006', 'name' => "Caicó"]);
        City::create(['state' => 20, 'ibge_code' => '2402105', 'name' => "Campo Redondo"]);
        City::create(['state' => 20, 'ibge_code' => '2402204', 'name' => "Canguaretama"]);
        City::create(['state' => 20, 'ibge_code' => '2402303', 'name' => "Caraúbas"]);
        City::create(['state' => 20, 'ibge_code' => '2402402', 'name' => "Carnaúba dos Dantas"]);
        City::create(['state' => 20, 'ibge_code' => '2402501', 'name' => "Carnaubais"]);
        City::create(['state' => 20, 'ibge_code' => '2402600', 'name' => "Ceará-Mirim"]);
        City::create(['state' => 20, 'ibge_code' => '2402709', 'name' => "Cerro Corá"]);
        City::create(['state' => 20, 'ibge_code' => '2402808', 'name' => "Coronel Ezequiel"]);
        City::create(['state' => 20, 'ibge_code' => '2402907', 'name' => "Coronel João Pessoa"]);
        City::create(['state' => 20, 'ibge_code' => '2403004', 'name' => "Cruzeta"]);
        City::create(['state' => 20, 'ibge_code' => '2403103', 'name' => "Currais Novos"]);
        City::create(['state' => 20, 'ibge_code' => '2403202', 'name' => "Doutor Severiano"]);
        City::create(['state' => 20, 'ibge_code' => '2403301', 'name' => "Encanto"]);
        City::create(['state' => 20, 'ibge_code' => '2403400', 'name' => "Equador"]);
        City::create(['state' => 20, 'ibge_code' => '2403509', 'name' => "Espírito Santo"]);
        City::create(['state' => 20, 'ibge_code' => '2403608', 'name' => "Extremoz"]);
        City::create(['state' => 20, 'ibge_code' => '2403707', 'name' => "Felipe Guerra"]);
        City::create(['state' => 20, 'ibge_code' => '2403756', 'name' => "Fernando Pedroza"]);
        City::create(['state' => 20, 'ibge_code' => '2403806', 'name' => "Florânia"]);
        City::create(['state' => 20, 'ibge_code' => '2403905', 'name' => "Francisco Dantas"]);
        City::create(['state' => 20, 'ibge_code' => '2404002', 'name' => "Frutuoso Gomes"]);
        City::create(['state' => 20, 'ibge_code' => '2404101', 'name' => "Galinhos"]);
        City::create(['state' => 20, 'ibge_code' => '2404200', 'name' => "Goianinha"]);
        City::create(['state' => 20, 'ibge_code' => '2404309', 'name' => "Governador Dix-Sept Rosado"]);
        City::create(['state' => 20, 'ibge_code' => '2404408', 'name' => "Grossos"]);
        City::create(['state' => 20, 'ibge_code' => '2404507', 'name' => "Guamaré"]);
        City::create(['state' => 20, 'ibge_code' => '2404606', 'name' => "Ielmo Marinho"]);
        City::create(['state' => 20, 'ibge_code' => '2404705', 'name' => "Ipanguaçu"]);
        City::create(['state' => 20, 'ibge_code' => '2404804', 'name' => "Ipueira"]);
        City::create(['state' => 20, 'ibge_code' => '2404853', 'name' => "Itajá"]);
        City::create(['state' => 20, 'ibge_code' => '2404903', 'name' => "Itaú"]);
        City::create(['state' => 20, 'ibge_code' => '2405009', 'name' => "Jaçanã"]);
        City::create(['state' => 20, 'ibge_code' => '2405108', 'name' => "Jandaíra"]);
        City::create(['state' => 20, 'ibge_code' => '2405207', 'name' => "Janduís"]);
        City::create(['state' => 20, 'ibge_code' => '2405306', 'name' => "Januário Cicco"]);
        City::create(['state' => 20, 'ibge_code' => '2405405', 'name' => "Japi"]);
        City::create(['state' => 20, 'ibge_code' => '2405504', 'name' => "Jardim de Angicos"]);
        City::create(['state' => 20, 'ibge_code' => '2405603', 'name' => "Jardim de Piranhas"]);
        City::create(['state' => 20, 'ibge_code' => '2405702', 'name' => "Jardim do Seridó"]);
        City::create(['state' => 20, 'ibge_code' => '2405801', 'name' => "João Câmara"]);
        City::create(['state' => 20, 'ibge_code' => '2405900', 'name' => "João Dias"]);
        City::create(['state' => 20, 'ibge_code' => '2406007', 'name' => "José da Penha"]);
        City::create(['state' => 20, 'ibge_code' => '2406106', 'name' => "Jucurutu"]);
        City::create(['state' => 20, 'ibge_code' => '2406155', 'name' => "Jundiá"]);
        City::create(['state' => 20, 'ibge_code' => '2406205', 'name' => "Lagoa d'Anta"]);
        City::create(['state' => 20, 'ibge_code' => '2406304', 'name' => "Lagoa de Pedras"]);
        City::create(['state' => 20, 'ibge_code' => '2406403', 'name' => "Lagoa de Velhos"]);
        City::create(['state' => 20, 'ibge_code' => '2406502', 'name' => "Lagoa Nova"]);
        City::create(['state' => 20, 'ibge_code' => '2406601', 'name' => "Lagoa Salgada"]);
        City::create(['state' => 20, 'ibge_code' => '2406700', 'name' => "Lajes"]);
        City::create(['state' => 20, 'ibge_code' => '2406809', 'name' => "Lajes Pintadas"]);
        City::create(['state' => 20, 'ibge_code' => '2406908', 'name' => "Lucrécia"]);
        City::create(['state' => 20, 'ibge_code' => '2407005', 'name' => "Luís Gomes"]);
        City::create(['state' => 20, 'ibge_code' => '2407104', 'name' => "Macaíba"]);
        City::create(['state' => 20, 'ibge_code' => '2407203', 'name' => "Macau"]);
        City::create(['state' => 20, 'ibge_code' => '2407252', 'name' => "Major Sales"]);
        City::create(['state' => 20, 'ibge_code' => '2407302', 'name' => "Marcelino Vieira"]);
        City::create(['state' => 20, 'ibge_code' => '2407401', 'name' => "Martins"]);
        City::create(['state' => 20, 'ibge_code' => '2407500', 'name' => "Maxaranguape"]);
        City::create(['state' => 20, 'ibge_code' => '2407609', 'name' => "Messias Targino"]);
        City::create(['state' => 20, 'ibge_code' => '2407708', 'name' => "Montanhas"]);
        City::create(['state' => 20, 'ibge_code' => '2407807', 'name' => "Monte Alegre"]);
        City::create(['state' => 20, 'ibge_code' => '2407906', 'name' => "Monte das Gameleiras"]);
        City::create(['state' => 20, 'ibge_code' => '2408003', 'name' => "Mossoró"]);
        City::create(['state' => 20, 'ibge_code' => '2408102', 'name' => "Natal"]);
        City::create(['state' => 20, 'ibge_code' => '2408201', 'name' => "Nísia Floresta"]);
        City::create(['state' => 20, 'ibge_code' => '2408300', 'name' => "Nova Cruz"]);
        City::create(['state' => 20, 'ibge_code' => '2408409', 'name' => "Olho-d'Água do Borges"]);
        City::create(['state' => 20, 'ibge_code' => '2408508', 'name' => "Ouro Branco"]);
        City::create(['state' => 20, 'ibge_code' => '2408607', 'name' => "Paraná"]);
        City::create(['state' => 20, 'ibge_code' => '2408706', 'name' => "Paraú"]);
        City::create(['state' => 20, 'ibge_code' => '2408805', 'name' => "Parazinho"]);
        City::create(['state' => 20, 'ibge_code' => '2408904', 'name' => "Parelhas"]);
        City::create(['state' => 20, 'ibge_code' => '2403251', 'name' => "Parnamirim"]);
        City::create(['state' => 20, 'ibge_code' => '2409100', 'name' => "Passa e Fica"]);
        City::create(['state' => 20, 'ibge_code' => '2409209', 'name' => "Passagem"]);
        City::create(['state' => 20, 'ibge_code' => '2409308', 'name' => "Patu"]);
        City::create(['state' => 20, 'ibge_code' => '2409407', 'name' => "Pau dos Ferros"]);
        City::create(['state' => 20, 'ibge_code' => '2409506', 'name' => "Pedra Grande"]);
        City::create(['state' => 20, 'ibge_code' => '2409605', 'name' => "Pedra Preta"]);
        City::create(['state' => 20, 'ibge_code' => '2409704', 'name' => "Pedro Avelino"]);
        City::create(['state' => 20, 'ibge_code' => '2409803', 'name' => "Pedro Velho"]);
        City::create(['state' => 20, 'ibge_code' => '2409902', 'name' => "Pendências"]);
        City::create(['state' => 20, 'ibge_code' => '2410009', 'name' => "Pilões"]);
        City::create(['state' => 20, 'ibge_code' => '2410108', 'name' => "Poço Branco"]);
        City::create(['state' => 20, 'ibge_code' => '2410207', 'name' => "Portalegre"]);
        City::create(['state' => 20, 'ibge_code' => '2410256', 'name' => "Porto do Mangue"]);
        City::create(['state' => 20, 'ibge_code' => '2410306', 'name' => "Presidente Juscelino"]);
        City::create(['state' => 20, 'ibge_code' => '2410405', 'name' => "Pureza"]);
        City::create(['state' => 20, 'ibge_code' => '2410504', 'name' => "Rafael Fernandes"]);
        City::create(['state' => 20, 'ibge_code' => '2410603', 'name' => "Rafael Godeiro"]);
        City::create(['state' => 20, 'ibge_code' => '2410702', 'name' => "Riacho da Cruz"]);
        City::create(['state' => 20, 'ibge_code' => '2410801', 'name' => "Riacho de Santana"]);
        City::create(['state' => 20, 'ibge_code' => '2410900', 'name' => "Riachuelo"]);
        City::create(['state' => 20, 'ibge_code' => '2408953', 'name' => "Rio do Fogo"]);
        City::create(['state' => 20, 'ibge_code' => '2411007', 'name' => "Rodolfo Fernandes"]);
        City::create(['state' => 20, 'ibge_code' => '2411106', 'name' => "Ruy Barbosa"]);
        City::create(['state' => 20, 'ibge_code' => '2411205', 'name' => "Santa Cruz"]);
        City::create(['state' => 20, 'ibge_code' => '2409332', 'name' => "Santa Maria"]);
        City::create(['state' => 20, 'ibge_code' => '2411403', 'name' => "Santana do Matos"]);
        City::create(['state' => 20, 'ibge_code' => '2411429', 'name' => "Santana do Seridó"]);
        City::create(['state' => 20, 'ibge_code' => '2411502', 'name' => "Santo Antônio"]);
        City::create(['state' => 20, 'ibge_code' => '2411601', 'name' => "São Bento do Norte"]);
        City::create(['state' => 20, 'ibge_code' => '2411700', 'name' => "São Bento do Trairí"]);
        City::create(['state' => 20, 'ibge_code' => '2411809', 'name' => "São Fernando"]);
        City::create(['state' => 20, 'ibge_code' => '2411908', 'name' => "São Francisco do Oeste"]);
        City::create(['state' => 20, 'ibge_code' => '2412005', 'name' => "São Gonçalo do Amarante"]);
        City::create(['state' => 20, 'ibge_code' => '2412104', 'name' => "São João do Sabugi"]);
        City::create(['state' => 20, 'ibge_code' => '2412203', 'name' => "São José de Mipibu"]);
        City::create(['state' => 20, 'ibge_code' => '2412302', 'name' => "São José do Campestre"]);
        City::create(['state' => 20, 'ibge_code' => '2412401', 'name' => "São José do Seridó"]);
        City::create(['state' => 20, 'ibge_code' => '2412500', 'name' => "São Miguel"]);
        City::create(['state' => 20, 'ibge_code' => '2412559', 'name' => "São Miguel do Gostoso"]);
        City::create(['state' => 20, 'ibge_code' => '2412609', 'name' => "São Paulo do Potengi"]);
        City::create(['state' => 20, 'ibge_code' => '2412708', 'name' => "São Pedro"]);
        City::create(['state' => 20, 'ibge_code' => '2412807', 'name' => "São Rafael"]);
        City::create(['state' => 20, 'ibge_code' => '2412906', 'name' => "São Tomé"]);
        City::create(['state' => 20, 'ibge_code' => '2413003', 'name' => "São Vicente"]);
        City::create(['state' => 20, 'ibge_code' => '2413102', 'name' => "Senador Elói de Souza"]);
        City::create(['state' => 20, 'ibge_code' => '2413201', 'name' => "Senador Georgino Avelino"]);
        City::create(['state' => 20, 'ibge_code' => '2413300', 'name' => "Serra de São Bento"]);
        City::create(['state' => 20, 'ibge_code' => '2413359', 'name' => "Serra do Mel"]);
        City::create(['state' => 20, 'ibge_code' => '2413409', 'name' => "Serra Negra do Norte"]);
        City::create(['state' => 20, 'ibge_code' => '2413508', 'name' => "Serrinha"]);
        City::create(['state' => 20, 'ibge_code' => '2413557', 'name' => "Serrinha dos Pintos"]);
        City::create(['state' => 20, 'ibge_code' => '2413607', 'name' => "Severiano Melo"]);
        City::create(['state' => 20, 'ibge_code' => '2413706', 'name' => "Sítio Novo"]);
        City::create(['state' => 20, 'ibge_code' => '2413805', 'name' => "Taboleiro Grande"]);
        City::create(['state' => 20, 'ibge_code' => '2413904', 'name' => "Taipu"]);
        City::create(['state' => 20, 'ibge_code' => '2414001', 'name' => "Tangará"]);
        City::create(['state' => 20, 'ibge_code' => '2414100', 'name' => "Tenente Ananias"]);
        City::create(['state' => 20, 'ibge_code' => '2414159', 'name' => "Tenente Laurentino Cruz"]);
        City::create(['state' => 20, 'ibge_code' => '2411056', 'name' => "Tibau"]);
        City::create(['state' => 20, 'ibge_code' => '2414209', 'name' => "Tibau do Sul"]);
        City::create(['state' => 20, 'ibge_code' => '2414308', 'name' => "Timbaúba dos Batistas"]);
        City::create(['state' => 20, 'ibge_code' => '2414407', 'name' => "Touros"]);
        City::create(['state' => 20, 'ibge_code' => '2414456', 'name' => "Triunfo Potiguar"]);
        City::create(['state' => 20, 'ibge_code' => '2414506', 'name' => "Umarizal"]);
        City::create(['state' => 20, 'ibge_code' => '2414605', 'name' => "Upanema"]);
        City::create(['state' => 20, 'ibge_code' => '2414704', 'name' => "Várzea"]);
        City::create(['state' => 20, 'ibge_code' => '2414753', 'name' => "Venha-Ver"]);
        City::create(['state' => 20, 'ibge_code' => '2414803', 'name' => "Vera Cruz"]);
        City::create(['state' => 20, 'ibge_code' => '2414902', 'name' => "Viçosa"]);
        City::create(['state' => 20, 'ibge_code' => '2415008', 'name' => "Vila Flor"]);

        City::create(['state' => 21, 'ibge_code' => '4300034', 'name' => "Aceguá"]);
        City::create(['state' => 21, 'ibge_code' => '4300059', 'name' => "Água Santa"]);
        City::create(['state' => 21, 'ibge_code' => '4300109', 'name' => "Agudo"]);
        City::create(['state' => 21, 'ibge_code' => '4300208', 'name' => "Ajuricaba"]);
        City::create(['state' => 21, 'ibge_code' => '4300307', 'name' => "Alecrim"]);
        City::create(['state' => 21, 'ibge_code' => '4300406', 'name' => "Alegrete"]);
        City::create(['state' => 21, 'ibge_code' => '4300455', 'name' => "Alegria"]);
        City::create(['state' => 21, 'ibge_code' => '4300471', 'name' => "Almirante Tamandaré do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4300505', 'name' => "Alpestre"]);
        City::create(['state' => 21, 'ibge_code' => '4300554', 'name' => "Alto Alegre"]);
        City::create(['state' => 21, 'ibge_code' => '4300570', 'name' => "Alto Feliz"]);
        City::create(['state' => 21, 'ibge_code' => '4300604', 'name' => "Alvorada"]);
        City::create(['state' => 21, 'ibge_code' => '4300638', 'name' => "Amaral Ferrador"]);
        City::create(['state' => 21, 'ibge_code' => '4300646', 'name' => "Ametista do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4300661', 'name' => "André da Rocha"]);
        City::create(['state' => 21, 'ibge_code' => '4300703', 'name' => "Anta Gorda"]);
        City::create(['state' => 21, 'ibge_code' => '4300802', 'name' => "Antônio Prado"]);
        City::create(['state' => 21, 'ibge_code' => '4300851', 'name' => "Arambaré"]);
        City::create(['state' => 21, 'ibge_code' => '4300877', 'name' => "Araricá"]);
        City::create(['state' => 21, 'ibge_code' => '4300901', 'name' => "Aratiba"]);
        City::create(['state' => 21, 'ibge_code' => '4301008', 'name' => "Arroio do Meio"]);
        City::create(['state' => 21, 'ibge_code' => '4301073', 'name' => "Arroio do Padre"]);
        City::create(['state' => 21, 'ibge_code' => '4301057', 'name' => "Arroio do Sal"]);
        City::create(['state' => 21, 'ibge_code' => '4301206', 'name' => "Arroio do Tigre"]);
        City::create(['state' => 21, 'ibge_code' => '4301107', 'name' => "Arroio dos Ratos"]);
        City::create(['state' => 21, 'ibge_code' => '4301305', 'name' => "Arroio Grande"]);
        City::create(['state' => 21, 'ibge_code' => '4301404', 'name' => "Arvorezinha"]);
        City::create(['state' => 21, 'ibge_code' => '4301503', 'name' => "Augusto Pestana"]);
        City::create(['state' => 21, 'ibge_code' => '4301552', 'name' => "Áurea"]);
        City::create(['state' => 21, 'ibge_code' => '4301602', 'name' => "Bagé"]);
        City::create(['state' => 21, 'ibge_code' => '4301636', 'name' => "Balneário Pinhal"]);
        City::create(['state' => 21, 'ibge_code' => '4301651', 'name' => "Barão"]);
        City::create(['state' => 21, 'ibge_code' => '4301701', 'name' => "Barão de Cotegipe"]);
        City::create(['state' => 21, 'ibge_code' => '4301750', 'name' => "Barão do Triunfo"]);
        City::create(['state' => 21, 'ibge_code' => '4301859', 'name' => "Barra do Guarita"]);
        City::create(['state' => 21, 'ibge_code' => '4301875', 'name' => "Barra do Quaraí"]);
        City::create(['state' => 21, 'ibge_code' => '4301909', 'name' => "Barra do Ribeiro"]);
        City::create(['state' => 21, 'ibge_code' => '4301925', 'name' => "Barra do Rio Azul"]);
        City::create(['state' => 21, 'ibge_code' => '4301958', 'name' => "Barra Funda"]);
        City::create(['state' => 21, 'ibge_code' => '4301800', 'name' => "Barracão"]);
        City::create(['state' => 21, 'ibge_code' => '4302006', 'name' => "Barros Cassal"]);
        City::create(['state' => 21, 'ibge_code' => '4302055', 'name' => "Benjamin Constant do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4302105', 'name' => "Bento Gonçalves"]);
        City::create(['state' => 21, 'ibge_code' => '4302154', 'name' => "Boa Vista das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4302204', 'name' => "Boa Vista do Buricá"]);
        City::create(['state' => 21, 'ibge_code' => '4302220', 'name' => "Boa Vista do Cadeado"]);
        City::create(['state' => 21, 'ibge_code' => '4302238', 'name' => "Boa Vista do Incra"]);
        City::create(['state' => 21, 'ibge_code' => '4302253', 'name' => "Boa Vista do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4302303', 'name' => "Bom Jesus"]);
        City::create(['state' => 21, 'ibge_code' => '4302352', 'name' => "Bom Princípio"]);
        City::create(['state' => 21, 'ibge_code' => '4302378', 'name' => "Bom Progresso"]);
        City::create(['state' => 21, 'ibge_code' => '4302402', 'name' => "Bom Retiro do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4302451', 'name' => "Boqueirão do Leão"]);
        City::create(['state' => 21, 'ibge_code' => '4302501', 'name' => "Bossoroca"]);
        City::create(['state' => 21, 'ibge_code' => '4302584', 'name' => "Bozano"]);
        City::create(['state' => 21, 'ibge_code' => '4302600', 'name' => "Braga"]);
        City::create(['state' => 21, 'ibge_code' => '4302659', 'name' => "Brochier"]);
        City::create(['state' => 21, 'ibge_code' => '4302709', 'name' => "Butiá"]);
        City::create(['state' => 21, 'ibge_code' => '4302808', 'name' => "Caçapava do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4302907', 'name' => "Cacequi"]);
        City::create(['state' => 21, 'ibge_code' => '4303004', 'name' => "Cachoeira do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4303103', 'name' => "Cachoeirinha"]);
        City::create(['state' => 21, 'ibge_code' => '4303202', 'name' => "Cacique Doble"]);
        City::create(['state' => 21, 'ibge_code' => '4303301', 'name' => "Caibaté"]);
        City::create(['state' => 21, 'ibge_code' => '4303400', 'name' => "Caiçara"]);
        City::create(['state' => 21, 'ibge_code' => '4303509', 'name' => "Camaquã"]);
        City::create(['state' => 21, 'ibge_code' => '4303558', 'name' => "Camargo"]);
        City::create(['state' => 21, 'ibge_code' => '4303608', 'name' => "Cambará do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4303673', 'name' => "Campestre da Serra"]);
        City::create(['state' => 21, 'ibge_code' => '4303707', 'name' => "Campina das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4303806', 'name' => "Campinas do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4303905', 'name' => "Campo Bom"]);
        City::create(['state' => 21, 'ibge_code' => '4304002', 'name' => "Campo Novo"]);
        City::create(['state' => 21, 'ibge_code' => '4304101', 'name' => "Campos Borges"]);
        City::create(['state' => 21, 'ibge_code' => '4304200', 'name' => "Candelária"]);
        City::create(['state' => 21, 'ibge_code' => '4304309', 'name' => "Cândido Godói"]);
        City::create(['state' => 21, 'ibge_code' => '4304358', 'name' => "Candiota"]);
        City::create(['state' => 21, 'ibge_code' => '4304408', 'name' => "Canela"]);
        City::create(['state' => 21, 'ibge_code' => '4304507', 'name' => "Canguçu"]);
        City::create(['state' => 21, 'ibge_code' => '4304606', 'name' => "Canoas"]);
        City::create(['state' => 21, 'ibge_code' => '4304614', 'name' => "Canudos do Vale"]);
        City::create(['state' => 21, 'ibge_code' => '4304622', 'name' => "Capão Bonito do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4304630', 'name' => "Capão da Canoa"]);
        City::create(['state' => 21, 'ibge_code' => '4304655', 'name' => "Capão do Cipó"]);
        City::create(['state' => 21, 'ibge_code' => '4304663', 'name' => "Capão do Leão"]);
        City::create(['state' => 21, 'ibge_code' => '4304689', 'name' => "Capela de Santana"]);
        City::create(['state' => 21, 'ibge_code' => '4304697', 'name' => "Capitão"]);
        City::create(['state' => 21, 'ibge_code' => '4304671', 'name' => "Capivari do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4304713', 'name' => "Caraá"]);
        City::create(['state' => 21, 'ibge_code' => '4304705', 'name' => "Carazinho"]);
        City::create(['state' => 21, 'ibge_code' => '4304804', 'name' => "Carlos Barbosa"]);
        City::create(['state' => 21, 'ibge_code' => '4304853', 'name' => "Carlos Gomes"]);
        City::create(['state' => 21, 'ibge_code' => '4304903', 'name' => "Casca"]);
        City::create(['state' => 21, 'ibge_code' => '4304952', 'name' => "Caseiros"]);
        City::create(['state' => 21, 'ibge_code' => '4305009', 'name' => "Catuípe"]);
        City::create(['state' => 21, 'ibge_code' => '4305108', 'name' => "Caxias do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4305116', 'name' => "Centenário"]);
        City::create(['state' => 21, 'ibge_code' => '4305124', 'name' => "Cerrito"]);
        City::create(['state' => 21, 'ibge_code' => '4305132', 'name' => "Cerro Branco"]);
        City::create(['state' => 21, 'ibge_code' => '4305157', 'name' => "Cerro Grande"]);
        City::create(['state' => 21, 'ibge_code' => '4305173', 'name' => "Cerro Grande do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4305207', 'name' => "Cerro Largo"]);
        City::create(['state' => 21, 'ibge_code' => '4305306', 'name' => "Chapada"]);
        City::create(['state' => 21, 'ibge_code' => '4305355', 'name' => "Charqueadas"]);
        City::create(['state' => 21, 'ibge_code' => '4305371', 'name' => "Charrua"]);
        City::create(['state' => 21, 'ibge_code' => '4305405', 'name' => "Chiapetta"]);
        City::create(['state' => 21, 'ibge_code' => '4305439', 'name' => "Chuí"]);
        City::create(['state' => 21, 'ibge_code' => '4305447', 'name' => "Chuvisca"]);
        City::create(['state' => 21, 'ibge_code' => '4305454', 'name' => "Cidreira"]);
        City::create(['state' => 21, 'ibge_code' => '4305504', 'name' => "Ciríaco"]);
        City::create(['state' => 21, 'ibge_code' => '4305587', 'name' => "Colinas"]);
        City::create(['state' => 21, 'ibge_code' => '4305603', 'name' => "Colorado"]);
        City::create(['state' => 21, 'ibge_code' => '4305702', 'name' => "Condor"]);
        City::create(['state' => 21, 'ibge_code' => '4305801', 'name' => "Constantina"]);
        City::create(['state' => 21, 'ibge_code' => '4305835', 'name' => "Coqueiro Baixo"]);
        City::create(['state' => 21, 'ibge_code' => '4305850', 'name' => "Coqueiros do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4305871', 'name' => "Coronel Barros"]);
        City::create(['state' => 21, 'ibge_code' => '4305900', 'name' => "Coronel Bicaco"]);
        City::create(['state' => 21, 'ibge_code' => '4305934', 'name' => "Coronel Pilar"]);
        City::create(['state' => 21, 'ibge_code' => '4305959', 'name' => "Cotiporã"]);
        City::create(['state' => 21, 'ibge_code' => '4305975', 'name' => "Coxilha"]);
        City::create(['state' => 21, 'ibge_code' => '4306007', 'name' => "Crissiumal"]);
        City::create(['state' => 21, 'ibge_code' => '4306056', 'name' => "Cristal"]);
        City::create(['state' => 21, 'ibge_code' => '4306072', 'name' => "Cristal do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4306106', 'name' => "Cruz Alta"]);
        City::create(['state' => 21, 'ibge_code' => '4306130', 'name' => "Cruzaltense"]);
        City::create(['state' => 21, 'ibge_code' => '4306205', 'name' => "Cruzeiro do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4306304', 'name' => "David Canabarro"]);
        City::create(['state' => 21, 'ibge_code' => '4306320', 'name' => "Derrubadas"]);
        City::create(['state' => 21, 'ibge_code' => '4306353', 'name' => "Dezesseis de Novembro"]);
        City::create(['state' => 21, 'ibge_code' => '4306379', 'name' => "Dilermando de Aguiar"]);
        City::create(['state' => 21, 'ibge_code' => '4306403', 'name' => "Dois Irmãos"]);
        City::create(['state' => 21, 'ibge_code' => '4306429', 'name' => "Dois Irmãos das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4306452', 'name' => "Dois Lajeados"]);
        City::create(['state' => 21, 'ibge_code' => '4306502', 'name' => "Dom Feliciano"]);
        City::create(['state' => 21, 'ibge_code' => '4306601', 'name' => "Dom Pedrito"]);
        City::create(['state' => 21, 'ibge_code' => '4306551', 'name' => "Dom Pedro de Alcântara"]);
        City::create(['state' => 21, 'ibge_code' => '4306700', 'name' => "Dona Francisca"]);
        City::create(['state' => 21, 'ibge_code' => '4306734', 'name' => "Doutor Maurício Cardoso"]);
        City::create(['state' => 21, 'ibge_code' => '4306759', 'name' => "Doutor Ricardo"]);
        City::create(['state' => 21, 'ibge_code' => '4306767', 'name' => "Eldorado do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4306809', 'name' => "Encantado"]);
        City::create(['state' => 21, 'ibge_code' => '4306908', 'name' => "Encruzilhada do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4306924', 'name' => "Engenho Velho"]);
        City::create(['state' => 21, 'ibge_code' => '4306957', 'name' => "Entre Rios do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4306932', 'name' => "Entre-Ijuís"]);
        City::create(['state' => 21, 'ibge_code' => '4306973', 'name' => "Erebango"]);
        City::create(['state' => 21, 'ibge_code' => '4307005', 'name' => "Erechim"]);
        City::create(['state' => 21, 'ibge_code' => '4307054', 'name' => "Ernestina"]);
        City::create(['state' => 21, 'ibge_code' => '4307203', 'name' => "Erval Grande"]);
        City::create(['state' => 21, 'ibge_code' => '4307302', 'name' => "Erval Seco"]);
        City::create(['state' => 21, 'ibge_code' => '4307401', 'name' => "Esmeralda"]);
        City::create(['state' => 21, 'ibge_code' => '4307450', 'name' => "Esperança do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4307500', 'name' => "Espumoso"]);
        City::create(['state' => 21, 'ibge_code' => '4307559', 'name' => "Estação"]);
        City::create(['state' => 21, 'ibge_code' => '4307609', 'name' => "Estância Velha"]);
        City::create(['state' => 21, 'ibge_code' => '4307708', 'name' => "Esteio"]);
        City::create(['state' => 21, 'ibge_code' => '4307807', 'name' => "Estrela"]);
        City::create(['state' => 21, 'ibge_code' => '4307815', 'name' => "Estrela Velha"]);
        City::create(['state' => 21, 'ibge_code' => '4307831', 'name' => "Eugênio de Castro"]);
        City::create(['state' => 21, 'ibge_code' => '4307864', 'name' => "Fagundes Varela"]);
        City::create(['state' => 21, 'ibge_code' => '4307906', 'name' => "Farroupilha"]);
        City::create(['state' => 21, 'ibge_code' => '4308003', 'name' => "Faxinal do Soturno"]);
        City::create(['state' => 21, 'ibge_code' => '4308052', 'name' => "Faxinalzinho"]);
        City::create(['state' => 21, 'ibge_code' => '4308078', 'name' => "Fazenda Vilanova"]);
        City::create(['state' => 21, 'ibge_code' => '4308102', 'name' => "Feliz"]);
        City::create(['state' => 21, 'ibge_code' => '4308201', 'name' => "Flores da Cunha"]);
        City::create(['state' => 21, 'ibge_code' => '4308250', 'name' => "Floriano Peixoto"]);
        City::create(['state' => 21, 'ibge_code' => '4308300', 'name' => "Fontoura Xavier"]);
        City::create(['state' => 21, 'ibge_code' => '4308409', 'name' => "Formigueiro"]);
        City::create(['state' => 21, 'ibge_code' => '4308433', 'name' => "Forquetinha"]);
        City::create(['state' => 21, 'ibge_code' => '4308458', 'name' => "Fortaleza dos Valos"]);
        City::create(['state' => 21, 'ibge_code' => '4308508', 'name' => "Frederico Westphalen"]);
        City::create(['state' => 21, 'ibge_code' => '4308607', 'name' => "Garibaldi"]);
        City::create(['state' => 21, 'ibge_code' => '4308656', 'name' => "Garruchos"]);
        City::create(['state' => 21, 'ibge_code' => '4308706', 'name' => "Gaurama"]);
        City::create(['state' => 21, 'ibge_code' => '4308805', 'name' => "General Câmara"]);
        City::create(['state' => 21, 'ibge_code' => '4308854', 'name' => "Gentil"]);
        City::create(['state' => 21, 'ibge_code' => '4308904', 'name' => "Getúlio Vargas"]);
        City::create(['state' => 21, 'ibge_code' => '4309001', 'name' => "Giruá"]);
        City::create(['state' => 21, 'ibge_code' => '4309050', 'name' => "Glorinha"]);
        City::create(['state' => 21, 'ibge_code' => '4309100', 'name' => "Gramado"]);
        City::create(['state' => 21, 'ibge_code' => '4309126', 'name' => "Gramado dos Loureiros"]);
        City::create(['state' => 21, 'ibge_code' => '4309159', 'name' => "Gramado Xavier"]);
        City::create(['state' => 21, 'ibge_code' => '4309209', 'name' => "Gravataí"]);
        City::create(['state' => 21, 'ibge_code' => '4309258', 'name' => "Guabiju"]);
        City::create(['state' => 21, 'ibge_code' => '4309308', 'name' => "Guaíba"]);
        City::create(['state' => 21, 'ibge_code' => '4309407', 'name' => "Guaporé"]);
        City::create(['state' => 21, 'ibge_code' => '4309506', 'name' => "Guarani das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4309555', 'name' => "Harmonia"]);
        City::create(['state' => 21, 'ibge_code' => '4307104', 'name' => "Herval"]);
        City::create(['state' => 21, 'ibge_code' => '4309571', 'name' => "Herveiras"]);
        City::create(['state' => 21, 'ibge_code' => '4309605', 'name' => "Horizontina"]);
        City::create(['state' => 21, 'ibge_code' => '4309654', 'name' => "Hulha Negra"]);
        City::create(['state' => 21, 'ibge_code' => '4309704', 'name' => "Humaitá"]);
        City::create(['state' => 21, 'ibge_code' => '4309753', 'name' => "Ibarama"]);
        City::create(['state' => 21, 'ibge_code' => '4309803', 'name' => "Ibiaçá"]);
        City::create(['state' => 21, 'ibge_code' => '4309902', 'name' => "Ibiraiaras"]);
        City::create(['state' => 21, 'ibge_code' => '4309951', 'name' => "Ibirapuitã"]);
        City::create(['state' => 21, 'ibge_code' => '4310009', 'name' => "Ibirubá"]);
        City::create(['state' => 21, 'ibge_code' => '4310108', 'name' => "Igrejinha"]);
        City::create(['state' => 21, 'ibge_code' => '4310207', 'name' => "Ijuí"]);
        City::create(['state' => 21, 'ibge_code' => '4310306', 'name' => "Ilópolis"]);
        City::create(['state' => 21, 'ibge_code' => '4310330', 'name' => "Imbé"]);
        City::create(['state' => 21, 'ibge_code' => '4310363', 'name' => "Imigrante"]);
        City::create(['state' => 21, 'ibge_code' => '4310405', 'name' => "Independência"]);
        City::create(['state' => 21, 'ibge_code' => '4310413', 'name' => "Inhacorá"]);
        City::create(['state' => 21, 'ibge_code' => '4310439', 'name' => "Ipê"]);
        City::create(['state' => 21, 'ibge_code' => '4310462', 'name' => "Ipiranga do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4310504', 'name' => "Iraí"]);
        City::create(['state' => 21, 'ibge_code' => '4310538', 'name' => "Itaara"]);
        City::create(['state' => 21, 'ibge_code' => '4310553', 'name' => "Itacurubi"]);
        City::create(['state' => 21, 'ibge_code' => '4310579', 'name' => "Itapuca"]);
        City::create(['state' => 21, 'ibge_code' => '4310603', 'name' => "Itaqui"]);
        City::create(['state' => 21, 'ibge_code' => '4310652', 'name' => "Itati"]);
        City::create(['state' => 21, 'ibge_code' => '4310702', 'name' => "Itatiba do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4310751', 'name' => "Ivorá"]);
        City::create(['state' => 21, 'ibge_code' => '4310801', 'name' => "Ivoti"]);
        City::create(['state' => 21, 'ibge_code' => '4310850', 'name' => "Jaboticaba"]);
        City::create(['state' => 21, 'ibge_code' => '4310876', 'name' => "Jacuizinho"]);
        City::create(['state' => 21, 'ibge_code' => '4310900', 'name' => "Jacutinga"]);
        City::create(['state' => 21, 'ibge_code' => '4311007', 'name' => "Jaguarão"]);
        City::create(['state' => 21, 'ibge_code' => '4311106', 'name' => "Jaguari"]);
        City::create(['state' => 21, 'ibge_code' => '4311122', 'name' => "Jaquirana"]);
        City::create(['state' => 21, 'ibge_code' => '4311130', 'name' => "Jari"]);
        City::create(['state' => 21, 'ibge_code' => '4311155', 'name' => "Jóia"]);
        City::create(['state' => 21, 'ibge_code' => '4311205', 'name' => "Júlio de Castilhos"]);
        City::create(['state' => 21, 'ibge_code' => '4311239', 'name' => "Lagoa Bonita do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4311270', 'name' => "Lagoa dos Três Cantos"]);
        City::create(['state' => 21, 'ibge_code' => '4311304', 'name' => "Lagoa Vermelha"]);
        City::create(['state' => 21, 'ibge_code' => '4311254', 'name' => "Lagoão"]);
        City::create(['state' => 21, 'ibge_code' => '4311403', 'name' => "Lajeado"]);
        City::create(['state' => 21, 'ibge_code' => '4311429', 'name' => "Lajeado do Bugre"]);
        City::create(['state' => 21, 'ibge_code' => '4311502', 'name' => "Lavras do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4311601', 'name' => "Liberato Salzano"]);
        City::create(['state' => 21, 'ibge_code' => '4311627', 'name' => "Lindolfo Collor"]);
        City::create(['state' => 21, 'ibge_code' => '4311643', 'name' => "Linha Nova"]);
        City::create(['state' => 21, 'ibge_code' => '4311718', 'name' => "Maçambará"]);
        City::create(['state' => 21, 'ibge_code' => '4311700', 'name' => "Machadinho"]);
        City::create(['state' => 21, 'ibge_code' => '4311734', 'name' => "Mampituba"]);
        City::create(['state' => 21, 'ibge_code' => '4311759', 'name' => "Manoel Viana"]);
        City::create(['state' => 21, 'ibge_code' => '4311775', 'name' => "Maquiné"]);
        City::create(['state' => 21, 'ibge_code' => '4311791', 'name' => "Maratá"]);
        City::create(['state' => 21, 'ibge_code' => '4311809', 'name' => "Marau"]);
        City::create(['state' => 21, 'ibge_code' => '4311908', 'name' => "Marcelino Ramos"]);
        City::create(['state' => 21, 'ibge_code' => '4311981', 'name' => "Mariana Pimentel"]);
        City::create(['state' => 21, 'ibge_code' => '4312005', 'name' => "Mariano Moro"]);
        City::create(['state' => 21, 'ibge_code' => '4312054', 'name' => "Marques de Souza"]);
        City::create(['state' => 21, 'ibge_code' => '4312104', 'name' => "Mata"]);
        City::create(['state' => 21, 'ibge_code' => '4312138', 'name' => "Mato Castelhano"]);
        City::create(['state' => 21, 'ibge_code' => '4312153', 'name' => "Mato Leitão"]);
        City::create(['state' => 21, 'ibge_code' => '4312179', 'name' => "Mato Queimado"]);
        City::create(['state' => 21, 'ibge_code' => '4312203', 'name' => "Maximiliano de Almeida"]);
        City::create(['state' => 21, 'ibge_code' => '4312252', 'name' => "Minas do Leão"]);
        City::create(['state' => 21, 'ibge_code' => '4312302', 'name' => "Miraguaí"]);
        City::create(['state' => 21, 'ibge_code' => '4312351', 'name' => "Montauri"]);
        City::create(['state' => 21, 'ibge_code' => '4312377', 'name' => "Monte Alegre dos Campos"]);
        City::create(['state' => 21, 'ibge_code' => '4312385', 'name' => "Monte Belo do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4312401', 'name' => "Montenegro"]);
        City::create(['state' => 21, 'ibge_code' => '4312427', 'name' => "Mormaço"]);
        City::create(['state' => 21, 'ibge_code' => '4312443', 'name' => "Morrinhos do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4312450', 'name' => "Morro Redondo"]);
        City::create(['state' => 21, 'ibge_code' => '4312476', 'name' => "Morro Reuter"]);
        City::create(['state' => 21, 'ibge_code' => '4312500', 'name' => "Mostardas"]);
        City::create(['state' => 21, 'ibge_code' => '4312609', 'name' => "Muçum"]);
        City::create(['state' => 21, 'ibge_code' => '4312617', 'name' => "Muitos Capões"]);
        City::create(['state' => 21, 'ibge_code' => '4312625', 'name' => "Muliterno"]);
        City::create(['state' => 21, 'ibge_code' => '4312658', 'name' => "Não-Me-Toque"]);
        City::create(['state' => 21, 'ibge_code' => '4312674', 'name' => "Nicolau Vergueiro"]);
        City::create(['state' => 21, 'ibge_code' => '4312708', 'name' => "Nonoai"]);
        City::create(['state' => 21, 'ibge_code' => '4312757', 'name' => "Nova Alvorada"]);
        City::create(['state' => 21, 'ibge_code' => '4312807', 'name' => "Nova Araçá"]);
        City::create(['state' => 21, 'ibge_code' => '4312906', 'name' => "Nova Bassano"]);
        City::create(['state' => 21, 'ibge_code' => '4312955', 'name' => "Nova Boa Vista"]);
        City::create(['state' => 21, 'ibge_code' => '4313003', 'name' => "Nova Bréscia"]);
        City::create(['state' => 21, 'ibge_code' => '4313011', 'name' => "Nova Candelária"]);
        City::create(['state' => 21, 'ibge_code' => '4313037', 'name' => "Nova Esperança do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4313060', 'name' => "Nova Hartz"]);
        City::create(['state' => 21, 'ibge_code' => '4313086', 'name' => "Nova Pádua"]);
        City::create(['state' => 21, 'ibge_code' => '4313102', 'name' => "Nova Palma"]);
        City::create(['state' => 21, 'ibge_code' => '4313201', 'name' => "Nova Petrópolis"]);
        City::create(['state' => 21, 'ibge_code' => '4313300', 'name' => "Nova Prata"]);
        City::create(['state' => 21, 'ibge_code' => '4313334', 'name' => "Nova Ramada"]);
        City::create(['state' => 21, 'ibge_code' => '4313359', 'name' => "Nova Roma do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4313375', 'name' => "Nova Santa Rita"]);
        City::create(['state' => 21, 'ibge_code' => '4313490', 'name' => "Novo Barreiro"]);
        City::create(['state' => 21, 'ibge_code' => '4313391', 'name' => "Novo Cabrais"]);
        City::create(['state' => 21, 'ibge_code' => '4313409', 'name' => "Novo Hamburgo"]);
        City::create(['state' => 21, 'ibge_code' => '4313425', 'name' => "Novo Machado"]);
        City::create(['state' => 21, 'ibge_code' => '4313441', 'name' => "Novo Tiradentes"]);
        City::create(['state' => 21, 'ibge_code' => '4313466', 'name' => "Novo Xingu"]);
        City::create(['state' => 21, 'ibge_code' => '4313508', 'name' => "Osório"]);
        City::create(['state' => 21, 'ibge_code' => '4313607', 'name' => "Paim Filho"]);
        City::create(['state' => 21, 'ibge_code' => '4313656', 'name' => "Palmares do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4313706', 'name' => "Palmeira das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4313805', 'name' => "Palmitinho"]);
        City::create(['state' => 21, 'ibge_code' => '4313904', 'name' => "Panambi"]);
        City::create(['state' => 21, 'ibge_code' => '4313953', 'name' => "Pantano Grande"]);
        City::create(['state' => 21, 'ibge_code' => '4314001', 'name' => "Paraí"]);
        City::create(['state' => 21, 'ibge_code' => '4314027', 'name' => "Paraíso do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4314035', 'name' => "Pareci Novo"]);
        City::create(['state' => 21, 'ibge_code' => '4314050', 'name' => "Parobé"]);
        City::create(['state' => 21, 'ibge_code' => '4314068', 'name' => "Passa Sete"]);
        City::create(['state' => 21, 'ibge_code' => '4314076', 'name' => "Passo do Sobrado"]);
        City::create(['state' => 21, 'ibge_code' => '4314100', 'name' => "Passo Fundo"]);
        City::create(['state' => 21, 'ibge_code' => '4314134', 'name' => "Paulo Bento"]);
        City::create(['state' => 21, 'ibge_code' => '4314159', 'name' => "Paverama"]);
        City::create(['state' => 21, 'ibge_code' => '4314175', 'name' => "Pedras Altas"]);
        City::create(['state' => 21, 'ibge_code' => '4314209', 'name' => "Pedro Osório"]);
        City::create(['state' => 21, 'ibge_code' => '4314308', 'name' => "Pejuçara"]);
        City::create(['state' => 21, 'ibge_code' => '4314407', 'name' => "Pelotas"]);
        City::create(['state' => 21, 'ibge_code' => '4314423', 'name' => "Picada Café"]);
        City::create(['state' => 21, 'ibge_code' => '4314456', 'name' => "Pinhal"]);
        City::create(['state' => 21, 'ibge_code' => '4314464', 'name' => "Pinhal da Serra"]);
        City::create(['state' => 21, 'ibge_code' => '4314472', 'name' => "Pinhal Grande"]);
        City::create(['state' => 21, 'ibge_code' => '4314498', 'name' => "Pinheirinho do Vale"]);
        City::create(['state' => 21, 'ibge_code' => '4314506', 'name' => "Pinheiro Machado"]);
        City::create(['state' => 21, 'ibge_code' => '4314555', 'name' => "Pirapó"]);
        City::create(['state' => 21, 'ibge_code' => '4314605', 'name' => "Piratini"]);
        City::create(['state' => 21, 'ibge_code' => '4314704', 'name' => "Planalto"]);
        City::create(['state' => 21, 'ibge_code' => '4314753', 'name' => "Poço das Antas"]);
        City::create(['state' => 21, 'ibge_code' => '4314779', 'name' => "Pontão"]);
        City::create(['state' => 21, 'ibge_code' => '4314787', 'name' => "Ponte Preta"]);
        City::create(['state' => 21, 'ibge_code' => '4314803', 'name' => "Portão"]);
        City::create(['state' => 21, 'ibge_code' => '4314902', 'name' => "Porto Alegre"]);
        City::create(['state' => 21, 'ibge_code' => '4315008', 'name' => "Porto Lucena"]);
        City::create(['state' => 21, 'ibge_code' => '4315057', 'name' => "Porto Mauá"]);
        City::create(['state' => 21, 'ibge_code' => '4315073', 'name' => "Porto Vera Cruz"]);
        City::create(['state' => 21, 'ibge_code' => '4315107', 'name' => "Porto Xavier"]);
        City::create(['state' => 21, 'ibge_code' => '4315131', 'name' => "Pouso Novo"]);
        City::create(['state' => 21, 'ibge_code' => '4315149', 'name' => "Presidente Lucena"]);
        City::create(['state' => 21, 'ibge_code' => '4315156', 'name' => "Progresso"]);
        City::create(['state' => 21, 'ibge_code' => '4315172', 'name' => "Protásio Alves"]);
        City::create(['state' => 21, 'ibge_code' => '4315206', 'name' => "Putinga"]);
        City::create(['state' => 21, 'ibge_code' => '4315305', 'name' => "Quaraí"]);
        City::create(['state' => 21, 'ibge_code' => '4315313', 'name' => "Quatro Irmãos"]);
        City::create(['state' => 21, 'ibge_code' => '4315321', 'name' => "Quevedos"]);
        City::create(['state' => 21, 'ibge_code' => '4315354', 'name' => "Quinze de Novembro"]);
        City::create(['state' => 21, 'ibge_code' => '4315404', 'name' => "Redentora"]);
        City::create(['state' => 21, 'ibge_code' => '4315453', 'name' => "Relvado"]);
        City::create(['state' => 21, 'ibge_code' => '4315503', 'name' => "Restinga Seca"]);
        City::create(['state' => 21, 'ibge_code' => '4315552', 'name' => "Rio dos Índios"]);
        City::create(['state' => 21, 'ibge_code' => '4315602', 'name' => "Rio Grande"]);
        City::create(['state' => 21, 'ibge_code' => '4315701', 'name' => "Rio Pardo"]);
        City::create(['state' => 21, 'ibge_code' => '4315750', 'name' => "Riozinho"]);
        City::create(['state' => 21, 'ibge_code' => '4315800', 'name' => "Roca Sales"]);
        City::create(['state' => 21, 'ibge_code' => '4315909', 'name' => "Rodeio Bonito"]);
        City::create(['state' => 21, 'ibge_code' => '4315958', 'name' => "Rolador"]);
        City::create(['state' => 21, 'ibge_code' => '4316006', 'name' => "Rolante"]);
        City::create(['state' => 21, 'ibge_code' => '4316105', 'name' => "Ronda Alta"]);
        City::create(['state' => 21, 'ibge_code' => '4316204', 'name' => "Rondinha"]);
        City::create(['state' => 21, 'ibge_code' => '4316303', 'name' => "Roque Gonzales"]);
        City::create(['state' => 21, 'ibge_code' => '4316402', 'name' => "Rosário do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4316428', 'name' => "Sagrada Família"]);
        City::create(['state' => 21, 'ibge_code' => '4316436', 'name' => "Saldanha Marinho"]);
        City::create(['state' => 21, 'ibge_code' => '4316451', 'name' => "Salto do Jacuí"]);
        City::create(['state' => 21, 'ibge_code' => '4316477', 'name' => "Salvador das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4316501', 'name' => "Salvador do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4316600', 'name' => "Sananduva"]);
        City::create(['state' => 21, 'ibge_code' => '4316709', 'name' => "Santa Bárbara do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4316733', 'name' => "Santa Cecília do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4316758', 'name' => "Santa Clara do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4316808', 'name' => "Santa Cruz do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4316972', 'name' => "Santa Margarida do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4316907', 'name' => "Santa Maria"]);
        City::create(['state' => 21, 'ibge_code' => '4316956', 'name' => "Santa Maria do Herval"]);
        City::create(['state' => 21, 'ibge_code' => '4317202', 'name' => "Santa Rosa"]);
        City::create(['state' => 21, 'ibge_code' => '4317251', 'name' => "Santa Tereza"]);
        City::create(['state' => 21, 'ibge_code' => '4317301', 'name' => "Santa Vitória do Palmar"]);
        City::create(['state' => 21, 'ibge_code' => '4317004', 'name' => "Santana da Boa Vista"]);
        City::create(['state' => 21, 'ibge_code' => '4317103', 'name' => "Sant'Ana do Livramento"]);
        City::create(['state' => 21, 'ibge_code' => '4317400', 'name' => "Santiago"]);
        City::create(['state' => 21, 'ibge_code' => '4317509', 'name' => "Santo Ângelo"]);
        City::create(['state' => 21, 'ibge_code' => '4317608', 'name' => "Santo Antônio da Patrulha"]);
        City::create(['state' => 21, 'ibge_code' => '4317707', 'name' => "Santo Antônio das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4317558', 'name' => "Santo Antônio do Palma"]);
        City::create(['state' => 21, 'ibge_code' => '4317756', 'name' => "Santo Antônio do Planalto"]);
        City::create(['state' => 21, 'ibge_code' => '4317806', 'name' => "Santo Augusto"]);
        City::create(['state' => 21, 'ibge_code' => '4317905', 'name' => "Santo Cristo"]);
        City::create(['state' => 21, 'ibge_code' => '4317954', 'name' => "Santo Expedito do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4318002', 'name' => "São Borja"]);
        City::create(['state' => 21, 'ibge_code' => '4318051', 'name' => "São Domingos do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4318101', 'name' => "São Francisco de Assis"]);
        City::create(['state' => 21, 'ibge_code' => '4318200', 'name' => "São Francisco de Paula"]);
        City::create(['state' => 21, 'ibge_code' => '4318309', 'name' => "São Gabriel"]);
        City::create(['state' => 21, 'ibge_code' => '4318408', 'name' => "São Jerônimo"]);
        City::create(['state' => 21, 'ibge_code' => '4318424', 'name' => "São João da Urtiga"]);
        City::create(['state' => 21, 'ibge_code' => '4318432', 'name' => "São João do Polêsine"]);
        City::create(['state' => 21, 'ibge_code' => '4318440', 'name' => "São Jorge"]);
        City::create(['state' => 21, 'ibge_code' => '4318457', 'name' => "São José das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4318465', 'name' => "São José do Herval"]);
        City::create(['state' => 21, 'ibge_code' => '4318481', 'name' => "São José do Hortêncio"]);
        City::create(['state' => 21, 'ibge_code' => '4318499', 'name' => "São José do Inhacorá"]);
        City::create(['state' => 21, 'ibge_code' => '4318507', 'name' => "São José do Norte"]);
        City::create(['state' => 21, 'ibge_code' => '4318606', 'name' => "São José do Ouro"]);
        City::create(['state' => 21, 'ibge_code' => '4318614', 'name' => "São José do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4318622', 'name' => "São José dos Ausentes"]);
        City::create(['state' => 21, 'ibge_code' => '4318705', 'name' => "São Leopoldo"]);
        City::create(['state' => 21, 'ibge_code' => '4318804', 'name' => "São Lourenço do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4318903', 'name' => "São Luiz Gonzaga"]);
        City::create(['state' => 21, 'ibge_code' => '4319000', 'name' => "São Marcos"]);
        City::create(['state' => 21, 'ibge_code' => '4319109', 'name' => "São Martinho"]);
        City::create(['state' => 21, 'ibge_code' => '4319125', 'name' => "São Martinho da Serra"]);
        City::create(['state' => 21, 'ibge_code' => '4319158', 'name' => "São Miguel das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4319208', 'name' => "São Nicolau"]);
        City::create(['state' => 21, 'ibge_code' => '4319307', 'name' => "São Paulo das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4319356', 'name' => "São Pedro da Serra"]);
        City::create(['state' => 21, 'ibge_code' => '4319364', 'name' => "São Pedro das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4319372', 'name' => "São Pedro do Butiá"]);
        City::create(['state' => 21, 'ibge_code' => '4319406', 'name' => "São Pedro do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4319505', 'name' => "São Sebastião do Caí"]);
        City::create(['state' => 21, 'ibge_code' => '4319604', 'name' => "São Sepé"]);
        City::create(['state' => 21, 'ibge_code' => '4319703', 'name' => "São Valentim"]);
        City::create(['state' => 21, 'ibge_code' => '4319711', 'name' => "São Valentim do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4319737', 'name' => "São Valério do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4319752', 'name' => "São Vendelino"]);
        City::create(['state' => 21, 'ibge_code' => '4319802', 'name' => "São Vicente do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4319901', 'name' => "Sapiranga"]);
        City::create(['state' => 21, 'ibge_code' => '4320008', 'name' => "Sapucaia do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4320107', 'name' => "Sarandi"]);
        City::create(['state' => 21, 'ibge_code' => '4320206', 'name' => "Seberi"]);
        City::create(['state' => 21, 'ibge_code' => '4320230', 'name' => "Sede Nova"]);
        City::create(['state' => 21, 'ibge_code' => '4320263', 'name' => "Segredo"]);
        City::create(['state' => 21, 'ibge_code' => '4320305', 'name' => "Selbach"]);
        City::create(['state' => 21, 'ibge_code' => '4320321', 'name' => "Senador Salgado Filho"]);
        City::create(['state' => 21, 'ibge_code' => '4320354', 'name' => "Sentinela do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4320404', 'name' => "Serafina Corrêa"]);
        City::create(['state' => 21, 'ibge_code' => '4320453', 'name' => "Sério"]);
        City::create(['state' => 21, 'ibge_code' => '4320503', 'name' => "Sertão"]);
        City::create(['state' => 21, 'ibge_code' => '4320552', 'name' => "Sertão Santana"]);
        City::create(['state' => 21, 'ibge_code' => '4320578', 'name' => "Sete de Setembro"]);
        City::create(['state' => 21, 'ibge_code' => '4320602', 'name' => "Severiano de Almeida"]);
        City::create(['state' => 21, 'ibge_code' => '4320651', 'name' => "Silveira Martins"]);
        City::create(['state' => 21, 'ibge_code' => '4320677', 'name' => "Sinimbu"]);
        City::create(['state' => 21, 'ibge_code' => '4320701', 'name' => "Sobradinho"]);
        City::create(['state' => 21, 'ibge_code' => '4320800', 'name' => "Soledade"]);
        City::create(['state' => 21, 'ibge_code' => '4320859', 'name' => "Tabaí"]);
        City::create(['state' => 21, 'ibge_code' => '4320909', 'name' => "Tapejara"]);
        City::create(['state' => 21, 'ibge_code' => '4321006', 'name' => "Tapera"]);
        City::create(['state' => 21, 'ibge_code' => '4321105', 'name' => "Tapes"]);
        City::create(['state' => 21, 'ibge_code' => '4321204', 'name' => "Taquara"]);
        City::create(['state' => 21, 'ibge_code' => '4321303', 'name' => "Taquari"]);
        City::create(['state' => 21, 'ibge_code' => '4321329', 'name' => "Taquaruçu do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4321352', 'name' => "Tavares"]);
        City::create(['state' => 21, 'ibge_code' => '4321402', 'name' => "Tenente Portela"]);
        City::create(['state' => 21, 'ibge_code' => '4321436', 'name' => "Terra de Areia"]);
        City::create(['state' => 21, 'ibge_code' => '4321451', 'name' => "Teutônia"]);
        City::create(['state' => 21, 'ibge_code' => '4321469', 'name' => "Tio Hugo"]);
        City::create(['state' => 21, 'ibge_code' => '4321477', 'name' => "Tiradentes do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4321493', 'name' => "Toropi"]);
        City::create(['state' => 21, 'ibge_code' => '4321501', 'name' => "Torres"]);
        City::create(['state' => 21, 'ibge_code' => '4321600', 'name' => "Tramandaí"]);
        City::create(['state' => 21, 'ibge_code' => '4321626', 'name' => "Travesseiro"]);
        City::create(['state' => 21, 'ibge_code' => '4321634', 'name' => "Três Arroios"]);
        City::create(['state' => 21, 'ibge_code' => '4321667', 'name' => "Três Cachoeiras"]);
        City::create(['state' => 21, 'ibge_code' => '4321709', 'name' => "Três Coroas"]);
        City::create(['state' => 21, 'ibge_code' => '4321808', 'name' => "Três de Maio"]);
        City::create(['state' => 21, 'ibge_code' => '4321832', 'name' => "Três Forquilhas"]);
        City::create(['state' => 21, 'ibge_code' => '4321857', 'name' => "Três Palmeiras"]);
        City::create(['state' => 21, 'ibge_code' => '4321907', 'name' => "Três Passos"]);
        City::create(['state' => 21, 'ibge_code' => '4321956', 'name' => "Trindade do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4322004', 'name' => "Triunfo"]);
        City::create(['state' => 21, 'ibge_code' => '4322103', 'name' => "Tucunduva"]);
        City::create(['state' => 21, 'ibge_code' => '4322152', 'name' => "Tunas"]);
        City::create(['state' => 21, 'ibge_code' => '4322186', 'name' => "Tupanci do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4322202', 'name' => "Tupanciretã"]);
        City::create(['state' => 21, 'ibge_code' => '4322251', 'name' => "Tupandi"]);
        City::create(['state' => 21, 'ibge_code' => '4322301', 'name' => "Tuparendi"]);
        City::create(['state' => 21, 'ibge_code' => '4322327', 'name' => "Turuçu"]);
        City::create(['state' => 21, 'ibge_code' => '4322343', 'name' => "Ubiretama"]);
        City::create(['state' => 21, 'ibge_code' => '4322350', 'name' => "União da Serra"]);
        City::create(['state' => 21, 'ibge_code' => '4322376', 'name' => "Unistalda"]);
        City::create(['state' => 21, 'ibge_code' => '4322400', 'name' => "Uruguaiana"]);
        City::create(['state' => 21, 'ibge_code' => '4322509', 'name' => "Vacaria"]);
        City::create(['state' => 21, 'ibge_code' => '4322533', 'name' => "Vale do Sol"]);
        City::create(['state' => 21, 'ibge_code' => '4322541', 'name' => "Vale Real"]);
        City::create(['state' => 21, 'ibge_code' => '4322525', 'name' => "Vale Verde"]);
        City::create(['state' => 21, 'ibge_code' => '4322558', 'name' => "Vanini"]);
        City::create(['state' => 21, 'ibge_code' => '4322608', 'name' => "Venâncio Aires"]);
        City::create(['state' => 21, 'ibge_code' => '4322707', 'name' => "Vera Cruz"]);
        City::create(['state' => 21, 'ibge_code' => '4322806', 'name' => "Veranópolis"]);
        City::create(['state' => 21, 'ibge_code' => '4322855', 'name' => "Vespasiano Correa"]);
        City::create(['state' => 21, 'ibge_code' => '4322905', 'name' => "Viadutos"]);
        City::create(['state' => 21, 'ibge_code' => '4323002', 'name' => "Viamão"]);
        City::create(['state' => 21, 'ibge_code' => '4323101', 'name' => "Vicente Dutra"]);
        City::create(['state' => 21, 'ibge_code' => '4323200', 'name' => "Victor Graeff"]);
        City::create(['state' => 21, 'ibge_code' => '4323309', 'name' => "Vila Flores"]);
        City::create(['state' => 21, 'ibge_code' => '4323358', 'name' => "Vila Lângaro"]);
        City::create(['state' => 21, 'ibge_code' => '4323408', 'name' => "Vila Maria"]);
        City::create(['state' => 21, 'ibge_code' => '4323457', 'name' => "Vila Nova do Sul"]);
        City::create(['state' => 21, 'ibge_code' => '4323507', 'name' => "Vista Alegre"]);
        City::create(['state' => 21, 'ibge_code' => '4323606', 'name' => "Vista Alegre do Prata"]);
        City::create(['state' => 21, 'ibge_code' => '4323705', 'name' => "Vista Gaúcha"]);
        City::create(['state' => 21, 'ibge_code' => '4323754', 'name' => "Vitória das Missões"]);
        City::create(['state' => 21, 'ibge_code' => '4323770', 'name' => "Westfalia"]);
        City::create(['state' => 21, 'ibge_code' => '4323804', 'name' => "Xangri-lá"]);

        City::create(['state' => 22, 'ibge_code' => '1100015', 'name' => "Alta Floresta D'Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1100379', 'name' => "Alto Alegre dos Parecis"]);
        City::create(['state' => 22, 'ibge_code' => '1100403', 'name' => "Alto Paraíso"]);
        City::create(['state' => 22, 'ibge_code' => '1100346', 'name' => "Alvorada D'Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1100023', 'name' => "Ariquemes"]);
        City::create(['state' => 22, 'ibge_code' => '1100452', 'name' => "Buritis"]);
        City::create(['state' => 22, 'ibge_code' => '1100031', 'name' => "Cabixi"]);
        City::create(['state' => 22, 'ibge_code' => '1100601', 'name' => "Cacaulândia"]);
        City::create(['state' => 22, 'ibge_code' => '1100049', 'name' => "Cacoal"]);
        City::create(['state' => 22, 'ibge_code' => '1100700', 'name' => "Campo Novo de Rondônia"]);
        City::create(['state' => 22, 'ibge_code' => '1100809', 'name' => "Candeias do Jamari"]);
        City::create(['state' => 22, 'ibge_code' => '1100908', 'name' => "Castanheiras"]);
        City::create(['state' => 22, 'ibge_code' => '1100056', 'name' => "Cerejeiras"]);
        City::create(['state' => 22, 'ibge_code' => '1100924', 'name' => "Chupinguaia"]);
        City::create(['state' => 22, 'ibge_code' => '1100064', 'name' => "Colorado do Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1100072', 'name' => "Corumbiara"]);
        City::create(['state' => 22, 'ibge_code' => '1100080', 'name' => "Costa Marques"]);
        City::create(['state' => 22, 'ibge_code' => '1100940', 'name' => "Cujubim"]);
        City::create(['state' => 22, 'ibge_code' => '1100098', 'name' => "Espigão D'Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1101005', 'name' => "Governador Jorge Teixeira"]);
        City::create(['state' => 22, 'ibge_code' => '1100106', 'name' => "Guajará-Mirim"]);
        City::create(['state' => 22, 'ibge_code' => '1101104', 'name' => "Itapuã do Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1100114', 'name' => "Jaru"]);
        City::create(['state' => 22, 'ibge_code' => '1100122', 'name' => "Ji-Paraná"]);
        City::create(['state' => 22, 'ibge_code' => '1100130', 'name' => "Machadinho D'Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1101203', 'name' => "Ministro Andreazza"]);
        City::create(['state' => 22, 'ibge_code' => '1101302', 'name' => "Mirante da Serra"]);
        City::create(['state' => 22, 'ibge_code' => '1101401', 'name' => "Monte Negro"]);
        City::create(['state' => 22, 'ibge_code' => '1100148', 'name' => "Nova Brasilândia D'Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1100338', 'name' => "Nova Mamoré"]);
        City::create(['state' => 22, 'ibge_code' => '1101435', 'name' => "Nova União"]);
        City::create(['state' => 22, 'ibge_code' => '1100502', 'name' => "Novo Horizonte do Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1100155', 'name' => "Ouro Preto do Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1101450', 'name' => "Parecis"]);
        City::create(['state' => 22, 'ibge_code' => '1100189', 'name' => "Pimenta Bueno"]);
        City::create(['state' => 22, 'ibge_code' => '1101468', 'name' => "Pimenteiras do Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1100205', 'name' => "Porto Velho"]);
        City::create(['state' => 22, 'ibge_code' => '1100254', 'name' => "Presidente Médici"]);
        City::create(['state' => 22, 'ibge_code' => '1101476', 'name' => "Primavera de Rondônia"]);
        City::create(['state' => 22, 'ibge_code' => '1100262', 'name' => "Rio Crespo"]);
        City::create(['state' => 22, 'ibge_code' => '1100288', 'name' => "Rolim de Moura"]);
        City::create(['state' => 22, 'ibge_code' => '1100296', 'name' => "Santa Luzia D'Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1101484', 'name' => "São Felipe D'Oeste"]);
        City::create(['state' => 22, 'ibge_code' => '1101492', 'name' => "São Francisco do Guaporé"]);
        City::create(['state' => 22, 'ibge_code' => '1100320', 'name' => "São Miguel do Guaporé"]);
        City::create(['state' => 22, 'ibge_code' => '1101500', 'name' => "Seringueiras"]);
        City::create(['state' => 22, 'ibge_code' => '1101559', 'name' => "Teixeirópolis"]);
        City::create(['state' => 22, 'ibge_code' => '1101609', 'name' => "Theobroma"]);
        City::create(['state' => 22, 'ibge_code' => '1101708', 'name' => "Urupá"]);
        City::create(['state' => 22, 'ibge_code' => '1101757', 'name' => "Vale do Anari"]);
        City::create(['state' => 22, 'ibge_code' => '1101807', 'name' => "Vale do Paraíso"]);
        City::create(['state' => 22, 'ibge_code' => '1100304', 'name' => "Vilhena"]);

        City::create(['state' => 23, 'ibge_code' => '1400050', 'name' => "Alto Alegre"]);
        City::create(['state' => 23, 'ibge_code' => '1400027', 'name' => "Amajari"]);
        City::create(['state' => 23, 'ibge_code' => '1400100', 'name' => "Boa Vista"]);
        City::create(['state' => 23, 'ibge_code' => '1400159', 'name' => "Bonfim"]);
        City::create(['state' => 23, 'ibge_code' => '1400175', 'name' => "Cantá"]);
        City::create(['state' => 23, 'ibge_code' => '1400209', 'name' => "Caracaraí"]);
        City::create(['state' => 23, 'ibge_code' => '1400233', 'name' => "Caroebe"]);
        City::create(['state' => 23, 'ibge_code' => '1400282', 'name' => "Iracema"]);
        City::create(['state' => 23, 'ibge_code' => '1400308', 'name' => "Mucajaí"]);
        City::create(['state' => 23, 'ibge_code' => '1400407', 'name' => "Normandia"]);
        City::create(['state' => 23, 'ibge_code' => '1400456', 'name' => "Pacaraima"]);
        City::create(['state' => 23, 'ibge_code' => '1400472', 'name' => "Rorainópolis"]);
        City::create(['state' => 23, 'ibge_code' => '1400506', 'name' => "São João da Baliza"]);
        City::create(['state' => 23, 'ibge_code' => '1400605', 'name' => "São Luiz"]);
        City::create(['state' => 23, 'ibge_code' => '1400704', 'name' => "Uiramutã"]);

        City::create(['state' => 24, 'ibge_code' => '4200051', 'name' => "Abdon Batista"]);
        City::create(['state' => 24, 'ibge_code' => '4200101', 'name' => "Abelardo Luz"]);
        City::create(['state' => 24, 'ibge_code' => '4200200', 'name' => "Agrolândia"]);
        City::create(['state' => 24, 'ibge_code' => '4200309', 'name' => "Agronômica"]);
        City::create(['state' => 24, 'ibge_code' => '4200408', 'name' => "Água Doce"]);
        City::create(['state' => 24, 'ibge_code' => '4200507', 'name' => "Águas de Chapecó"]);
        City::create(['state' => 24, 'ibge_code' => '4200556', 'name' => "Águas Frias"]);
        City::create(['state' => 24, 'ibge_code' => '4200606', 'name' => "Águas Mornas"]);
        City::create(['state' => 24, 'ibge_code' => '4200705', 'name' => "Alfredo Wagner"]);
        City::create(['state' => 24, 'ibge_code' => '4200754', 'name' => "Alto Bela Vista"]);
        City::create(['state' => 24, 'ibge_code' => '4200804', 'name' => "Anchieta"]);
        City::create(['state' => 24, 'ibge_code' => '4200903', 'name' => "Angelina"]);
        City::create(['state' => 24, 'ibge_code' => '4201000', 'name' => "Anita Garibaldi"]);
        City::create(['state' => 24, 'ibge_code' => '4201109', 'name' => "Anitápolis"]);
        City::create(['state' => 24, 'ibge_code' => '4201208', 'name' => "Antônio Carlos"]);
        City::create(['state' => 24, 'ibge_code' => '4201257', 'name' => "Apiúna"]);
        City::create(['state' => 24, 'ibge_code' => '4201273', 'name' => "Arabutã"]);
        City::create(['state' => 24, 'ibge_code' => '4201307', 'name' => "Araquari"]);
        City::create(['state' => 24, 'ibge_code' => '4201406', 'name' => "Araranguá"]);
        City::create(['state' => 24, 'ibge_code' => '4201505', 'name' => "Armazém"]);
        City::create(['state' => 24, 'ibge_code' => '4201604', 'name' => "Arroio Trinta"]);
        City::create(['state' => 24, 'ibge_code' => '4201653', 'name' => "Arvoredo"]);
        City::create(['state' => 24, 'ibge_code' => '4201703', 'name' => "Ascurra"]);
        City::create(['state' => 24, 'ibge_code' => '4201802', 'name' => "Atalanta"]);
        City::create(['state' => 24, 'ibge_code' => '4201901', 'name' => "Aurora"]);
        City::create(['state' => 24, 'ibge_code' => '4201950', 'name' => "Balneário Arroio do Silva"]);
        City::create(['state' => 24, 'ibge_code' => '4202057', 'name' => "Balneário Barra do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4202008', 'name' => "Balneário Camboriú"]);
        City::create(['state' => 24, 'ibge_code' => '4202073', 'name' => "Balneário Gaivota"]);
        City::create(['state' => 24, 'ibge_code' => '4212809', 'name' => "Balneário Piçarras"]);
        City::create(['state' => 24, 'ibge_code' => '4202081', 'name' => "Bandeirante"]);
        City::create(['state' => 24, 'ibge_code' => '4202099', 'name' => "Barra Bonita"]);
        City::create(['state' => 24, 'ibge_code' => '4202107', 'name' => "Barra Velha"]);
        City::create(['state' => 24, 'ibge_code' => '4202131', 'name' => "Bela Vista do Toldo"]);
        City::create(['state' => 24, 'ibge_code' => '4202156', 'name' => "Belmonte"]);
        City::create(['state' => 24, 'ibge_code' => '4202206', 'name' => "Benedito Novo"]);
        City::create(['state' => 24, 'ibge_code' => '4202305', 'name' => "Biguaçu"]);
        City::create(['state' => 24, 'ibge_code' => '4202404', 'name' => "Blumenau"]);
        City::create(['state' => 24, 'ibge_code' => '4202438', 'name' => "Bocaina do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4202503', 'name' => "Bom Jardim da Serra"]);
        City::create(['state' => 24, 'ibge_code' => '4202537', 'name' => "Bom Jesus"]);
        City::create(['state' => 24, 'ibge_code' => '4202578', 'name' => "Bom Jesus do Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4202602', 'name' => "Bom Retiro"]);
        City::create(['state' => 24, 'ibge_code' => '4202453', 'name' => "Bombinhas"]);
        City::create(['state' => 24, 'ibge_code' => '4202701', 'name' => "Botuverá"]);
        City::create(['state' => 24, 'ibge_code' => '4202800', 'name' => "Braço do Norte"]);
        City::create(['state' => 24, 'ibge_code' => '4202859', 'name' => "Braço do Trombudo"]);
        City::create(['state' => 24, 'ibge_code' => '4202875', 'name' => "Brunópolis"]);
        City::create(['state' => 24, 'ibge_code' => '4202909', 'name' => "Brusque"]);
        City::create(['state' => 24, 'ibge_code' => '4203006', 'name' => "Caçador"]);
        City::create(['state' => 24, 'ibge_code' => '4203105', 'name' => "Caibi"]);
        City::create(['state' => 24, 'ibge_code' => '4203154', 'name' => "Calmon"]);
        City::create(['state' => 24, 'ibge_code' => '4203204', 'name' => "Camboriú"]);
        City::create(['state' => 24, 'ibge_code' => '4203303', 'name' => "Campo Alegre"]);
        City::create(['state' => 24, 'ibge_code' => '4203402', 'name' => "Campo Belo do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4203501', 'name' => "Campo Erê"]);
        City::create(['state' => 24, 'ibge_code' => '4203600', 'name' => "Campos Novos"]);
        City::create(['state' => 24, 'ibge_code' => '4203709', 'name' => "Canelinha"]);
        City::create(['state' => 24, 'ibge_code' => '4203808', 'name' => "Canoinhas"]);
        City::create(['state' => 24, 'ibge_code' => '4203253', 'name' => "Capão Alto"]);
        City::create(['state' => 24, 'ibge_code' => '4203907', 'name' => "Capinzal"]);
        City::create(['state' => 24, 'ibge_code' => '4203956', 'name' => "Capivari de Baixo"]);
        City::create(['state' => 24, 'ibge_code' => '4204004', 'name' => "Catanduvas"]);
        City::create(['state' => 24, 'ibge_code' => '4204103', 'name' => "Caxambu do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4204152', 'name' => "Celso Ramos"]);
        City::create(['state' => 24, 'ibge_code' => '4204178', 'name' => "Cerro Negro"]);
        City::create(['state' => 24, 'ibge_code' => '4204194', 'name' => "Chapadão do Lageado"]);
        City::create(['state' => 24, 'ibge_code' => '4204202', 'name' => "Chapecó"]);
        City::create(['state' => 24, 'ibge_code' => '4204251', 'name' => "Cocal do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4204301', 'name' => "Concórdia"]);
        City::create(['state' => 24, 'ibge_code' => '4204350', 'name' => "Cordilheira Alta"]);
        City::create(['state' => 24, 'ibge_code' => '4204400', 'name' => "Coronel Freitas"]);
        City::create(['state' => 24, 'ibge_code' => '4204459', 'name' => "Coronel Martins"]);
        City::create(['state' => 24, 'ibge_code' => '4204558', 'name' => "Correia Pinto"]);
        City::create(['state' => 24, 'ibge_code' => '4204509', 'name' => "Corupá"]);
        City::create(['state' => 24, 'ibge_code' => '4204608', 'name' => "Criciúma"]);
        City::create(['state' => 24, 'ibge_code' => '4204707', 'name' => "Cunha Porã"]);
        City::create(['state' => 24, 'ibge_code' => '4204756', 'name' => "Cunhataí"]);
        City::create(['state' => 24, 'ibge_code' => '4204806', 'name' => "Curitibanos"]);
        City::create(['state' => 24, 'ibge_code' => '4204905', 'name' => "Descanso"]);
        City::create(['state' => 24, 'ibge_code' => '4205001', 'name' => "Dionísio Cerqueira"]);
        City::create(['state' => 24, 'ibge_code' => '4205100', 'name' => "Dona Emma"]);
        City::create(['state' => 24, 'ibge_code' => '4205159', 'name' => "Doutor Pedrinho"]);
        City::create(['state' => 24, 'ibge_code' => '4205175', 'name' => "Entre Rios"]);
        City::create(['state' => 24, 'ibge_code' => '4205191', 'name' => "Ermo"]);
        City::create(['state' => 24, 'ibge_code' => '4205209', 'name' => "Erval Velho"]);
        City::create(['state' => 24, 'ibge_code' => '4205308', 'name' => "Faxinal dos Guedes"]);
        City::create(['state' => 24, 'ibge_code' => '4205357', 'name' => "Flor do Sertão"]);
        City::create(['state' => 24, 'ibge_code' => '4205407', 'name' => "Florianópolis"]);
        City::create(['state' => 24, 'ibge_code' => '4205431', 'name' => "Formosa do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4205456', 'name' => "Forquilhinha"]);
        City::create(['state' => 24, 'ibge_code' => '4205506', 'name' => "Fraiburgo"]);
        City::create(['state' => 24, 'ibge_code' => '4205555', 'name' => "Frei Rogério"]);
        City::create(['state' => 24, 'ibge_code' => '4205605', 'name' => "Galvão"]);
        City::create(['state' => 24, 'ibge_code' => '4205704', 'name' => "Garopaba"]);
        City::create(['state' => 24, 'ibge_code' => '4205803', 'name' => "Garuva"]);
        City::create(['state' => 24, 'ibge_code' => '4205902', 'name' => "Gaspar"]);
        City::create(['state' => 24, 'ibge_code' => '4206009', 'name' => "Governador Celso Ramos"]);
        City::create(['state' => 24, 'ibge_code' => '4206108', 'name' => "Grão Pará"]);
        City::create(['state' => 24, 'ibge_code' => '4206207', 'name' => "Gravatal"]);
        City::create(['state' => 24, 'ibge_code' => '4206306', 'name' => "Guabiruba"]);
        City::create(['state' => 24, 'ibge_code' => '4206405', 'name' => "Guaraciaba"]);
        City::create(['state' => 24, 'ibge_code' => '4206504', 'name' => "Guaramirim"]);
        City::create(['state' => 24, 'ibge_code' => '4206603', 'name' => "Guarujá do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4206652', 'name' => "Guatambú"]);
        City::create(['state' => 24, 'ibge_code' => '4206702', 'name' => "Herval d'Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4206751', 'name' => "Ibiam"]);
        City::create(['state' => 24, 'ibge_code' => '4206801', 'name' => "Ibicaré"]);
        City::create(['state' => 24, 'ibge_code' => '4206900', 'name' => "Ibirama"]);
        City::create(['state' => 24, 'ibge_code' => '4207007', 'name' => "Içara"]);
        City::create(['state' => 24, 'ibge_code' => '4207106', 'name' => "Ilhota"]);
        City::create(['state' => 24, 'ibge_code' => '4207205', 'name' => "Imaruí"]);
        City::create(['state' => 24, 'ibge_code' => '4207304', 'name' => "Imbituba"]);
        City::create(['state' => 24, 'ibge_code' => '4207403', 'name' => "Imbuia"]);
        City::create(['state' => 24, 'ibge_code' => '4207502', 'name' => "Indaial"]);
        City::create(['state' => 24, 'ibge_code' => '4207577', 'name' => "Iomerê"]);
        City::create(['state' => 24, 'ibge_code' => '4207601', 'name' => "Ipira"]);
        City::create(['state' => 24, 'ibge_code' => '4207650', 'name' => "Iporã do Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4207684', 'name' => "Ipuaçu"]);
        City::create(['state' => 24, 'ibge_code' => '4207700', 'name' => "Ipumirim"]);
        City::create(['state' => 24, 'ibge_code' => '4207759', 'name' => "Iraceminha"]);
        City::create(['state' => 24, 'ibge_code' => '4207809', 'name' => "Irani"]);
        City::create(['state' => 24, 'ibge_code' => '4207858', 'name' => "Irati"]);
        City::create(['state' => 24, 'ibge_code' => '4207908', 'name' => "Irineópolis"]);
        City::create(['state' => 24, 'ibge_code' => '4208005', 'name' => "Itá"]);
        City::create(['state' => 24, 'ibge_code' => '4208104', 'name' => "Itaiópolis"]);
        City::create(['state' => 24, 'ibge_code' => '4208203', 'name' => "Itajaí"]);
        City::create(['state' => 24, 'ibge_code' => '4208302', 'name' => "Itapema"]);
        City::create(['state' => 24, 'ibge_code' => '4208401', 'name' => "Itapiranga"]);
        City::create(['state' => 24, 'ibge_code' => '4208450', 'name' => "Itapoá"]);
        City::create(['state' => 24, 'ibge_code' => '4208500', 'name' => "Ituporanga"]);
        City::create(['state' => 24, 'ibge_code' => '4208609', 'name' => "Jaborá"]);
        City::create(['state' => 24, 'ibge_code' => '4208708', 'name' => "Jacinto Machado"]);
        City::create(['state' => 24, 'ibge_code' => '4208807', 'name' => "Jaguaruna"]);
        City::create(['state' => 24, 'ibge_code' => '4208906', 'name' => "Jaraguá do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4208955', 'name' => "Jardinópolis"]);
        City::create(['state' => 24, 'ibge_code' => '4209003', 'name' => "Joaçaba"]);
        City::create(['state' => 24, 'ibge_code' => '4209102', 'name' => "Joinville"]);
        City::create(['state' => 24, 'ibge_code' => '4209151', 'name' => "José Boiteux"]);
        City::create(['state' => 24, 'ibge_code' => '4209177', 'name' => "Jupiá"]);
        City::create(['state' => 24, 'ibge_code' => '4209201', 'name' => "Lacerdópolis"]);
        City::create(['state' => 24, 'ibge_code' => '4209300', 'name' => "Lages"]);
        City::create(['state' => 24, 'ibge_code' => '4209409', 'name' => "Laguna"]);
        City::create(['state' => 24, 'ibge_code' => '4209458', 'name' => "Lajeado Grande"]);
        City::create(['state' => 24, 'ibge_code' => '4209508', 'name' => "Laurentino"]);
        City::create(['state' => 24, 'ibge_code' => '4209607', 'name' => "Lauro Muller"]);
        City::create(['state' => 24, 'ibge_code' => '4209706', 'name' => "Lebon Régis"]);
        City::create(['state' => 24, 'ibge_code' => '4209805', 'name' => "Leoberto Leal"]);
        City::create(['state' => 24, 'ibge_code' => '4209854', 'name' => "Lindóia do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4209904', 'name' => "Lontras"]);
        City::create(['state' => 24, 'ibge_code' => '4210001', 'name' => "Luiz Alves"]);
        City::create(['state' => 24, 'ibge_code' => '4210035', 'name' => "Luzerna"]);
        City::create(['state' => 24, 'ibge_code' => '4210050', 'name' => "Macieira"]);
        City::create(['state' => 24, 'ibge_code' => '4210100', 'name' => "Mafra"]);
        City::create(['state' => 24, 'ibge_code' => '4210209', 'name' => "Major Gercino"]);
        City::create(['state' => 24, 'ibge_code' => '4210308', 'name' => "Major Vieira"]);
        City::create(['state' => 24, 'ibge_code' => '4210407', 'name' => "Maracajá"]);
        City::create(['state' => 24, 'ibge_code' => '4210506', 'name' => "Maravilha"]);
        City::create(['state' => 24, 'ibge_code' => '4210555', 'name' => "Marema"]);
        City::create(['state' => 24, 'ibge_code' => '4210605', 'name' => "Massaranduba"]);
        City::create(['state' => 24, 'ibge_code' => '4210704', 'name' => "Matos Costa"]);
        City::create(['state' => 24, 'ibge_code' => '4210803', 'name' => "Meleiro"]);
        City::create(['state' => 24, 'ibge_code' => '4210852', 'name' => "Mirim Doce"]);
        City::create(['state' => 24, 'ibge_code' => '4210902', 'name' => "Modelo"]);
        City::create(['state' => 24, 'ibge_code' => '4211009', 'name' => "Mondaí"]);
        City::create(['state' => 24, 'ibge_code' => '4211058', 'name' => "Monte Carlo"]);
        City::create(['state' => 24, 'ibge_code' => '4211108', 'name' => "Monte Castelo"]);
        City::create(['state' => 24, 'ibge_code' => '4211207', 'name' => "Morro da Fumaça"]);
        City::create(['state' => 24, 'ibge_code' => '4211256', 'name' => "Morro Grande"]);
        City::create(['state' => 24, 'ibge_code' => '4211306', 'name' => "Navegantes"]);
        City::create(['state' => 24, 'ibge_code' => '4211405', 'name' => "Nova Erechim"]);
        City::create(['state' => 24, 'ibge_code' => '4211454', 'name' => "Nova Itaberaba"]);
        City::create(['state' => 24, 'ibge_code' => '4211504', 'name' => "Nova Trento"]);
        City::create(['state' => 24, 'ibge_code' => '4211603', 'name' => "Nova Veneza"]);
        City::create(['state' => 24, 'ibge_code' => '4211652', 'name' => "Novo Horizonte"]);
        City::create(['state' => 24, 'ibge_code' => '4211702', 'name' => "Orleans"]);
        City::create(['state' => 24, 'ibge_code' => '4211751', 'name' => "Otacílio Costa"]);
        City::create(['state' => 24, 'ibge_code' => '4211801', 'name' => "Ouro"]);
        City::create(['state' => 24, 'ibge_code' => '4211850', 'name' => "Ouro Verde"]);
        City::create(['state' => 24, 'ibge_code' => '4211876', 'name' => "Paial"]);
        City::create(['state' => 24, 'ibge_code' => '4211892', 'name' => "Painel"]);
        City::create(['state' => 24, 'ibge_code' => '4211900', 'name' => "Palhoça"]);
        City::create(['state' => 24, 'ibge_code' => '4212007', 'name' => "Palma Sola"]);
        City::create(['state' => 24, 'ibge_code' => '4212056', 'name' => "Palmeira"]);
        City::create(['state' => 24, 'ibge_code' => '4212106', 'name' => "Palmitos"]);
        City::create(['state' => 24, 'ibge_code' => '4212205', 'name' => "Papanduva"]);
        City::create(['state' => 24, 'ibge_code' => '4212239', 'name' => "Paraíso"]);
        City::create(['state' => 24, 'ibge_code' => '4212254', 'name' => "Passo de Torres"]);
        City::create(['state' => 24, 'ibge_code' => '4212270', 'name' => "Passos Maia"]);
        City::create(['state' => 24, 'ibge_code' => '4212304', 'name' => "Paulo Lopes"]);
        City::create(['state' => 24, 'ibge_code' => '4212403', 'name' => "Pedras Grandes"]);
        City::create(['state' => 24, 'ibge_code' => '4212502', 'name' => "Penha"]);
        City::create(['state' => 24, 'ibge_code' => '4212601', 'name' => "Peritiba"]);
        City::create(['state' => 24, 'ibge_code' => '4212700', 'name' => "Petrolândia"]);
        City::create(['state' => 24, 'ibge_code' => '4212908', 'name' => "Pinhalzinho"]);
        City::create(['state' => 24, 'ibge_code' => '4213005', 'name' => "Pinheiro Preto"]);
        City::create(['state' => 24, 'ibge_code' => '4213104', 'name' => "Piratuba"]);
        City::create(['state' => 24, 'ibge_code' => '4213153', 'name' => "Planalto Alegre"]);
        City::create(['state' => 24, 'ibge_code' => '4213203', 'name' => "Pomerode"]);
        City::create(['state' => 24, 'ibge_code' => '4213302', 'name' => "Ponte Alta"]);
        City::create(['state' => 24, 'ibge_code' => '4213351', 'name' => "Ponte Alta do Norte"]);
        City::create(['state' => 24, 'ibge_code' => '4213401', 'name' => "Ponte Serrada"]);
        City::create(['state' => 24, 'ibge_code' => '4213500', 'name' => "Porto Belo"]);
        City::create(['state' => 24, 'ibge_code' => '4213609', 'name' => "Porto União"]);
        City::create(['state' => 24, 'ibge_code' => '4213708', 'name' => "Pouso Redondo"]);
        City::create(['state' => 24, 'ibge_code' => '4213807', 'name' => "Praia Grande"]);
        City::create(['state' => 24, 'ibge_code' => '4213906', 'name' => "Presidente Castello Branco"]);
        City::create(['state' => 24, 'ibge_code' => '4214003', 'name' => "Presidente Getúlio"]);
        City::create(['state' => 24, 'ibge_code' => '4214102', 'name' => "Presidente Nereu"]);
        City::create(['state' => 24, 'ibge_code' => '4214151', 'name' => "Princesa"]);
        City::create(['state' => 24, 'ibge_code' => '4214201', 'name' => "Quilombo"]);
        City::create(['state' => 24, 'ibge_code' => '4214300', 'name' => "Rancho Queimado"]);
        City::create(['state' => 24, 'ibge_code' => '4214409', 'name' => "Rio das Antas"]);
        City::create(['state' => 24, 'ibge_code' => '4214508', 'name' => "Rio do Campo"]);
        City::create(['state' => 24, 'ibge_code' => '4214607', 'name' => "Rio do Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4214805', 'name' => "Rio do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4214706', 'name' => "Rio dos Cedros"]);
        City::create(['state' => 24, 'ibge_code' => '4214904', 'name' => "Rio Fortuna"]);
        City::create(['state' => 24, 'ibge_code' => '4215000', 'name' => "Rio Negrinho"]);
        City::create(['state' => 24, 'ibge_code' => '4215059', 'name' => "Rio Rufino"]);
        City::create(['state' => 24, 'ibge_code' => '4215075', 'name' => "Riqueza"]);
        City::create(['state' => 24, 'ibge_code' => '4215109', 'name' => "Rodeio"]);
        City::create(['state' => 24, 'ibge_code' => '4215208', 'name' => "Romelândia"]);
        City::create(['state' => 24, 'ibge_code' => '4215307', 'name' => "Salete"]);
        City::create(['state' => 24, 'ibge_code' => '4215356', 'name' => "Saltinho"]);
        City::create(['state' => 24, 'ibge_code' => '4215406', 'name' => "Salto Veloso"]);
        City::create(['state' => 24, 'ibge_code' => '4215455', 'name' => "Sangão"]);
        City::create(['state' => 24, 'ibge_code' => '4215505', 'name' => "Santa Cecília"]);
        City::create(['state' => 24, 'ibge_code' => '4215554', 'name' => "Santa Helena"]);
        City::create(['state' => 24, 'ibge_code' => '4215604', 'name' => "Santa Rosa de Lima"]);
        City::create(['state' => 24, 'ibge_code' => '4215653', 'name' => "Santa Rosa do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4215679', 'name' => "Santa Terezinha"]);
        City::create(['state' => 24, 'ibge_code' => '4215687', 'name' => "Santa Terezinha do Progresso"]);
        City::create(['state' => 24, 'ibge_code' => '4215695', 'name' => "Santiago do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4215703', 'name' => "Santo Amaro da Imperatriz"]);
        City::create(['state' => 24, 'ibge_code' => '4215802', 'name' => "São Bento do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4215752', 'name' => "São Bernardino"]);
        City::create(['state' => 24, 'ibge_code' => '4215901', 'name' => "São Bonifácio"]);
        City::create(['state' => 24, 'ibge_code' => '4216008', 'name' => "São Carlos"]);
        City::create(['state' => 24, 'ibge_code' => '4216057', 'name' => "São Cristovão do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4216107', 'name' => "São Domingos"]);
        City::create(['state' => 24, 'ibge_code' => '4216206', 'name' => "São Francisco do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4216305', 'name' => "São João Batista"]);
        City::create(['state' => 24, 'ibge_code' => '4216354', 'name' => "São João do Itaperiú"]);
        City::create(['state' => 24, 'ibge_code' => '4216255', 'name' => "São João do Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4216404', 'name' => "São João do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4216503', 'name' => "São Joaquim"]);
        City::create(['state' => 24, 'ibge_code' => '4216602', 'name' => "São José"]);
        City::create(['state' => 24, 'ibge_code' => '4216701', 'name' => "São José do Cedro"]);
        City::create(['state' => 24, 'ibge_code' => '4216800', 'name' => "São José do Cerrito"]);
        City::create(['state' => 24, 'ibge_code' => '4216909', 'name' => "São Lourenço do Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4217006', 'name' => "São Ludgero"]);
        City::create(['state' => 24, 'ibge_code' => '4217105', 'name' => "São Martinho"]);
        City::create(['state' => 24, 'ibge_code' => '4217154', 'name' => "São Miguel da Boa Vista"]);
        City::create(['state' => 24, 'ibge_code' => '4217204', 'name' => "São Miguel do Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4217253', 'name' => "São Pedro de Alcântara"]);
        City::create(['state' => 24, 'ibge_code' => '4217303', 'name' => "Saudades"]);
        City::create(['state' => 24, 'ibge_code' => '4217402', 'name' => "Schroeder"]);
        City::create(['state' => 24, 'ibge_code' => '4217501', 'name' => "Seara"]);
        City::create(['state' => 24, 'ibge_code' => '4217550', 'name' => "Serra Alta"]);
        City::create(['state' => 24, 'ibge_code' => '4217600', 'name' => "Siderópolis"]);
        City::create(['state' => 24, 'ibge_code' => '4217709', 'name' => "Sombrio"]);
        City::create(['state' => 24, 'ibge_code' => '4217758', 'name' => "Sul Brasil"]);
        City::create(['state' => 24, 'ibge_code' => '4217808', 'name' => "Taió"]);
        City::create(['state' => 24, 'ibge_code' => '4217907', 'name' => "Tangará"]);
        City::create(['state' => 24, 'ibge_code' => '4217956', 'name' => "Tigrinhos"]);
        City::create(['state' => 24, 'ibge_code' => '4218004', 'name' => "Tijucas"]);
        City::create(['state' => 24, 'ibge_code' => '4218103', 'name' => "Timbé do Sul"]);
        City::create(['state' => 24, 'ibge_code' => '4218202', 'name' => "Timbó"]);
        City::create(['state' => 24, 'ibge_code' => '4218251', 'name' => "Timbó Grande"]);
        City::create(['state' => 24, 'ibge_code' => '4218301', 'name' => "Três Barras"]);
        City::create(['state' => 24, 'ibge_code' => '4218350', 'name' => "Treviso"]);
        City::create(['state' => 24, 'ibge_code' => '4218400', 'name' => "Treze de Maio"]);
        City::create(['state' => 24, 'ibge_code' => '4218509', 'name' => "Treze Tílias"]);
        City::create(['state' => 24, 'ibge_code' => '4218608', 'name' => "Trombudo Central"]);
        City::create(['state' => 24, 'ibge_code' => '4218707', 'name' => "Tubarão"]);
        City::create(['state' => 24, 'ibge_code' => '4218756', 'name' => "Tunápolis"]);
        City::create(['state' => 24, 'ibge_code' => '4218806', 'name' => "Turvo"]);
        City::create(['state' => 24, 'ibge_code' => '4218855', 'name' => "União do Oeste"]);
        City::create(['state' => 24, 'ibge_code' => '4218905', 'name' => "Urubici"]);
        City::create(['state' => 24, 'ibge_code' => '4218954', 'name' => "Urupema"]);
        City::create(['state' => 24, 'ibge_code' => '4219002', 'name' => "Urussanga"]);
        City::create(['state' => 24, 'ibge_code' => '4219101', 'name' => "Vargeão"]);
        City::create(['state' => 24, 'ibge_code' => '4219150', 'name' => "Vargem"]);
        City::create(['state' => 24, 'ibge_code' => '4219176', 'name' => "Vargem Bonita"]);
        City::create(['state' => 24, 'ibge_code' => '4219200', 'name' => "Vidal Ramos"]);
        City::create(['state' => 24, 'ibge_code' => '4219309', 'name' => "Videira"]);
        City::create(['state' => 24, 'ibge_code' => '4219358', 'name' => "Vitor Meireles"]);
        City::create(['state' => 24, 'ibge_code' => '4219408', 'name' => "Witmarsum"]);
        City::create(['state' => 24, 'ibge_code' => '4219507', 'name' => "Xanxerê"]);
        City::create(['state' => 24, 'ibge_code' => '4219606', 'name' => "Xavantina"]);
        City::create(['state' => 24, 'ibge_code' => '4219705', 'name' => "Xaxim"]);
        City::create(['state' => 24, 'ibge_code' => '4219853', 'name' => "Zortéa"]);

        City::create(['state' => 25, 'ibge_code' => '3500105', 'name' => "Adamantina"]);
        City::create(['state' => 25, 'ibge_code' => '3500204', 'name' => "Adolfo"]);
        City::create(['state' => 25, 'ibge_code' => '3500303', 'name' => "Aguaí"]);
        City::create(['state' => 25, 'ibge_code' => '3500402', 'name' => "Águas da Prata"]);
        City::create(['state' => 25, 'ibge_code' => '3500501', 'name' => "Águas de Lindóia"]);
        City::create(['state' => 25, 'ibge_code' => '3500550', 'name' => "Águas de Santa Bárbara"]);
        City::create(['state' => 25, 'ibge_code' => '3500600', 'name' => "Águas de São Pedro"]);
        City::create(['state' => 25, 'ibge_code' => '3500709', 'name' => "Agudos"]);
        City::create(['state' => 25, 'ibge_code' => '3500758', 'name' => "Alambari"]);
        City::create(['state' => 25, 'ibge_code' => '3500808', 'name' => "Alfredo Marcondes"]);
        City::create(['state' => 25, 'ibge_code' => '3500907', 'name' => "Altair"]);
        City::create(['state' => 25, 'ibge_code' => '3501004', 'name' => "Altinópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3501103', 'name' => "Alto Alegre"]);
        City::create(['state' => 25, 'ibge_code' => '3501152', 'name' => "Alumínio"]);
        City::create(['state' => 25, 'ibge_code' => '3501202', 'name' => "Álvares Florence"]);
        City::create(['state' => 25, 'ibge_code' => '3501301', 'name' => "Álvares Machado"]);
        City::create(['state' => 25, 'ibge_code' => '3501400', 'name' => "Álvaro de Carvalho"]);
        City::create(['state' => 25, 'ibge_code' => '3501509', 'name' => "Alvinlândia"]);
        City::create(['state' => 25, 'ibge_code' => '3501608', 'name' => "Americana"]);
        City::create(['state' => 25, 'ibge_code' => '3501707', 'name' => "Américo Brasiliense"]);
        City::create(['state' => 25, 'ibge_code' => '3501806', 'name' => "Américo de Campos"]);
        City::create(['state' => 25, 'ibge_code' => '3501905', 'name' => "Amparo"]);
        City::create(['state' => 25, 'ibge_code' => '3502002', 'name' => "Analândia"]);
        City::create(['state' => 25, 'ibge_code' => '3502101', 'name' => "Andradina"]);
        City::create(['state' => 25, 'ibge_code' => '3502200', 'name' => "Angatuba"]);
        City::create(['state' => 25, 'ibge_code' => '3502309', 'name' => "Anhembi"]);
        City::create(['state' => 25, 'ibge_code' => '3502408', 'name' => "Anhumas"]);
        City::create(['state' => 25, 'ibge_code' => '3502507', 'name' => "Aparecida"]);
        City::create(['state' => 25, 'ibge_code' => '3502606', 'name' => "Aparecida d'Oeste"]);
        City::create(['state' => 25, 'ibge_code' => '3502705', 'name' => "Apiaí"]);
        City::create(['state' => 25, 'ibge_code' => '3502754', 'name' => "Araçariguama"]);
        City::create(['state' => 25, 'ibge_code' => '3502804', 'name' => "Araçatuba"]);
        City::create(['state' => 25, 'ibge_code' => '3502903', 'name' => "Araçoiaba da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3503000', 'name' => "Aramina"]);
        City::create(['state' => 25, 'ibge_code' => '3503109', 'name' => "Arandu"]);
        City::create(['state' => 25, 'ibge_code' => '3503158', 'name' => "Arapeí"]);
        City::create(['state' => 25, 'ibge_code' => '3503208', 'name' => "Araraquara"]);
        City::create(['state' => 25, 'ibge_code' => '3503307', 'name' => "Araras"]);
        City::create(['state' => 25, 'ibge_code' => '3503356', 'name' => "Arco-Íris"]);
        City::create(['state' => 25, 'ibge_code' => '3503406', 'name' => "Arealva"]);
        City::create(['state' => 25, 'ibge_code' => '3503505', 'name' => "Areias"]);
        City::create(['state' => 25, 'ibge_code' => '3503604', 'name' => "Areiópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3503703', 'name' => "Ariranha"]);
        City::create(['state' => 25, 'ibge_code' => '3503802', 'name' => "Artur Nogueira"]);
        City::create(['state' => 25, 'ibge_code' => '3503901', 'name' => "Arujá"]);
        City::create(['state' => 25, 'ibge_code' => '3503950', 'name' => "Aspásia"]);
        City::create(['state' => 25, 'ibge_code' => '3504008', 'name' => "Assis"]);
        City::create(['state' => 25, 'ibge_code' => '3504107', 'name' => "Atibaia"]);
        City::create(['state' => 25, 'ibge_code' => '3504206', 'name' => "Auriflama"]);
        City::create(['state' => 25, 'ibge_code' => '3504305', 'name' => "Avaí"]);
        City::create(['state' => 25, 'ibge_code' => '3504404', 'name' => "Avanhandava"]);
        City::create(['state' => 25, 'ibge_code' => '3504503', 'name' => "Avaré"]);
        City::create(['state' => 25, 'ibge_code' => '3504602', 'name' => "Bady Bassitt"]);
        City::create(['state' => 25, 'ibge_code' => '3504701', 'name' => "Balbinos"]);
        City::create(['state' => 25, 'ibge_code' => '3504800', 'name' => "Bálsamo"]);
        City::create(['state' => 25, 'ibge_code' => '3504909', 'name' => "Bananal"]);
        City::create(['state' => 25, 'ibge_code' => '3505005', 'name' => "Barão de Antonina"]);
        City::create(['state' => 25, 'ibge_code' => '3505104', 'name' => "Barbosa"]);
        City::create(['state' => 25, 'ibge_code' => '3505203', 'name' => "Bariri"]);
        City::create(['state' => 25, 'ibge_code' => '3505302', 'name' => "Barra Bonita"]);
        City::create(['state' => 25, 'ibge_code' => '3505351', 'name' => "Barra do Chapéu"]);
        City::create(['state' => 25, 'ibge_code' => '3505401', 'name' => "Barra do Turvo"]);
        City::create(['state' => 25, 'ibge_code' => '3505500', 'name' => "Barretos"]);
        City::create(['state' => 25, 'ibge_code' => '3505609', 'name' => "Barrinha"]);
        City::create(['state' => 25, 'ibge_code' => '3505708', 'name' => "Barueri"]);
        City::create(['state' => 25, 'ibge_code' => '3505807', 'name' => "Bastos"]);
        City::create(['state' => 25, 'ibge_code' => '3505906', 'name' => "Batatais"]);
        City::create(['state' => 25, 'ibge_code' => '3506003', 'name' => "Bauru"]);
        City::create(['state' => 25, 'ibge_code' => '3506102', 'name' => "Bebedouro"]);
        City::create(['state' => 25, 'ibge_code' => '3506201', 'name' => "Bento de Abreu"]);
        City::create(['state' => 25, 'ibge_code' => '3506300', 'name' => "Bernardino de Campos"]);
        City::create(['state' => 25, 'ibge_code' => '3506359', 'name' => "Bertioga"]);
        City::create(['state' => 25, 'ibge_code' => '3506409', 'name' => "Bilac"]);
        City::create(['state' => 25, 'ibge_code' => '3506508', 'name' => "Birigui"]);
        City::create(['state' => 25, 'ibge_code' => '3506607', 'name' => "Biritiba-Mirim"]);
        City::create(['state' => 25, 'ibge_code' => '3506706', 'name' => "Boa Esperança do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3506805', 'name' => "Bocaina"]);
        City::create(['state' => 25, 'ibge_code' => '3506904', 'name' => "Bofete"]);
        City::create(['state' => 25, 'ibge_code' => '3507001', 'name' => "Boituva"]);
        City::create(['state' => 25, 'ibge_code' => '3507100', 'name' => "Bom Jesus dos Perdões"]);
        City::create(['state' => 25, 'ibge_code' => '3507159', 'name' => "Bom Sucesso de Itararé"]);
        City::create(['state' => 25, 'ibge_code' => '3507209', 'name' => "Borá"]);
        City::create(['state' => 25, 'ibge_code' => '3507308', 'name' => "Boracéia"]);
        City::create(['state' => 25, 'ibge_code' => '3507407', 'name' => "Borborema"]);
        City::create(['state' => 25, 'ibge_code' => '3507456', 'name' => "Borebi"]);
        City::create(['state' => 25, 'ibge_code' => '3507506', 'name' => "Botucatu"]);
        City::create(['state' => 25, 'ibge_code' => '3507605', 'name' => "Bragança Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3507704', 'name' => "Braúna"]);
        City::create(['state' => 25, 'ibge_code' => '3507753', 'name' => "Brejo Alegre"]);
        City::create(['state' => 25, 'ibge_code' => '3507803', 'name' => "Brodowski"]);
        City::create(['state' => 25, 'ibge_code' => '3507902', 'name' => "Brotas"]);
        City::create(['state' => 25, 'ibge_code' => '3508009', 'name' => "Buri"]);
        City::create(['state' => 25, 'ibge_code' => '3508108', 'name' => "Buritama"]);
        City::create(['state' => 25, 'ibge_code' => '3508207', 'name' => "Buritizal"]);
        City::create(['state' => 25, 'ibge_code' => '3508306', 'name' => "Cabrália Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3508405', 'name' => "Cabreúva"]);
        City::create(['state' => 25, 'ibge_code' => '3508504', 'name' => "Caçapava"]);
        City::create(['state' => 25, 'ibge_code' => '3508603', 'name' => "Cachoeira Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3508702', 'name' => "Caconde"]);
        City::create(['state' => 25, 'ibge_code' => '3508801', 'name' => "Cafelândia"]);
        City::create(['state' => 25, 'ibge_code' => '3508900', 'name' => "Caiabu"]);
        City::create(['state' => 25, 'ibge_code' => '3509007', 'name' => "Caieiras"]);
        City::create(['state' => 25, 'ibge_code' => '3509106', 'name' => "Caiuá"]);
        City::create(['state' => 25, 'ibge_code' => '3509205', 'name' => "Cajamar"]);
        City::create(['state' => 25, 'ibge_code' => '3509254', 'name' => "Cajati"]);
        City::create(['state' => 25, 'ibge_code' => '3509304', 'name' => "Cajobi"]);
        City::create(['state' => 25, 'ibge_code' => '3509403', 'name' => "Cajuru"]);
        City::create(['state' => 25, 'ibge_code' => '3509452', 'name' => "Campina do Monte Alegre"]);
        City::create(['state' => 25, 'ibge_code' => '3509502', 'name' => "Campinas"]);
        City::create(['state' => 25, 'ibge_code' => '3509601', 'name' => "Campo Limpo Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3509700', 'name' => "Campos do Jordão"]);
        City::create(['state' => 25, 'ibge_code' => '3509809', 'name' => "Campos Novos Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3509908', 'name' => "Cananéia"]);
        City::create(['state' => 25, 'ibge_code' => '3509957', 'name' => "Canas"]);
        City::create(['state' => 25, 'ibge_code' => '3510005', 'name' => "Cândido Mota"]);
        City::create(['state' => 25, 'ibge_code' => '3510104', 'name' => "Cândido Rodrigues"]);
        City::create(['state' => 25, 'ibge_code' => '3510153', 'name' => "Canitar"]);
        City::create(['state' => 25, 'ibge_code' => '3510203', 'name' => "Capão Bonito"]);
        City::create(['state' => 25, 'ibge_code' => '3510302', 'name' => "Capela do Alto"]);
        City::create(['state' => 25, 'ibge_code' => '3510401', 'name' => "Capivari"]);
        City::create(['state' => 25, 'ibge_code' => '3510500', 'name' => "Caraguatatuba"]);
        City::create(['state' => 25, 'ibge_code' => '3510609', 'name' => "Carapicuíba"]);
        City::create(['state' => 25, 'ibge_code' => '3510708', 'name' => "Cardoso"]);
        City::create(['state' => 25, 'ibge_code' => '3510807', 'name' => "Casa Branca"]);
        City::create(['state' => 25, 'ibge_code' => '3510906', 'name' => "Cássia dos Coqueiros"]);
        City::create(['state' => 25, 'ibge_code' => '3511003', 'name' => "Castilho"]);
        City::create(['state' => 25, 'ibge_code' => '3511102', 'name' => "Catanduva"]);
        City::create(['state' => 25, 'ibge_code' => '3511201', 'name' => "Catiguá"]);
        City::create(['state' => 25, 'ibge_code' => '3511300', 'name' => "Cedral"]);
        City::create(['state' => 25, 'ibge_code' => '3511409', 'name' => "Cerqueira César"]);
        City::create(['state' => 25, 'ibge_code' => '3511508', 'name' => "Cerquilho"]);
        City::create(['state' => 25, 'ibge_code' => '3511607', 'name' => "Cesário Lange"]);
        City::create(['state' => 25, 'ibge_code' => '3511706', 'name' => "Charqueada"]);
        City::create(['state' => 25, 'ibge_code' => '3557204', 'name' => "Chavantes"]);
        City::create(['state' => 25, 'ibge_code' => '3511904', 'name' => "Clementina"]);
        City::create(['state' => 25, 'ibge_code' => '3512001', 'name' => "Colina"]);
        City::create(['state' => 25, 'ibge_code' => '3512100', 'name' => "Colômbia"]);
        City::create(['state' => 25, 'ibge_code' => '3512209', 'name' => "Conchal"]);
        City::create(['state' => 25, 'ibge_code' => '3512308', 'name' => "Conchas"]);
        City::create(['state' => 25, 'ibge_code' => '3512407', 'name' => "Cordeirópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3512506', 'name' => "Coroados"]);
        City::create(['state' => 25, 'ibge_code' => '3512605', 'name' => "Coronel Macedo"]);
        City::create(['state' => 25, 'ibge_code' => '3512704', 'name' => "Corumbataí"]);
        City::create(['state' => 25, 'ibge_code' => '3512803', 'name' => "Cosmópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3512902', 'name' => "Cosmorama"]);
        City::create(['state' => 25, 'ibge_code' => '3513009', 'name' => "Cotia"]);
        City::create(['state' => 25, 'ibge_code' => '3513108', 'name' => "Cravinhos"]);
        City::create(['state' => 25, 'ibge_code' => '3513207', 'name' => "Cristais Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3513306', 'name' => "Cruzália"]);
        City::create(['state' => 25, 'ibge_code' => '3513405', 'name' => "Cruzeiro"]);
        City::create(['state' => 25, 'ibge_code' => '3513504', 'name' => "Cubatão"]);
        City::create(['state' => 25, 'ibge_code' => '3513603', 'name' => "Cunha"]);
        City::create(['state' => 25, 'ibge_code' => '3513702', 'name' => "Descalvado"]);
        City::create(['state' => 25, 'ibge_code' => '3513801', 'name' => "Diadema"]);
        City::create(['state' => 25, 'ibge_code' => '3513850', 'name' => "Dirce Reis"]);
        City::create(['state' => 25, 'ibge_code' => '3513900', 'name' => "Divinolândia"]);
        City::create(['state' => 25, 'ibge_code' => '3514007', 'name' => "Dobrada"]);
        City::create(['state' => 25, 'ibge_code' => '3514106', 'name' => "Dois Córregos"]);
        City::create(['state' => 25, 'ibge_code' => '3514205', 'name' => "Dolcinópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3514304', 'name' => "Dourado"]);
        City::create(['state' => 25, 'ibge_code' => '3514403', 'name' => "Dracena"]);
        City::create(['state' => 25, 'ibge_code' => '3514502', 'name' => "Duartina"]);
        City::create(['state' => 25, 'ibge_code' => '3514601', 'name' => "Dumont"]);
        City::create(['state' => 25, 'ibge_code' => '3514700', 'name' => "Echaporã"]);
        City::create(['state' => 25, 'ibge_code' => '3514809', 'name' => "Eldorado"]);
        City::create(['state' => 25, 'ibge_code' => '3514908', 'name' => "Elias Fausto"]);
        City::create(['state' => 25, 'ibge_code' => '3514924', 'name' => "Elisiário"]);
        City::create(['state' => 25, 'ibge_code' => '3514957', 'name' => "Embaúba"]);
        City::create(['state' => 25, 'ibge_code' => '3515004', 'name' => "Embu"]);
        City::create(['state' => 25, 'ibge_code' => '3515103', 'name' => "Embu-Guaçu"]);
        City::create(['state' => 25, 'ibge_code' => '3515129', 'name' => "Emilianópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3515152', 'name' => "Engenheiro Coelho"]);
        City::create(['state' => 25, 'ibge_code' => '3515186', 'name' => "Espírito Santo do Pinhal"]);
        City::create(['state' => 25, 'ibge_code' => '3515194', 'name' => "Espírito Santo do Turvo"]);
        City::create(['state' => 25, 'ibge_code' => '3557303', 'name' => "Estiva Gerbi"]);
        City::create(['state' => 25, 'ibge_code' => '3515301', 'name' => "Estrela do Norte"]);
        City::create(['state' => 25, 'ibge_code' => '3515202', 'name' => "Estrela d'Oeste"]);
        City::create(['state' => 25, 'ibge_code' => '3515350', 'name' => "Euclides da Cunha Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3515400', 'name' => "Fartura"]);
        City::create(['state' => 25, 'ibge_code' => '3515608', 'name' => "Fernando Prestes"]);
        City::create(['state' => 25, 'ibge_code' => '3515509', 'name' => "Fernandópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3515657', 'name' => "Fernão"]);
        City::create(['state' => 25, 'ibge_code' => '3515707', 'name' => "Ferraz de Vasconcelos"]);
        City::create(['state' => 25, 'ibge_code' => '3515806', 'name' => "Flora Rica"]);
        City::create(['state' => 25, 'ibge_code' => '3515905', 'name' => "Floreal"]);
        City::create(['state' => 25, 'ibge_code' => '3516002', 'name' => "Flórida Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3516101', 'name' => "Florínia"]);
        City::create(['state' => 25, 'ibge_code' => '3516200', 'name' => "Franca"]);
        City::create(['state' => 25, 'ibge_code' => '3516309', 'name' => "Francisco Morato"]);
        City::create(['state' => 25, 'ibge_code' => '3516408', 'name' => "Franco da Rocha"]);
        City::create(['state' => 25, 'ibge_code' => '3516507', 'name' => "Gabriel Monteiro"]);
        City::create(['state' => 25, 'ibge_code' => '3516606', 'name' => "Gália"]);
        City::create(['state' => 25, 'ibge_code' => '3516705', 'name' => "Garça"]);
        City::create(['state' => 25, 'ibge_code' => '3516804', 'name' => "Gastão Vidigal"]);
        City::create(['state' => 25, 'ibge_code' => '3516853', 'name' => "Gavião Peixoto"]);
        City::create(['state' => 25, 'ibge_code' => '3516903', 'name' => "General Salgado"]);
        City::create(['state' => 25, 'ibge_code' => '3517000', 'name' => "Getulina"]);
        City::create(['state' => 25, 'ibge_code' => '3517109', 'name' => "Glicério"]);
        City::create(['state' => 25, 'ibge_code' => '3517208', 'name' => "Guaiçara"]);
        City::create(['state' => 25, 'ibge_code' => '3517307', 'name' => "Guaimbê"]);
        City::create(['state' => 25, 'ibge_code' => '3517406', 'name' => "Guaíra"]);
        City::create(['state' => 25, 'ibge_code' => '3517505', 'name' => "Guapiaçu"]);
        City::create(['state' => 25, 'ibge_code' => '3517604', 'name' => "Guapiara"]);
        City::create(['state' => 25, 'ibge_code' => '3517703', 'name' => "Guará"]);
        City::create(['state' => 25, 'ibge_code' => '3517802', 'name' => "Guaraçaí"]);
        City::create(['state' => 25, 'ibge_code' => '3517901', 'name' => "Guaraci"]);
        City::create(['state' => 25, 'ibge_code' => '3518008', 'name' => "Guarani d'Oeste"]);
        City::create(['state' => 25, 'ibge_code' => '3518107', 'name' => "Guarantã"]);
        City::create(['state' => 25, 'ibge_code' => '3518206', 'name' => "Guararapes"]);
        City::create(['state' => 25, 'ibge_code' => '3518305', 'name' => "Guararema"]);
        City::create(['state' => 25, 'ibge_code' => '3518404', 'name' => "Guaratinguetá"]);
        City::create(['state' => 25, 'ibge_code' => '3518503', 'name' => "Guareí"]);
        City::create(['state' => 25, 'ibge_code' => '3518602', 'name' => "Guariba"]);
        City::create(['state' => 25, 'ibge_code' => '3518701', 'name' => "Guarujá"]);
        City::create(['state' => 25, 'ibge_code' => '3518800', 'name' => "Guarulhos"]);
        City::create(['state' => 25, 'ibge_code' => '3518859', 'name' => "Guatapará"]);
        City::create(['state' => 25, 'ibge_code' => '3518909', 'name' => "Guzolândia"]);
        City::create(['state' => 25, 'ibge_code' => '3519006', 'name' => "Herculândia"]);
        City::create(['state' => 25, 'ibge_code' => '3519055', 'name' => "Holambra"]);
        City::create(['state' => 25, 'ibge_code' => '3519071', 'name' => "Hortolândia"]);
        City::create(['state' => 25, 'ibge_code' => '3519105', 'name' => "Iacanga"]);
        City::create(['state' => 25, 'ibge_code' => '3519204', 'name' => "Iacri"]);
        City::create(['state' => 25, 'ibge_code' => '3519253', 'name' => "Iaras"]);
        City::create(['state' => 25, 'ibge_code' => '3519303', 'name' => "Ibaté"]);
        City::create(['state' => 25, 'ibge_code' => '3519402', 'name' => "Ibirá"]);
        City::create(['state' => 25, 'ibge_code' => '3519501', 'name' => "Ibirarema"]);
        City::create(['state' => 25, 'ibge_code' => '3519600', 'name' => "Ibitinga"]);
        City::create(['state' => 25, 'ibge_code' => '3519709', 'name' => "Ibiúna"]);
        City::create(['state' => 25, 'ibge_code' => '3519808', 'name' => "Icém"]);
        City::create(['state' => 25, 'ibge_code' => '3519907', 'name' => "Iepê"]);
        City::create(['state' => 25, 'ibge_code' => '3520004', 'name' => "Igaraçu do Tietê"]);
        City::create(['state' => 25, 'ibge_code' => '3520103', 'name' => "Igarapava"]);
        City::create(['state' => 25, 'ibge_code' => '3520202', 'name' => "Igaratá"]);
        City::create(['state' => 25, 'ibge_code' => '3520301', 'name' => "Iguape"]);
        City::create(['state' => 25, 'ibge_code' => '3520426', 'name' => "Ilha Comprida"]);
        City::create(['state' => 25, 'ibge_code' => '3520442', 'name' => "Ilha Solteira"]);
        City::create(['state' => 25, 'ibge_code' => '3520400', 'name' => "Ilhabela"]);
        City::create(['state' => 25, 'ibge_code' => '3520509', 'name' => "Indaiatuba"]);
        City::create(['state' => 25, 'ibge_code' => '3520608', 'name' => "Indiana"]);
        City::create(['state' => 25, 'ibge_code' => '3520707', 'name' => "Indiaporã"]);
        City::create(['state' => 25, 'ibge_code' => '3520806', 'name' => "Inúbia Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3520905', 'name' => "Ipaussu"]);
        City::create(['state' => 25, 'ibge_code' => '3521002', 'name' => "Iperó"]);
        City::create(['state' => 25, 'ibge_code' => '3521101', 'name' => "Ipeúna"]);
        City::create(['state' => 25, 'ibge_code' => '3521150', 'name' => "Ipiguá"]);
        City::create(['state' => 25, 'ibge_code' => '3521200', 'name' => "Iporanga"]);
        City::create(['state' => 25, 'ibge_code' => '3521309', 'name' => "Ipuã"]);
        City::create(['state' => 25, 'ibge_code' => '3521408', 'name' => "Iracemápolis"]);
        City::create(['state' => 25, 'ibge_code' => '3521507', 'name' => "Irapuã"]);
        City::create(['state' => 25, 'ibge_code' => '3521606', 'name' => "Irapuru"]);
        City::create(['state' => 25, 'ibge_code' => '3521705', 'name' => "Itaberá"]);
        City::create(['state' => 25, 'ibge_code' => '3521804', 'name' => "Itaí"]);
        City::create(['state' => 25, 'ibge_code' => '3521903', 'name' => "Itajobi"]);
        City::create(['state' => 25, 'ibge_code' => '3522000', 'name' => "Itaju"]);
        City::create(['state' => 25, 'ibge_code' => '3522109', 'name' => "Itanhaém"]);
        City::create(['state' => 25, 'ibge_code' => '3522158', 'name' => "Itaóca"]);
        City::create(['state' => 25, 'ibge_code' => '3522208', 'name' => "Itapecerica da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3522307', 'name' => "Itapetininga"]);
        City::create(['state' => 25, 'ibge_code' => '3522406', 'name' => "Itapeva"]);
        City::create(['state' => 25, 'ibge_code' => '3522505', 'name' => "Itapevi"]);
        City::create(['state' => 25, 'ibge_code' => '3522604', 'name' => "Itapira"]);
        City::create(['state' => 25, 'ibge_code' => '3522653', 'name' => "Itapirapuã Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3522703', 'name' => "Itápolis"]);
        City::create(['state' => 25, 'ibge_code' => '3522802', 'name' => "Itaporanga"]);
        City::create(['state' => 25, 'ibge_code' => '3522901', 'name' => "Itapuí"]);
        City::create(['state' => 25, 'ibge_code' => '3523008', 'name' => "Itapura"]);
        City::create(['state' => 25, 'ibge_code' => '3523107', 'name' => "Itaquaquecetuba"]);
        City::create(['state' => 25, 'ibge_code' => '3523206', 'name' => "Itararé"]);
        City::create(['state' => 25, 'ibge_code' => '3523305', 'name' => "Itariri"]);
        City::create(['state' => 25, 'ibge_code' => '3523404', 'name' => "Itatiba"]);
        City::create(['state' => 25, 'ibge_code' => '3523503', 'name' => "Itatinga"]);
        City::create(['state' => 25, 'ibge_code' => '3523602', 'name' => "Itirapina"]);
        City::create(['state' => 25, 'ibge_code' => '3523701', 'name' => "Itirapuã"]);
        City::create(['state' => 25, 'ibge_code' => '3523800', 'name' => "Itobi"]);
        City::create(['state' => 25, 'ibge_code' => '3523909', 'name' => "Itu"]);
        City::create(['state' => 25, 'ibge_code' => '3524006', 'name' => "Itupeva"]);
        City::create(['state' => 25, 'ibge_code' => '3524105', 'name' => "Ituverava"]);
        City::create(['state' => 25, 'ibge_code' => '3524204', 'name' => "Jaborandi"]);
        City::create(['state' => 25, 'ibge_code' => '3524303', 'name' => "Jaboticabal"]);
        City::create(['state' => 25, 'ibge_code' => '3524402', 'name' => "Jacareí"]);
        City::create(['state' => 25, 'ibge_code' => '3524501', 'name' => "Jaci"]);
        City::create(['state' => 25, 'ibge_code' => '3524600', 'name' => "Jacupiranga"]);
        City::create(['state' => 25, 'ibge_code' => '3524709', 'name' => "Jaguariúna"]);
        City::create(['state' => 25, 'ibge_code' => '3524808', 'name' => "Jales"]);
        City::create(['state' => 25, 'ibge_code' => '3524907', 'name' => "Jambeiro"]);
        City::create(['state' => 25, 'ibge_code' => '3525003', 'name' => "Jandira"]);
        City::create(['state' => 25, 'ibge_code' => '3525102', 'name' => "Jardinópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3525201', 'name' => "Jarinu"]);
        City::create(['state' => 25, 'ibge_code' => '3525300', 'name' => "Jaú"]);
        City::create(['state' => 25, 'ibge_code' => '3525409', 'name' => "Jeriquara"]);
        City::create(['state' => 25, 'ibge_code' => '3525508', 'name' => "Joanópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3525607', 'name' => "João Ramalho"]);
        City::create(['state' => 25, 'ibge_code' => '3525706', 'name' => "José Bonifácio"]);
        City::create(['state' => 25, 'ibge_code' => '3525805', 'name' => "Júlio Mesquita"]);
        City::create(['state' => 25, 'ibge_code' => '3525854', 'name' => "Jumirim"]);
        City::create(['state' => 25, 'ibge_code' => '3525904', 'name' => "Jundiaí"]);
        City::create(['state' => 25, 'ibge_code' => '3526001', 'name' => "Junqueirópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3526100', 'name' => "Juquiá"]);
        City::create(['state' => 25, 'ibge_code' => '3526209', 'name' => "Juquitiba"]);
        City::create(['state' => 25, 'ibge_code' => '3526308', 'name' => "Lagoinha"]);
        City::create(['state' => 25, 'ibge_code' => '3526407', 'name' => "Laranjal Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3526506', 'name' => "Lavínia"]);
        City::create(['state' => 25, 'ibge_code' => '3526605', 'name' => "Lavrinhas"]);
        City::create(['state' => 25, 'ibge_code' => '3526704', 'name' => "Leme"]);
        City::create(['state' => 25, 'ibge_code' => '3526803', 'name' => "Lençóis Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3526902', 'name' => "Limeira"]);
        City::create(['state' => 25, 'ibge_code' => '3527009', 'name' => "Lindóia"]);
        City::create(['state' => 25, 'ibge_code' => '3527108', 'name' => "Lins"]);
        City::create(['state' => 25, 'ibge_code' => '3527207', 'name' => "Lorena"]);
        City::create(['state' => 25, 'ibge_code' => '3527256', 'name' => "Lourdes"]);
        City::create(['state' => 25, 'ibge_code' => '3527306', 'name' => "Louveira"]);
        City::create(['state' => 25, 'ibge_code' => '3527405', 'name' => "Lucélia"]);
        City::create(['state' => 25, 'ibge_code' => '3527504', 'name' => "Lucianópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3527603', 'name' => "Luís Antônio"]);
        City::create(['state' => 25, 'ibge_code' => '3527702', 'name' => "Luiziânia"]);
        City::create(['state' => 25, 'ibge_code' => '3527801', 'name' => "Lupércio"]);
        City::create(['state' => 25, 'ibge_code' => '3527900', 'name' => "Lutécia"]);
        City::create(['state' => 25, 'ibge_code' => '3528007', 'name' => "Macatuba"]);
        City::create(['state' => 25, 'ibge_code' => '3528106', 'name' => "Macaubal"]);
        City::create(['state' => 25, 'ibge_code' => '3528205', 'name' => "Macedônia"]);
        City::create(['state' => 25, 'ibge_code' => '3528304', 'name' => "Magda"]);
        City::create(['state' => 25, 'ibge_code' => '3528403', 'name' => "Mairinque"]);
        City::create(['state' => 25, 'ibge_code' => '3528502', 'name' => "Mairiporã"]);
        City::create(['state' => 25, 'ibge_code' => '3528601', 'name' => "Manduri"]);
        City::create(['state' => 25, 'ibge_code' => '3528700', 'name' => "Marabá Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3528809', 'name' => "Maracaí"]);
        City::create(['state' => 25, 'ibge_code' => '3528858', 'name' => "Marapoama"]);
        City::create(['state' => 25, 'ibge_code' => '3528908', 'name' => "Mariápolis"]);
        City::create(['state' => 25, 'ibge_code' => '3529005', 'name' => "Marília"]);
        City::create(['state' => 25, 'ibge_code' => '3529104', 'name' => "Marinópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3529203', 'name' => "Martinópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3529302', 'name' => "Matão"]);
        City::create(['state' => 25, 'ibge_code' => '3529401', 'name' => "Mauá"]);
        City::create(['state' => 25, 'ibge_code' => '3529500', 'name' => "Mendonça"]);
        City::create(['state' => 25, 'ibge_code' => '3529609', 'name' => "Meridiano"]);
        City::create(['state' => 25, 'ibge_code' => '3529658', 'name' => "Mesópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3529708', 'name' => "Miguelópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3529807', 'name' => "Mineiros do Tietê"]);
        City::create(['state' => 25, 'ibge_code' => '3530003', 'name' => "Mira Estrela"]);
        City::create(['state' => 25, 'ibge_code' => '3529906', 'name' => "Miracatu"]);
        City::create(['state' => 25, 'ibge_code' => '3530102', 'name' => "Mirandópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3530201', 'name' => "Mirante do Paranapanema"]);
        City::create(['state' => 25, 'ibge_code' => '3530300', 'name' => "Mirassol"]);
        City::create(['state' => 25, 'ibge_code' => '3530409', 'name' => "Mirassolândia"]);
        City::create(['state' => 25, 'ibge_code' => '3530508', 'name' => "Mococa"]);
        City::create(['state' => 25, 'ibge_code' => '3530607', 'name' => "Mogi das Cruzes"]);
        City::create(['state' => 25, 'ibge_code' => '3530706', 'name' => "Mogi Guaçu"]);
        City::create(['state' => 25, 'ibge_code' => '3530805', 'name' => "Moji Mirim"]);
        City::create(['state' => 25, 'ibge_code' => '3530904', 'name' => "Mombuca"]);
        City::create(['state' => 25, 'ibge_code' => '3531001', 'name' => "Monções"]);
        City::create(['state' => 25, 'ibge_code' => '3531100', 'name' => "Mongaguá"]);
        City::create(['state' => 25, 'ibge_code' => '3531209', 'name' => "Monte Alegre do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3531308', 'name' => "Monte Alto"]);
        City::create(['state' => 25, 'ibge_code' => '3531407', 'name' => "Monte Aprazível"]);
        City::create(['state' => 25, 'ibge_code' => '3531506', 'name' => "Monte Azul Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3531605', 'name' => "Monte Castelo"]);
        City::create(['state' => 25, 'ibge_code' => '3531803', 'name' => "Monte Mor"]);
        City::create(['state' => 25, 'ibge_code' => '3531704', 'name' => "Monteiro Lobato"]);
        City::create(['state' => 25, 'ibge_code' => '3531902', 'name' => "Morro Agudo"]);
        City::create(['state' => 25, 'ibge_code' => '3532009', 'name' => "Morungaba"]);
        City::create(['state' => 25, 'ibge_code' => '3532058', 'name' => "Motuca"]);
        City::create(['state' => 25, 'ibge_code' => '3532108', 'name' => "Murutinga do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3532157', 'name' => "Nantes"]);
        City::create(['state' => 25, 'ibge_code' => '3532207', 'name' => "Narandiba"]);
        City::create(['state' => 25, 'ibge_code' => '3532306', 'name' => "Natividade da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3532405', 'name' => "Nazaré Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3532504', 'name' => "Neves Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3532603', 'name' => "Nhandeara"]);
        City::create(['state' => 25, 'ibge_code' => '3532702', 'name' => "Nipoã"]);
        City::create(['state' => 25, 'ibge_code' => '3532801', 'name' => "Nova Aliança"]);
        City::create(['state' => 25, 'ibge_code' => '3532827', 'name' => "Nova Campina"]);
        City::create(['state' => 25, 'ibge_code' => '3532843', 'name' => "Nova Canaã Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3532868', 'name' => "Nova Castilho"]);
        City::create(['state' => 25, 'ibge_code' => '3532900', 'name' => "Nova Europa"]);
        City::create(['state' => 25, 'ibge_code' => '3533007', 'name' => "Nova Granada"]);
        City::create(['state' => 25, 'ibge_code' => '3533106', 'name' => "Nova Guataporanga"]);
        City::create(['state' => 25, 'ibge_code' => '3533205', 'name' => "Nova Independência"]);
        City::create(['state' => 25, 'ibge_code' => '3533304', 'name' => "Nova Luzitânia"]);
        City::create(['state' => 25, 'ibge_code' => '3533403', 'name' => "Nova Odessa"]);
        City::create(['state' => 25, 'ibge_code' => '3533254', 'name' => "Novais"]);
        City::create(['state' => 25, 'ibge_code' => '3533502', 'name' => "Novo Horizonte"]);
        City::create(['state' => 25, 'ibge_code' => '3533601', 'name' => "Nuporanga"]);
        City::create(['state' => 25, 'ibge_code' => '3533700', 'name' => "Ocauçu"]);
        City::create(['state' => 25, 'ibge_code' => '3533809', 'name' => "Óleo"]);
        City::create(['state' => 25, 'ibge_code' => '3533908', 'name' => "Olímpia"]);
        City::create(['state' => 25, 'ibge_code' => '3534005', 'name' => "Onda Verde"]);
        City::create(['state' => 25, 'ibge_code' => '3534104', 'name' => "Oriente"]);
        City::create(['state' => 25, 'ibge_code' => '3534203', 'name' => "Orindiúva"]);
        City::create(['state' => 25, 'ibge_code' => '3534302', 'name' => "Orlândia"]);
        City::create(['state' => 25, 'ibge_code' => '3534401', 'name' => "Osasco"]);
        City::create(['state' => 25, 'ibge_code' => '3534500', 'name' => "Oscar Bressane"]);
        City::create(['state' => 25, 'ibge_code' => '3534609', 'name' => "Osvaldo Cruz"]);
        City::create(['state' => 25, 'ibge_code' => '3534708', 'name' => "Ourinhos"]);
        City::create(['state' => 25, 'ibge_code' => '3534807', 'name' => "Ouro Verde"]);
        City::create(['state' => 25, 'ibge_code' => '3534757', 'name' => "Ouroeste"]);
        City::create(['state' => 25, 'ibge_code' => '3534906', 'name' => "Pacaembu"]);
        City::create(['state' => 25, 'ibge_code' => '3535002', 'name' => "Palestina"]);
        City::create(['state' => 25, 'ibge_code' => '3535101', 'name' => "Palmares Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3535200', 'name' => "Palmeira d'Oeste"]);
        City::create(['state' => 25, 'ibge_code' => '3535309', 'name' => "Palmital"]);
        City::create(['state' => 25, 'ibge_code' => '3535408', 'name' => "Panorama"]);
        City::create(['state' => 25, 'ibge_code' => '3535507', 'name' => "Paraguaçu Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3535606', 'name' => "Paraibuna"]);
        City::create(['state' => 25, 'ibge_code' => '3535705', 'name' => "Paraíso"]);
        City::create(['state' => 25, 'ibge_code' => '3535804', 'name' => "Paranapanema"]);
        City::create(['state' => 25, 'ibge_code' => '3535903', 'name' => "Paranapuã"]);
        City::create(['state' => 25, 'ibge_code' => '3536000', 'name' => "Parapuã"]);
        City::create(['state' => 25, 'ibge_code' => '3536109', 'name' => "Pardinho"]);
        City::create(['state' => 25, 'ibge_code' => '3536208', 'name' => "Pariquera-Açu"]);
        City::create(['state' => 25, 'ibge_code' => '3536257', 'name' => "Parisi"]);
        City::create(['state' => 25, 'ibge_code' => '3536307', 'name' => "Patrocínio Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3536406', 'name' => "Paulicéia"]);
        City::create(['state' => 25, 'ibge_code' => '3536505', 'name' => "Paulínia"]);
        City::create(['state' => 25, 'ibge_code' => '3536570', 'name' => "Paulistânia"]);
        City::create(['state' => 25, 'ibge_code' => '3536604', 'name' => "Paulo de Faria"]);
        City::create(['state' => 25, 'ibge_code' => '3536703', 'name' => "Pederneiras"]);
        City::create(['state' => 25, 'ibge_code' => '3536802', 'name' => "Pedra Bela"]);
        City::create(['state' => 25, 'ibge_code' => '3536901', 'name' => "Pedranópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3537008', 'name' => "Pedregulho"]);
        City::create(['state' => 25, 'ibge_code' => '3537107', 'name' => "Pedreira"]);
        City::create(['state' => 25, 'ibge_code' => '3537156', 'name' => "Pedrinhas Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3537206', 'name' => "Pedro de Toledo"]);
        City::create(['state' => 25, 'ibge_code' => '3537305', 'name' => "Penápolis"]);
        City::create(['state' => 25, 'ibge_code' => '3537404', 'name' => "Pereira Barreto"]);
        City::create(['state' => 25, 'ibge_code' => '3537503', 'name' => "Pereiras"]);
        City::create(['state' => 25, 'ibge_code' => '3537602', 'name' => "Peruíbe"]);
        City::create(['state' => 25, 'ibge_code' => '3537701', 'name' => "Piacatu"]);
        City::create(['state' => 25, 'ibge_code' => '3537800', 'name' => "Piedade"]);
        City::create(['state' => 25, 'ibge_code' => '3537909', 'name' => "Pilar do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3538006', 'name' => "Pindamonhangaba"]);
        City::create(['state' => 25, 'ibge_code' => '3538105', 'name' => "Pindorama"]);
        City::create(['state' => 25, 'ibge_code' => '3538204', 'name' => "Pinhalzinho"]);
        City::create(['state' => 25, 'ibge_code' => '3538303', 'name' => "Piquerobi"]);
        City::create(['state' => 25, 'ibge_code' => '3538501', 'name' => "Piquete"]);
        City::create(['state' => 25, 'ibge_code' => '3538600', 'name' => "Piracaia"]);
        City::create(['state' => 25, 'ibge_code' => '3538709', 'name' => "Piracicaba"]);
        City::create(['state' => 25, 'ibge_code' => '3538808', 'name' => "Piraju"]);
        City::create(['state' => 25, 'ibge_code' => '3538907', 'name' => "Pirajuí"]);
        City::create(['state' => 25, 'ibge_code' => '3539004', 'name' => "Pirangi"]);
        City::create(['state' => 25, 'ibge_code' => '3539103', 'name' => "Pirapora do Bom Jesus"]);
        City::create(['state' => 25, 'ibge_code' => '3539202', 'name' => "Pirapozinho"]);
        City::create(['state' => 25, 'ibge_code' => '3539301', 'name' => "Pirassununga"]);
        City::create(['state' => 25, 'ibge_code' => '3539400', 'name' => "Piratininga"]);
        City::create(['state' => 25, 'ibge_code' => '3539509', 'name' => "Pitangueiras"]);
        City::create(['state' => 25, 'ibge_code' => '3539608', 'name' => "Planalto"]);
        City::create(['state' => 25, 'ibge_code' => '3539707', 'name' => "Platina"]);
        City::create(['state' => 25, 'ibge_code' => '3539806', 'name' => "Poá"]);
        City::create(['state' => 25, 'ibge_code' => '3539905', 'name' => "Poloni"]);
        City::create(['state' => 25, 'ibge_code' => '3540002', 'name' => "Pompéia"]);
        City::create(['state' => 25, 'ibge_code' => '3540101', 'name' => "Pongaí"]);
        City::create(['state' => 25, 'ibge_code' => '3540200', 'name' => "Pontal"]);
        City::create(['state' => 25, 'ibge_code' => '3540259', 'name' => "Pontalinda"]);
        City::create(['state' => 25, 'ibge_code' => '3540309', 'name' => "Pontes Gestal"]);
        City::create(['state' => 25, 'ibge_code' => '3540408', 'name' => "Populina"]);
        City::create(['state' => 25, 'ibge_code' => '3540507', 'name' => "Porangaba"]);
        City::create(['state' => 25, 'ibge_code' => '3540606', 'name' => "Porto Feliz"]);
        City::create(['state' => 25, 'ibge_code' => '3540705', 'name' => "Porto Ferreira"]);
        City::create(['state' => 25, 'ibge_code' => '3540754', 'name' => "Potim"]);
        City::create(['state' => 25, 'ibge_code' => '3540804', 'name' => "Potirendaba"]);
        City::create(['state' => 25, 'ibge_code' => '3540853', 'name' => "Pracinha"]);
        City::create(['state' => 25, 'ibge_code' => '3540903', 'name' => "Pradópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3541000', 'name' => "Praia Grande"]);
        City::create(['state' => 25, 'ibge_code' => '3541059', 'name' => "Pratânia"]);
        City::create(['state' => 25, 'ibge_code' => '3541109', 'name' => "Presidente Alves"]);
        City::create(['state' => 25, 'ibge_code' => '3541208', 'name' => "Presidente Bernardes"]);
        City::create(['state' => 25, 'ibge_code' => '3541307', 'name' => "Presidente Epitácio"]);
        City::create(['state' => 25, 'ibge_code' => '3541406', 'name' => "Presidente Prudente"]);
        City::create(['state' => 25, 'ibge_code' => '3541505', 'name' => "Presidente Venceslau"]);
        City::create(['state' => 25, 'ibge_code' => '3541604', 'name' => "Promissão"]);
        City::create(['state' => 25, 'ibge_code' => '3541653', 'name' => "Quadra"]);
        City::create(['state' => 25, 'ibge_code' => '3541703', 'name' => "Quatá"]);
        City::create(['state' => 25, 'ibge_code' => '3541802', 'name' => "Queiroz"]);
        City::create(['state' => 25, 'ibge_code' => '3541901', 'name' => "Queluz"]);
        City::create(['state' => 25, 'ibge_code' => '3542008', 'name' => "Quintana"]);
        City::create(['state' => 25, 'ibge_code' => '3542107', 'name' => "Rafard"]);
        City::create(['state' => 25, 'ibge_code' => '3542206', 'name' => "Rancharia"]);
        City::create(['state' => 25, 'ibge_code' => '3542305', 'name' => "Redenção da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3542404', 'name' => "Regente Feijó"]);
        City::create(['state' => 25, 'ibge_code' => '3542503', 'name' => "Reginópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3542602', 'name' => "Registro"]);
        City::create(['state' => 25, 'ibge_code' => '3542701', 'name' => "Restinga"]);
        City::create(['state' => 25, 'ibge_code' => '3542800', 'name' => "Ribeira"]);
        City::create(['state' => 25, 'ibge_code' => '3542909', 'name' => "Ribeirão Bonito"]);
        City::create(['state' => 25, 'ibge_code' => '3543006', 'name' => "Ribeirão Branco"]);
        City::create(['state' => 25, 'ibge_code' => '3543105', 'name' => "Ribeirão Corrente"]);
        City::create(['state' => 25, 'ibge_code' => '3543204', 'name' => "Ribeirão do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3543238', 'name' => "Ribeirão dos Índios"]);
        City::create(['state' => 25, 'ibge_code' => '3543253', 'name' => "Ribeirão Grande"]);
        City::create(['state' => 25, 'ibge_code' => '3543303', 'name' => "Ribeirão Pires"]);
        City::create(['state' => 25, 'ibge_code' => '3543402', 'name' => "Ribeirão Preto"]);
        City::create(['state' => 25, 'ibge_code' => '3543600', 'name' => "Rifaina"]);
        City::create(['state' => 25, 'ibge_code' => '3543709', 'name' => "Rincão"]);
        City::create(['state' => 25, 'ibge_code' => '3543808', 'name' => "Rinópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3543907', 'name' => "Rio Claro"]);
        City::create(['state' => 25, 'ibge_code' => '3544004', 'name' => "Rio das Pedras"]);
        City::create(['state' => 25, 'ibge_code' => '3544103', 'name' => "Rio Grande da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3544202', 'name' => "Riolândia"]);
        City::create(['state' => 25, 'ibge_code' => '3543501', 'name' => "Riversul"]);
        City::create(['state' => 25, 'ibge_code' => '3544251', 'name' => "Rosana"]);
        City::create(['state' => 25, 'ibge_code' => '3544301', 'name' => "Roseira"]);
        City::create(['state' => 25, 'ibge_code' => '3544400', 'name' => "Rubiácea"]);
        City::create(['state' => 25, 'ibge_code' => '3544509', 'name' => "Rubinéia"]);
        City::create(['state' => 25, 'ibge_code' => '3544608', 'name' => "Sabino"]);
        City::create(['state' => 25, 'ibge_code' => '3544707', 'name' => "Sagres"]);
        City::create(['state' => 25, 'ibge_code' => '3544806', 'name' => "Sales"]);
        City::create(['state' => 25, 'ibge_code' => '3544905', 'name' => "Sales Oliveira"]);
        City::create(['state' => 25, 'ibge_code' => '3545001', 'name' => "Salesópolis"]);
        City::create(['state' => 25, 'ibge_code' => '3545100', 'name' => "Salmourão"]);
        City::create(['state' => 25, 'ibge_code' => '3545159', 'name' => "Saltinho"]);
        City::create(['state' => 25, 'ibge_code' => '3545209', 'name' => "Salto"]);
        City::create(['state' => 25, 'ibge_code' => '3545308', 'name' => "Salto de Pirapora"]);
        City::create(['state' => 25, 'ibge_code' => '3545407', 'name' => "Salto Grande"]);
        City::create(['state' => 25, 'ibge_code' => '3545506', 'name' => "Sandovalina"]);
        City::create(['state' => 25, 'ibge_code' => '3545605', 'name' => "Santa Adélia"]);
        City::create(['state' => 25, 'ibge_code' => '3545704', 'name' => "Santa Albertina"]);
        City::create(['state' => 25, 'ibge_code' => '3545803', 'name' => "Santa Bárbara d'Oeste"]);
        City::create(['state' => 25, 'ibge_code' => '3546009', 'name' => "Santa Branca"]);
        City::create(['state' => 25, 'ibge_code' => '3546108', 'name' => "Santa Clara d'Oeste"]);
        City::create(['state' => 25, 'ibge_code' => '3546207', 'name' => "Santa Cruz da Conceição"]);
        City::create(['state' => 25, 'ibge_code' => '3546256', 'name' => "Santa Cruz da Esperança"]);
        City::create(['state' => 25, 'ibge_code' => '3546306', 'name' => "Santa Cruz das Palmeiras"]);
        City::create(['state' => 25, 'ibge_code' => '3546405', 'name' => "Santa Cruz do Rio Pardo"]);
        City::create(['state' => 25, 'ibge_code' => '3546504', 'name' => "Santa Ernestina"]);
        City::create(['state' => 25, 'ibge_code' => '3546603', 'name' => "Santa Fé do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3546702', 'name' => "Santa Gertrudes"]);
        City::create(['state' => 25, 'ibge_code' => '3546801', 'name' => "Santa Isabel"]);
        City::create(['state' => 25, 'ibge_code' => '3546900', 'name' => "Santa Lúcia"]);
        City::create(['state' => 25, 'ibge_code' => '3547007', 'name' => "Santa Maria da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3547106', 'name' => "Santa Mercedes"]);
        City::create(['state' => 25, 'ibge_code' => '3547502', 'name' => "Santa Rita do Passa Quatro"]);
        City::create(['state' => 25, 'ibge_code' => '3547403', 'name' => "Santa Rita d'Oeste"]);
        City::create(['state' => 25, 'ibge_code' => '3547601', 'name' => "Santa Rosa de Viterbo"]);
        City::create(['state' => 25, 'ibge_code' => '3547650', 'name' => "Santa Salete"]);
        City::create(['state' => 25, 'ibge_code' => '3547205', 'name' => "Santana da Ponte Pensa"]);
        City::create(['state' => 25, 'ibge_code' => '3547304', 'name' => "Santana de Parnaíba"]);
        City::create(['state' => 25, 'ibge_code' => '3547700', 'name' => "Santo Anastácio"]);
        City::create(['state' => 25, 'ibge_code' => '3547809', 'name' => "Santo André"]);
        City::create(['state' => 25, 'ibge_code' => '3547908', 'name' => "Santo Antônio da Alegria"]);
        City::create(['state' => 25, 'ibge_code' => '3548005', 'name' => "Santo Antônio de Posse"]);
        City::create(['state' => 25, 'ibge_code' => '3548054', 'name' => "Santo Antônio do Aracanguá"]);
        City::create(['state' => 25, 'ibge_code' => '3548104', 'name' => "Santo Antônio do Jardim"]);
        City::create(['state' => 25, 'ibge_code' => '3548203', 'name' => "Santo Antônio do Pinhal"]);
        City::create(['state' => 25, 'ibge_code' => '3548302', 'name' => "Santo Expedito"]);
        City::create(['state' => 25, 'ibge_code' => '3548401', 'name' => "Santópolis do Aguapeí"]);
        City::create(['state' => 25, 'ibge_code' => '3548500', 'name' => "Santos"]);
        City::create(['state' => 25, 'ibge_code' => '3548609', 'name' => "São Bento do Sapucaí"]);
        City::create(['state' => 25, 'ibge_code' => '3548708', 'name' => "São Bernardo do Campo"]);
        City::create(['state' => 25, 'ibge_code' => '3548807', 'name' => "São Caetano do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3548906', 'name' => "São Carlos"]);
        City::create(['state' => 25, 'ibge_code' => '3549003', 'name' => "São Francisco"]);
        City::create(['state' => 25, 'ibge_code' => '3549102', 'name' => "São João da Boa Vista"]);
        City::create(['state' => 25, 'ibge_code' => '3549201', 'name' => "São João das Duas Pontes"]);
        City::create(['state' => 25, 'ibge_code' => '3549250', 'name' => "São João de Iracema"]);
        City::create(['state' => 25, 'ibge_code' => '3549300', 'name' => "São João do Pau d'Alho"]);
        City::create(['state' => 25, 'ibge_code' => '3549409', 'name' => "São Joaquim da Barra"]);
        City::create(['state' => 25, 'ibge_code' => '3549508', 'name' => "São José da Bela Vista"]);
        City::create(['state' => 25, 'ibge_code' => '3549607', 'name' => "São José do Barreiro"]);
        City::create(['state' => 25, 'ibge_code' => '3549706', 'name' => "São José do Rio Pardo"]);
        City::create(['state' => 25, 'ibge_code' => '3549805', 'name' => "São José do Rio Preto"]);
        City::create(['state' => 25, 'ibge_code' => '3549904', 'name' => "São José dos Campos"]);
        City::create(['state' => 25, 'ibge_code' => '3549953', 'name' => "São Lourenço da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3550001', 'name' => "São Luís do Paraitinga"]);
        City::create(['state' => 25, 'ibge_code' => '3550100', 'name' => "São Manuel"]);
        City::create(['state' => 25, 'ibge_code' => '3550209', 'name' => "São Miguel Arcanjo"]);
        City::create(['state' => 25, 'ibge_code' => '3550308', 'name' => "São Paulo"]);
        City::create(['state' => 25, 'ibge_code' => '3550407', 'name' => "São Pedro"]);
        City::create(['state' => 25, 'ibge_code' => '3550506', 'name' => "São Pedro do Turvo"]);
        City::create(['state' => 25, 'ibge_code' => '3550605', 'name' => "São Roque"]);
        City::create(['state' => 25, 'ibge_code' => '3550704', 'name' => "São Sebastião"]);
        City::create(['state' => 25, 'ibge_code' => '3550803', 'name' => "São Sebastião da Grama"]);
        City::create(['state' => 25, 'ibge_code' => '3550902', 'name' => "São Simão"]);
        City::create(['state' => 25, 'ibge_code' => '3551009', 'name' => "São Vicente"]);
        City::create(['state' => 25, 'ibge_code' => '3551108', 'name' => "Sarapuí"]);
        City::create(['state' => 25, 'ibge_code' => '3551207', 'name' => "Sarutaiá"]);
        City::create(['state' => 25, 'ibge_code' => '3551306', 'name' => "Sebastianópolis do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3551405', 'name' => "Serra Azul"]);
        City::create(['state' => 25, 'ibge_code' => '3551603', 'name' => "Serra Negra"]);
        City::create(['state' => 25, 'ibge_code' => '3551504', 'name' => "Serrana"]);
        City::create(['state' => 25, 'ibge_code' => '3551702', 'name' => "Sertãozinho"]);
        City::create(['state' => 25, 'ibge_code' => '3551801', 'name' => "Sete Barras"]);
        City::create(['state' => 25, 'ibge_code' => '3551900', 'name' => "Severínia"]);
        City::create(['state' => 25, 'ibge_code' => '3552007', 'name' => "Silveiras"]);
        City::create(['state' => 25, 'ibge_code' => '3552106', 'name' => "Socorro"]);
        City::create(['state' => 25, 'ibge_code' => '3552205', 'name' => "Sorocaba"]);
        City::create(['state' => 25, 'ibge_code' => '3552304', 'name' => "Sud Mennucci"]);
        City::create(['state' => 25, 'ibge_code' => '3552403', 'name' => "Sumaré"]);
        City::create(['state' => 25, 'ibge_code' => '3552551', 'name' => "Suzanápolis"]);
        City::create(['state' => 25, 'ibge_code' => '3552502', 'name' => "Suzano"]);
        City::create(['state' => 25, 'ibge_code' => '3552601', 'name' => "Tabapuã"]);
        City::create(['state' => 25, 'ibge_code' => '3552700', 'name' => "Tabatinga"]);
        City::create(['state' => 25, 'ibge_code' => '3552809', 'name' => "Taboão da Serra"]);
        City::create(['state' => 25, 'ibge_code' => '3552908', 'name' => "Taciba"]);
        City::create(['state' => 25, 'ibge_code' => '3553005', 'name' => "Taguaí"]);
        City::create(['state' => 25, 'ibge_code' => '3553104', 'name' => "Taiaçu"]);
        City::create(['state' => 25, 'ibge_code' => '3553203', 'name' => "Taiúva"]);
        City::create(['state' => 25, 'ibge_code' => '3553302', 'name' => "Tambaú"]);
        City::create(['state' => 25, 'ibge_code' => '3553401', 'name' => "Tanabi"]);
        City::create(['state' => 25, 'ibge_code' => '3553500', 'name' => "Tapiraí"]);
        City::create(['state' => 25, 'ibge_code' => '3553609', 'name' => "Tapiratiba"]);
        City::create(['state' => 25, 'ibge_code' => '3553658', 'name' => "Taquaral"]);
        City::create(['state' => 25, 'ibge_code' => '3553708', 'name' => "Taquaritinga"]);
        City::create(['state' => 25, 'ibge_code' => '3553807', 'name' => "Taquarituba"]);
        City::create(['state' => 25, 'ibge_code' => '3553856', 'name' => "Taquarivaí"]);
        City::create(['state' => 25, 'ibge_code' => '3553906', 'name' => "Tarabai"]);
        City::create(['state' => 25, 'ibge_code' => '3553955', 'name' => "Tarumã"]);
        City::create(['state' => 25, 'ibge_code' => '3554003', 'name' => "Tatuí"]);
        City::create(['state' => 25, 'ibge_code' => '3554102', 'name' => "Taubaté"]);
        City::create(['state' => 25, 'ibge_code' => '3554201', 'name' => "Tejupá"]);
        City::create(['state' => 25, 'ibge_code' => '3554300', 'name' => "Teodoro Sampaio"]);
        City::create(['state' => 25, 'ibge_code' => '3554409', 'name' => "Terra Roxa"]);
        City::create(['state' => 25, 'ibge_code' => '3554508', 'name' => "Tietê"]);
        City::create(['state' => 25, 'ibge_code' => '3554607', 'name' => "Timburi"]);
        City::create(['state' => 25, 'ibge_code' => '3554656', 'name' => "Torre de Pedra"]);
        City::create(['state' => 25, 'ibge_code' => '3554706', 'name' => "Torrinha"]);
        City::create(['state' => 25, 'ibge_code' => '3554755', 'name' => "Trabiju"]);
        City::create(['state' => 25, 'ibge_code' => '3554805', 'name' => "Tremembé"]);
        City::create(['state' => 25, 'ibge_code' => '3554904', 'name' => "Três Fronteiras"]);
        City::create(['state' => 25, 'ibge_code' => '3554953', 'name' => "Tuiuti"]);
        City::create(['state' => 25, 'ibge_code' => '3555000', 'name' => "Tupã"]);
        City::create(['state' => 25, 'ibge_code' => '3555109', 'name' => "Tupi Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3555208', 'name' => "Turiúba"]);
        City::create(['state' => 25, 'ibge_code' => '3555307', 'name' => "Turmalina"]);
        City::create(['state' => 25, 'ibge_code' => '3555356', 'name' => "Ubarana"]);
        City::create(['state' => 25, 'ibge_code' => '3555406', 'name' => "Ubatuba"]);
        City::create(['state' => 25, 'ibge_code' => '3555505', 'name' => "Ubirajara"]);
        City::create(['state' => 25, 'ibge_code' => '3555604', 'name' => "Uchoa"]);
        City::create(['state' => 25, 'ibge_code' => '3555703', 'name' => "União Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3555802', 'name' => "Urânia"]);
        City::create(['state' => 25, 'ibge_code' => '3555901', 'name' => "Uru"]);
        City::create(['state' => 25, 'ibge_code' => '3556008', 'name' => "Urupês"]);
        City::create(['state' => 25, 'ibge_code' => '3556107', 'name' => "Valentim Gentil"]);
        City::create(['state' => 25, 'ibge_code' => '3556206', 'name' => "Valinhos"]);
        City::create(['state' => 25, 'ibge_code' => '3556305', 'name' => "Valparaíso"]);
        City::create(['state' => 25, 'ibge_code' => '3556354', 'name' => "Vargem"]);
        City::create(['state' => 25, 'ibge_code' => '3556404', 'name' => "Vargem Grande do Sul"]);
        City::create(['state' => 25, 'ibge_code' => '3556453', 'name' => "Vargem Grande Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3556503', 'name' => "Várzea Paulista"]);
        City::create(['state' => 25, 'ibge_code' => '3556602', 'name' => "Vera Cruz"]);
        City::create(['state' => 25, 'ibge_code' => '3556701', 'name' => "Vinhedo"]);
        City::create(['state' => 25, 'ibge_code' => '3556800', 'name' => "Viradouro"]);
        City::create(['state' => 25, 'ibge_code' => '3556909', 'name' => "Vista Alegre do Alto"]);
        City::create(['state' => 25, 'ibge_code' => '3556958', 'name' => "Vitória Brasil"]);
        City::create(['state' => 25, 'ibge_code' => '3557006', 'name' => "Votorantim"]);
        City::create(['state' => 25, 'ibge_code' => '3557105', 'name' => "Votuporanga"]);
        City::create(['state' => 25, 'ibge_code' => '3557154', 'name' => "Zacarias"]);

        City::create(['state' => 26, 'ibge_code' => '2800100', 'name' => "Amparo de São Francisco"]);
        City::create(['state' => 26, 'ibge_code' => '2800209', 'name' => "Aquidabã"]);
        City::create(['state' => 26, 'ibge_code' => '2800308', 'name' => "Aracaju"]);
        City::create(['state' => 26, 'ibge_code' => '2800407', 'name' => "Arauá"]);
        City::create(['state' => 26, 'ibge_code' => '2800506', 'name' => "Areia Branca"]);
        City::create(['state' => 26, 'ibge_code' => '2800605', 'name' => "Barra dos Coqueiros"]);
        City::create(['state' => 26, 'ibge_code' => '2800670', 'name' => "Boquim"]);
        City::create(['state' => 26, 'ibge_code' => '2800704', 'name' => "Brejo Grande"]);
        City::create(['state' => 26, 'ibge_code' => '2801009', 'name' => "Campo do Brito"]);
        City::create(['state' => 26, 'ibge_code' => '2801108', 'name' => "Canhoba"]);
        City::create(['state' => 26, 'ibge_code' => '2801207', 'name' => "Canindé de São Francisco"]);
        City::create(['state' => 26, 'ibge_code' => '2801306', 'name' => "Capela"]);
        City::create(['state' => 26, 'ibge_code' => '2801405', 'name' => "Carira"]);
        City::create(['state' => 26, 'ibge_code' => '2801504', 'name' => "Carmópolis"]);
        City::create(['state' => 26, 'ibge_code' => '2801603', 'name' => "Cedro de São João"]);
        City::create(['state' => 26, 'ibge_code' => '2801702', 'name' => "Cristinápolis"]);
        City::create(['state' => 26, 'ibge_code' => '2801900', 'name' => "Cumbe"]);
        City::create(['state' => 26, 'ibge_code' => '2802007', 'name' => "Divina Pastora"]);
        City::create(['state' => 26, 'ibge_code' => '2802106', 'name' => "Estância"]);
        City::create(['state' => 26, 'ibge_code' => '2802205', 'name' => "Feira Nova"]);
        City::create(['state' => 26, 'ibge_code' => '2802304', 'name' => "Frei Paulo"]);
        City::create(['state' => 26, 'ibge_code' => '2802403', 'name' => "Gararu"]);
        City::create(['state' => 26, 'ibge_code' => '2802502', 'name' => "General Maynard"]);
        City::create(['state' => 26, 'ibge_code' => '2802601', 'name' => "Gracho Cardoso"]);
        City::create(['state' => 26, 'ibge_code' => '2802700', 'name' => "Ilha das Flores"]);
        City::create(['state' => 26, 'ibge_code' => '2802809', 'name' => "Indiaroba"]);
        City::create(['state' => 26, 'ibge_code' => '2802908', 'name' => "Itabaiana"]);
        City::create(['state' => 26, 'ibge_code' => '2803005', 'name' => "Itabaianinha"]);
        City::create(['state' => 26, 'ibge_code' => '2803104', 'name' => "Itabi"]);
        City::create(['state' => 26, 'ibge_code' => '2803203', 'name' => "Itaporanga d'Ajuda"]);
        City::create(['state' => 26, 'ibge_code' => '2803302', 'name' => "Japaratuba"]);
        City::create(['state' => 26, 'ibge_code' => '2803401', 'name' => "Japoatã"]);
        City::create(['state' => 26, 'ibge_code' => '2803500', 'name' => "Lagarto"]);
        City::create(['state' => 26, 'ibge_code' => '2803609', 'name' => "Laranjeiras"]);
        City::create(['state' => 26, 'ibge_code' => '2803708', 'name' => "Macambira"]);
        City::create(['state' => 26, 'ibge_code' => '2803807', 'name' => "Malhada dos Bois"]);
        City::create(['state' => 26, 'ibge_code' => '2803906', 'name' => "Malhador"]);
        City::create(['state' => 26, 'ibge_code' => '2804003', 'name' => "Maruim"]);
        City::create(['state' => 26, 'ibge_code' => '2804102', 'name' => "Moita Bonita"]);
        City::create(['state' => 26, 'ibge_code' => '2804201', 'name' => "Monte Alegre de Sergipe"]);
        City::create(['state' => 26, 'ibge_code' => '2804300', 'name' => "Muribeca"]);
        City::create(['state' => 26, 'ibge_code' => '2804409', 'name' => "Neópolis"]);
        City::create(['state' => 26, 'ibge_code' => '2804458', 'name' => "Nossa Senhora Aparecida"]);
        City::create(['state' => 26, 'ibge_code' => '2804508', 'name' => "Nossa Senhora da Glória"]);
        City::create(['state' => 26, 'ibge_code' => '2804607', 'name' => "Nossa Senhora das Dores"]);
        City::create(['state' => 26, 'ibge_code' => '2804706', 'name' => "Nossa Senhora de Lourdes"]);
        City::create(['state' => 26, 'ibge_code' => '2804805', 'name' => "Nossa Senhora do Socorro"]);
        City::create(['state' => 26, 'ibge_code' => '2804904', 'name' => "Pacatuba"]);
        City::create(['state' => 26, 'ibge_code' => '2805000', 'name' => "Pedra Mole"]);
        City::create(['state' => 26, 'ibge_code' => '2805109', 'name' => "Pedrinhas"]);
        City::create(['state' => 26, 'ibge_code' => '2805208', 'name' => "Pinhão"]);
        City::create(['state' => 26, 'ibge_code' => '2805307', 'name' => "Pirambu"]);
        City::create(['state' => 26, 'ibge_code' => '2805406', 'name' => "Poço Redondo"]);
        City::create(['state' => 26, 'ibge_code' => '2805505', 'name' => "Poço Verde"]);
        City::create(['state' => 26, 'ibge_code' => '2805604', 'name' => "Porto da Folha"]);
        City::create(['state' => 26, 'ibge_code' => '2805703', 'name' => "Propriá"]);
        City::create(['state' => 26, 'ibge_code' => '2805802', 'name' => "Riachão do Dantas"]);
        City::create(['state' => 26, 'ibge_code' => '2805901', 'name' => "Riachuelo"]);
        City::create(['state' => 26, 'ibge_code' => '2806008', 'name' => "Ribeirópolis"]);
        City::create(['state' => 26, 'ibge_code' => '2806107', 'name' => "Rosário do Catete"]);
        City::create(['state' => 26, 'ibge_code' => '2806206', 'name' => "Salgado"]);
        City::create(['state' => 26, 'ibge_code' => '2806305', 'name' => "Santa Luzia do Itanhy"]);
        City::create(['state' => 26, 'ibge_code' => '2806503', 'name' => "Santa Rosa de Lima"]);
        City::create(['state' => 26, 'ibge_code' => '2806404', 'name' => "Santana do São Francisco"]);
        City::create(['state' => 26, 'ibge_code' => '2806602', 'name' => "Santo Amaro das Brotas"]);
        City::create(['state' => 26, 'ibge_code' => '2806701', 'name' => "São Cristóvão"]);
        City::create(['state' => 26, 'ibge_code' => '2806800', 'name' => "São Domingos"]);
        City::create(['state' => 26, 'ibge_code' => '2806909', 'name' => "São Francisco"]);
        City::create(['state' => 26, 'ibge_code' => '2807006', 'name' => "São Miguel do Aleixo"]);
        City::create(['state' => 26, 'ibge_code' => '2807105', 'name' => "Simão Dias"]);
        City::create(['state' => 26, 'ibge_code' => '2807204', 'name' => "Siriri"]);
        City::create(['state' => 26, 'ibge_code' => '2807303', 'name' => "Telha"]);
        City::create(['state' => 26, 'ibge_code' => '2807402', 'name' => "Tobias Barreto"]);
        City::create(['state' => 26, 'ibge_code' => '2807501', 'name' => "Tomar do Geru"]);
        City::create(['state' => 26, 'ibge_code' => '2807600', 'name' => "Umbaúba"]);

        City::create(['state' => 27, 'ibge_code' => '1700251', 'name' => "Abreulândia"]);
        City::create(['state' => 27, 'ibge_code' => '1700301', 'name' => "Aguiarnópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1700350', 'name' => "Aliança do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1700400', 'name' => "Almas"]);
        City::create(['state' => 27, 'ibge_code' => '1700707', 'name' => "Alvorada"]);
        City::create(['state' => 27, 'ibge_code' => '1701002', 'name' => "Ananás"]);
        City::create(['state' => 27, 'ibge_code' => '1701051', 'name' => "Angico"]);
        City::create(['state' => 27, 'ibge_code' => '1701101', 'name' => "Aparecida do Rio Negro"]);
        City::create(['state' => 27, 'ibge_code' => '1701309', 'name' => "Aragominas"]);
        City::create(['state' => 27, 'ibge_code' => '1701903', 'name' => "Araguacema"]);
        City::create(['state' => 27, 'ibge_code' => '1702000', 'name' => "Araguaçu"]);
        City::create(['state' => 27, 'ibge_code' => '1702109', 'name' => "Araguaína"]);
        City::create(['state' => 27, 'ibge_code' => '1702158', 'name' => "Araguanã"]);
        City::create(['state' => 27, 'ibge_code' => '1702208', 'name' => "Araguatins"]);
        City::create(['state' => 27, 'ibge_code' => '1702307', 'name' => "Arapoema"]);
        City::create(['state' => 27, 'ibge_code' => '1702406', 'name' => "Arraias"]);
        City::create(['state' => 27, 'ibge_code' => '1702554', 'name' => "Augustinópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1702703', 'name' => "Aurora do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1702901', 'name' => "Axixá do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1703008', 'name' => "Babaçulândia"]);
        City::create(['state' => 27, 'ibge_code' => '1703057', 'name' => "Bandeirantes do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1703073', 'name' => "Barra do Ouro"]);
        City::create(['state' => 27, 'ibge_code' => '1703107', 'name' => "Barrolândia"]);
        City::create(['state' => 27, 'ibge_code' => '1703206', 'name' => "Bernardo Sayão"]);
        City::create(['state' => 27, 'ibge_code' => '1703305', 'name' => "Bom Jesus do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1703602', 'name' => "Brasilândia do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1703701', 'name' => "Brejinho de Nazaré"]);
        City::create(['state' => 27, 'ibge_code' => '1703800', 'name' => "Buriti do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1703826', 'name' => "Cachoeirinha"]);
        City::create(['state' => 27, 'ibge_code' => '1703842', 'name' => "Campos Lindos"]);
        City::create(['state' => 27, 'ibge_code' => '1703867', 'name' => "Cariri do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1703883', 'name' => "Carmolândia"]);
        City::create(['state' => 27, 'ibge_code' => '1703891', 'name' => "Carrasco Bonito"]);
        City::create(['state' => 27, 'ibge_code' => '1703909', 'name' => "Caseara"]);
        City::create(['state' => 27, 'ibge_code' => '1704105', 'name' => "Centenário"]);
        City::create(['state' => 27, 'ibge_code' => '1705102', 'name' => "Chapada da Natividade"]);
        City::create(['state' => 27, 'ibge_code' => '1704600', 'name' => "Chapada de Areia"]);
        City::create(['state' => 27, 'ibge_code' => '1705508', 'name' => "Colinas do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1716703', 'name' => "Colméia"]);
        City::create(['state' => 27, 'ibge_code' => '1705557', 'name' => "Combinado"]);
        City::create(['state' => 27, 'ibge_code' => '1705607', 'name' => "Conceição do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1706001', 'name' => "Couto Magalhães"]);
        City::create(['state' => 27, 'ibge_code' => '1706100', 'name' => "Cristalândia"]);
        City::create(['state' => 27, 'ibge_code' => '1706258', 'name' => "Crixás do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1706506', 'name' => "Darcinópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1707009', 'name' => "Dianópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1707108', 'name' => "Divinópolis do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1707207', 'name' => "Dois Irmãos do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1707306', 'name' => "Dueré"]);
        City::create(['state' => 27, 'ibge_code' => '1707405', 'name' => "Esperantina"]);
        City::create(['state' => 27, 'ibge_code' => '1707553', 'name' => "Fátima"]);
        City::create(['state' => 27, 'ibge_code' => '1707652', 'name' => "Figueirópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1707702', 'name' => "Filadélfia"]);
        City::create(['state' => 27, 'ibge_code' => '1708205', 'name' => "Formoso do Araguaia"]);
        City::create(['state' => 27, 'ibge_code' => '1708254', 'name' => "Fortaleza do Tabocão"]);
        City::create(['state' => 27, 'ibge_code' => '1708304', 'name' => "Goianorte"]);
        City::create(['state' => 27, 'ibge_code' => '1709005', 'name' => "Goiatins"]);
        City::create(['state' => 27, 'ibge_code' => '1709302', 'name' => "Guaraí"]);
        City::create(['state' => 27, 'ibge_code' => '1709500', 'name' => "Gurupi"]);
        City::create(['state' => 27, 'ibge_code' => '1709807', 'name' => "Ipueiras"]);
        City::create(['state' => 27, 'ibge_code' => '1710508', 'name' => "Itacajá"]);
        City::create(['state' => 27, 'ibge_code' => '1710706', 'name' => "Itaguatins"]);
        City::create(['state' => 27, 'ibge_code' => '1710904', 'name' => "Itapiratins"]);
        City::create(['state' => 27, 'ibge_code' => '1711100', 'name' => "Itaporã do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1711506', 'name' => "Jaú do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1711803', 'name' => "Juarina"]);
        City::create(['state' => 27, 'ibge_code' => '1711902', 'name' => "Lagoa da Confusão"]);
        City::create(['state' => 27, 'ibge_code' => '1711951', 'name' => "Lagoa do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1712009', 'name' => "Lajeado"]);
        City::create(['state' => 27, 'ibge_code' => '1712157', 'name' => "Lavandeira"]);
        City::create(['state' => 27, 'ibge_code' => '1712405', 'name' => "Lizarda"]);
        City::create(['state' => 27, 'ibge_code' => '1712454', 'name' => "Luzinópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1712504', 'name' => "Marianópolis do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1712702', 'name' => "Mateiros"]);
        City::create(['state' => 27, 'ibge_code' => '1712801', 'name' => "Maurilândia do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1713205', 'name' => "Miracema do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1713304', 'name' => "Miranorte"]);
        City::create(['state' => 27, 'ibge_code' => '1713601', 'name' => "Monte do Carmo"]);
        City::create(['state' => 27, 'ibge_code' => '1713700', 'name' => "Monte Santo do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1713957', 'name' => "Muricilândia"]);
        City::create(['state' => 27, 'ibge_code' => '1714203', 'name' => "Natividade"]);
        City::create(['state' => 27, 'ibge_code' => '1714302', 'name' => "Nazaré"]);
        City::create(['state' => 27, 'ibge_code' => '1714880', 'name' => "Nova Olinda"]);
        City::create(['state' => 27, 'ibge_code' => '1715002', 'name' => "Nova Rosalândia"]);
        City::create(['state' => 27, 'ibge_code' => '1715101', 'name' => "Novo Acordo"]);
        City::create(['state' => 27, 'ibge_code' => '1715150', 'name' => "Novo Alegre"]);
        City::create(['state' => 27, 'ibge_code' => '1715259', 'name' => "Novo Jardim"]);
        City::create(['state' => 27, 'ibge_code' => '1715507', 'name' => "Oliveira de Fátima"]);
        City::create(['state' => 27, 'ibge_code' => '1721000', 'name' => "Palmas"]);
        City::create(['state' => 27, 'ibge_code' => '1715705', 'name' => "Palmeirante"]);
        City::create(['state' => 27, 'ibge_code' => '1713809', 'name' => "Palmeiras do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1715754', 'name' => "Palmeirópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1716109', 'name' => "Paraíso do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1716208', 'name' => "Paranã"]);
        City::create(['state' => 27, 'ibge_code' => '1716307', 'name' => "Pau D'Arco"]);
        City::create(['state' => 27, 'ibge_code' => '1716505', 'name' => "Pedro Afonso"]);
        City::create(['state' => 27, 'ibge_code' => '1716604', 'name' => "Peixe"]);
        City::create(['state' => 27, 'ibge_code' => '1716653', 'name' => "Pequizeiro"]);
        City::create(['state' => 27, 'ibge_code' => '1717008', 'name' => "Pindorama do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1717206', 'name' => "Piraquê"]);
        City::create(['state' => 27, 'ibge_code' => '1717503', 'name' => "Pium"]);
        City::create(['state' => 27, 'ibge_code' => '1717800', 'name' => "Ponte Alta do Bom Jesus"]);
        City::create(['state' => 27, 'ibge_code' => '1717909', 'name' => "Ponte Alta do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1718006', 'name' => "Porto Alegre do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1718204', 'name' => "Porto Nacional"]);
        City::create(['state' => 27, 'ibge_code' => '1718303', 'name' => "Praia Norte"]);
        City::create(['state' => 27, 'ibge_code' => '1718402', 'name' => "Presidente Kennedy"]);
        City::create(['state' => 27, 'ibge_code' => '1718451', 'name' => "Pugmil"]);
        City::create(['state' => 27, 'ibge_code' => '1718501', 'name' => "Recursolândia"]);
        City::create(['state' => 27, 'ibge_code' => '1718550', 'name' => "Riachinho"]);
        City::create(['state' => 27, 'ibge_code' => '1718659', 'name' => "Rio da Conceição"]);
        City::create(['state' => 27, 'ibge_code' => '1718709', 'name' => "Rio dos Bois"]);
        City::create(['state' => 27, 'ibge_code' => '1718758', 'name' => "Rio Sono"]);
        City::create(['state' => 27, 'ibge_code' => '1718808', 'name' => "Sampaio"]);
        City::create(['state' => 27, 'ibge_code' => '1718840', 'name' => "Sandolândia"]);
        City::create(['state' => 27, 'ibge_code' => '1718865', 'name' => "Santa Fé do Araguaia"]);
        City::create(['state' => 27, 'ibge_code' => '1718881', 'name' => "Santa Maria do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1718899', 'name' => "Santa Rita do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1718907', 'name' => "Santa Rosa do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1719004', 'name' => "Santa Tereza do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720002', 'name' => "Santa Terezinha do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720101', 'name' => "São Bento do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720150', 'name' => "São Félix do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720200', 'name' => "São Miguel do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720259', 'name' => "São Salvador do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720309', 'name' => "São Sebastião do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720499', 'name' => "São Valério"]);
        City::create(['state' => 27, 'ibge_code' => '1720655', 'name' => "Silvanópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1720804', 'name' => "Sítio Novo do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720853', 'name' => "Sucupira"]);
        City::create(['state' => 27, 'ibge_code' => '1720903', 'name' => "Taguatinga"]);
        City::create(['state' => 27, 'ibge_code' => '1720937', 'name' => "Taipas do Tocantins"]);
        City::create(['state' => 27, 'ibge_code' => '1720978', 'name' => "Talismã"]);
        City::create(['state' => 27, 'ibge_code' => '1721109', 'name' => "Tocantínia"]);
        City::create(['state' => 27, 'ibge_code' => '1721208', 'name' => "Tocantinópolis"]);
        City::create(['state' => 27, 'ibge_code' => '1721257', 'name' => "Tupirama"]);
        City::create(['state' => 27, 'ibge_code' => '1721307', 'name' => "Tupiratins"]);
        City::create(['state' => 27, 'ibge_code' => '1722081', 'name' => "Wanderlândia"]);
        City::create(['state' => 27, 'ibge_code' => '1722107', 'name' => "Xambioá"]);
    }

}