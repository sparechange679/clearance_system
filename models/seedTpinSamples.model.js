// seeders/seedTpinSamples.js
import TpinSample from '../models/tpinSample.model.js';

const sampleTPINs = [
    { tpin: '123456' },
    { tpin: '654321' },
    { tpin: '112233' },
    { tpin: '445566' }
];

await TpinSample.bulkCreate(sampleTPINs);

export default TpinSample;
