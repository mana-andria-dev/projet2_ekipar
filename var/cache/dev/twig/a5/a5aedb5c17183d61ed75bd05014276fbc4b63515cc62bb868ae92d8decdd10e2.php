<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9bd115fca3d2b52e42ab6217902d2cb95ea9047e27b264b0e277868f0b49feb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c563a85de7e05a71f5ef75f994ec9aeeb587a2a15326a0da89a4868032262a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c563a85de7e05a71f5ef75f994ec9aeeb587a2a15326a0da89a4868032262a9->enter($__internal_5c563a85de7e05a71f5ef75f994ec9aeeb587a2a15326a0da89a4868032262a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5c563a85de7e05a71f5ef75f994ec9aeeb587a2a15326a0da89a4868032262a9->leave($__internal_5c563a85de7e05a71f5ef75f994ec9aeeb587a2a15326a0da89a4868032262a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
