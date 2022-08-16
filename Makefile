DEPTRAC:=docker run --rm -v ${PWD}:/deptrac -w /deptrac php:8.1 php bin/deptrac.phar analyse

layers:
	${DEPTRAC} --config-file=deptrac.layers.yaml --report-uncovered --fail-on-uncovered

layers-baseline:
	${DEPTRAC} --config-file=deptrac.layers.yaml --formatter=baseline --output=deptrac.layers.baseline.yaml

modules:
	${DEPTRAC} --config-file=deptrac.modules.yaml --report-uncovered --fail-on-uncovered

layers-baseline:
	${DEPTRAC} --config-file=deptrac.modules.yaml --formatter=baseline --output=deptrac.modules.baseline.yaml
