<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_1d4c051780ec207620569508920c5d2dbe134a4e1e61255fff8f981d2a7ffb28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4c051780ec207620569508920c5d2dbe134a4e1e61255fff8f981d2a7ffb28->enter($__internal_1d4c051780ec207620569508920c5d2dbe134a4e1e61255fff8f981d2a7ffb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_db77fe59310f79d5f6bdf78dd31712d2c2310b5c7bd42ef94111a09103e80e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db77fe59310f79d5f6bdf78dd31712d2c2310b5c7bd42ef94111a09103e80e96->enter($__internal_db77fe59310f79d5f6bdf78dd31712d2c2310b5c7bd42ef94111a09103e80e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1d4c051780ec207620569508920c5d2dbe134a4e1e61255fff8f981d2a7ffb28->leave($__internal_1d4c051780ec207620569508920c5d2dbe134a4e1e61255fff8f981d2a7ffb28_prof);

        
        $__internal_db77fe59310f79d5f6bdf78dd31712d2c2310b5c7bd42ef94111a09103e80e96->leave($__internal_db77fe59310f79d5f6bdf78dd31712d2c2310b5c7bd42ef94111a09103e80e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
