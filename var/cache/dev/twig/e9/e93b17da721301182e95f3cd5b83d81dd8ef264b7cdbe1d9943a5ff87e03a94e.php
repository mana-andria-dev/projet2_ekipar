<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_14004d25c69779ac5f8c5db65e1a76ba16a06d2731f664b06b2c1c4d9899161e extends Twig_Template
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
        $__internal_0d1dfac90fbb8c3f194ec115466c1a9e96bf3849ea68502f7f181d8c60e2091b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1dfac90fbb8c3f194ec115466c1a9e96bf3849ea68502f7f181d8c60e2091b->enter($__internal_0d1dfac90fbb8c3f194ec115466c1a9e96bf3849ea68502f7f181d8c60e2091b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0d1dfac90fbb8c3f194ec115466c1a9e96bf3849ea68502f7f181d8c60e2091b->leave($__internal_0d1dfac90fbb8c3f194ec115466c1a9e96bf3849ea68502f7f181d8c60e2091b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
