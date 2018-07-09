<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0f8ea30ce72ea6bda1688af4d2347d46390efbcb0679d3f4bbc402707d5e6985 extends Twig_Template
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
        $__internal_d214f743778bbaadaf6135d21bc1c29cec6ea673d392bb06f876753029dd4c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d214f743778bbaadaf6135d21bc1c29cec6ea673d392bb06f876753029dd4c2b->enter($__internal_d214f743778bbaadaf6135d21bc1c29cec6ea673d392bb06f876753029dd4c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d214f743778bbaadaf6135d21bc1c29cec6ea673d392bb06f876753029dd4c2b->leave($__internal_d214f743778bbaadaf6135d21bc1c29cec6ea673d392bb06f876753029dd4c2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
