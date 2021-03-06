<?php
/* Smarty version 4.1.0, created on 2022-06-20 00:08:49
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\MainPageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62af9e716e4d08_43263091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e0c54a72fc994e104306924f750e1cf46784d87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\MainPageView.tpl',
      1 => 1654565507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62af9e716e4d08_43263091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4469830162af9e716e0640_10315841', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206665964562af9e716e4280_29590657', 'intro');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36141994462af9e716e4847_21238933', 'jumbotron');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'head'} */
class Block_4469830162af9e716e0640_10315841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4469830162af9e716e0640_10315841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">Wypożyczalnia</h1>
                <p class="tagline">Wypożycz sprzęt narciarski w atrakcyjnych cenach!</p>
                <p><a class="btn btn-default btn-lg" role="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search">WYPOŻYCZ</a></p>
            </div>
        </div>
    </header>
<?php
}
}
/* {/block 'head'} */
/* {block 'intro'} */
class Block_206665964562af9e716e4280_29590657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_206665964562af9e716e4280_29590657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container text-center">
        <br> <br>
        <h2 class="thin">Sprzęt najwyższej jakości</h2>
        <p class="text-muted">
            Nasze wypożyczalnie oferują sprzęt narciarski nawyżej jakości!<br>
            Posiadamy sprzęt dla początkujących oraz zaawansowanych miłośników sportów zimowych!
        </p>
    </div>
<?php
}
}
/* {/block 'intro'} */
/* {block 'jumbotron'} */
class Block_36141994462af9e716e4847_21238933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'jumbotron' => 
  array (
    0 => 'Block_36141994462af9e716e4847_21238933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="jumbotron top-space">
        <div class="container ">

            <h2 class="text-center thin">Dlaczego akurat my?</h2>

            <div class="row">
                
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Wypożyczalnia online</h4></div>
                    <div class="h-body text-center">
                        <p>Dzięki naszej stronie możesz wypożyczyć sprzęt z domu i odebrać go w jeden z naszych wypożyczalni. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Duży wybór</h4></div>
                    <div class="h-body text-center">
                        <p>W naszym asortymencie każdy znajdzie coś dla siebie!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Profesjonalna obłsuga</h4></div>
                    <div class="h-body text-center">
                        <p>Zatrudniamy najlepszych specjalistów, którzy będą w stanie sprostać Państwa oczekiwaniom.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Zadowoleni klienci</h4></div>
                    <div class="h-body text-center">
                        <p>Posiadamy duże grono zadowolonych klientów korzystających z usług naszych wypożyczalni. </p>
                    </div>
                </div>
                
            </div> <!-- /row  -->

        </div>
    </div>

    

<?php
}
}
/* {/block 'jumbotron'} */
}
