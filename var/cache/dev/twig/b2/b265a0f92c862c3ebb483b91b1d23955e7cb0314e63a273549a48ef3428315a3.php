<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0cea62fa7775311865fa2236c97f7f75fb68c10a2e7e7986944d9afb476ac253 extends Twig_Template
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
        $__internal_9d88f899e0de4830df060b2b52c11251e4a8375163eb1aa95b5c49ca5ffd2b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d88f899e0de4830df060b2b52c11251e4a8375163eb1aa95b5c49ca5ffd2b99->enter($__internal_9d88f899e0de4830df060b2b52c11251e4a8375163eb1aa95b5c49ca5ffd2b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9d88f899e0de4830df060b2b52c11251e4a8375163eb1aa95b5c49ca5ffd2b99->leave($__internal_9d88f899e0de4830df060b2b52c11251e4a8375163eb1aa95b5c49ca5ffd2b99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
