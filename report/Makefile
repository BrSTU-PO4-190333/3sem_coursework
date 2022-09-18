docker-compose-script:
	cd /app/report

	latexmk -pdf -output-directory=/temp/ -jobname=KP.PO4.190333-02_81_00 main_coursework_1_pz.tex
	latexmk -pdf -output-directory=/temp/ -jobname=KP.PO4.190333-02_12_00 main_coursework_3_a.tex
	latexmk -pdf -output-directory=/temp/ -jobname=KP.PO4.190333-02_90_00 main_coursework_4_b.tex

	latexmk -pdf -output-directory=/temp/ -jobname=KP.PO4.190333-02_81_00.bundle main.tex

	cp /temp/*.pdf /build/
